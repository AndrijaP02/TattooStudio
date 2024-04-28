<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use App\Notifications\PostKreiran;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Notifications\PostStatus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;


class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth-custom')->except(['index', 'show','search']);
    }
    
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        if (Gate::allows('isManager')) {
            
            $data = Posts::latest()->paginate(3);
        } else {
            $data = Posts::where('status', 'approved')->latest()->paginate(3);
        }
        
        return view('blogproba', compact('data'))->with('i', (request()->input('page', 1) - 1) * 3);
    }
    
    public function potvrdaStatusa()
    {
        $data = Posts::where('status', 'pending')->paginate(3);
        return view('potvrdaStatusa', compact('data'));
    }
    
    
    public function azurirajStatus(Request $request, $postId)
    {
        $request->validate([
            'status' => 'required|in:approved,rejected',
        ]);
        
        try {
            DB::beginTransaction();
            
            $post = Posts::findOrFail($postId);
            $post->status = $request->status;
            
            if ($post->status == 'rejected') {
                $post->delete();
            } else {
                $post->save();
            }
            
            if (Auth::check()) {
                $menadzer = User::where('role', 'manager')->first();
                
                if ($menadzer) {
                    $notification = new PostStatus($post);
                    $notification->setCustomMessage($post->status);
                    $menadzer->notifications()->create($notification->toDatabase($menadzer));
                } else {
                    DB::rollBack();
                    return redirect()->route('posts.potvrdaStatusa')->with('error', 'Menadžer nije pronađen.');
                }
            }
            
            DB::commit();
            return redirect()->route('posts.potvrdaStatusa')->with('success', 'Status posta uspešno ažuriran.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('posts.potvrdaStatusa')->with('error', 'Došlo je do greške: ' . $e->getMessage());
        }
    }
    
    
    
    
    
    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        return view('createPostsOnBlog');
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        $request->validate([
            'datum' => 'required', 
            'autor' => 'required', 
            'naslov'  =>  'required', 
            'kratak_opis' => 'required', 
            'post_image'  =>  'required|image|mimes:jpg,png,gif,svg,jpeg'
        ]);
        $file_name = time() . '.' . request()->post_image->getClientOriginalExtension();
        request()->post_image->move(public_path('img'),$file_name);
        $post= new Posts;
        $post->datum= $request->datum;
        $post->autor= $request->autor;
        $post->naslov=$request->naslov;
        $post->kratak_opis= $request->kratak_opis;
        $post->post_image= $file_name;
        $post->slug = Str::slug($request->naslov);
        
        $post->save();
        if (Auth::check()) {
            $admin = User::where('role', 'admin')->first();
            $notification = new PostKreiran($post);
            $admin->notifications()->create($notification->toDatabase($admin));
        }
        return redirect()->route('posts.index')->with('success', 'Dodali ste novi post.');
    }
    
    
    public function search(Request $request)
    {
        $searchTerm = $request->get('pretraga');
        $data = Posts::where('naslov', 'like', '%' . $searchTerm . '%')->paginate(3);
        
        return view('blogproba', compact('data'))->with('i', (request()->input('page', 1) - 1) * 3);
    }
    
    
    
    /**
    * Display the specified resource.
    */
    public function show($slug)
    {
        
        if (View::exists('posts.' . $slug)) {
            $post = Posts::where('slug', $slug)->firstOrFail();
            return view('posts.' . $slug, ['post' => $post]);
        } else {
            return redirect()->route('posts.index')->with('error', 'Članak još uvek nije publikovan.');
        }
    }
    
    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit(Posts $post)
    {
        return view('editPosts', compact('post'));
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(Request $request, Posts $post)
    {
        $request->validate([
            'datum' => 'required', 
            'naslov' => 'required', 
            'autor' => 'required', 
            'kratak_opis'  =>  'required',
            'post_image' => 'required'
        ]);
        $file_name= time(). '.' . request()->post_image->getClientOriginalExtension();
        request()->post_image->move(public_path('img'),$file_name);
        $input=$request->all();
        $input['post_image']=$file_name;
        $post->update($input);
        return redirect()->route('posts.index')->with('success', 'Uspešno ste izmenili podatke.');
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Posts $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Uspešno ste obrisali!');
    }
}
