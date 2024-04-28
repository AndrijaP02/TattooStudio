<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Slike;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ArtistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth-custom')->except('index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Artist::latest()->paginate(4);
        return view('artistproba',compact('data'))->with('i',(request()->input('page',1)-1)*4);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createArtist');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'artist_prezime' => 'required', 
            'artist_ime' => 'required', 
            'artist_email'  =>  'required|regex:/^([A-Za-z0-9]){2,25}\@[a-z]{2,10}\.[a-z]{2,6}/|',
            'artist_kategorija' => 'required', 
            'artist_opis' => 'required', 
            'artist_image'  =>  'required|image|mimes:jpg,png,gif,svg,jpeg'
        ]);
         $file_name= time(). '.' . request()-> artist_image->getClientOriginalExtension();
         $image = Image::make($request->artist_image);
         $image->resize(242, 200);
         $image->save(public_path('img/' . $file_name));

         $artist= new Artist;
         $artist->artist_prezime= $request->artist_prezime;
         $artist->artist_ime= $request->artist_ime;
         $artist->artist_email=$request->artist_email;
         $artist->artist_kategorija= $request->artist_kategorija;
         $artist->artist_opis= $request->artist_opis;
         $artist->artist_image= $file_name;

         $artist->save();
        return redirect()->route('artist.index')->with('success', 'Dodali ste novog artista.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        return view('showArtist',compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        return view('editArtist', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artist $artist)
    {
        $request->validate([
            'artist_ime' => 'required', 
            'artist_prezime' => 'required', 
            'artist_email'  =>  'required|email',
            'artist_image' => 'required'
        ]);
         $file_name= time(). '.' . request()->artist_image->getClientOriginalExtension();
         request()->artist_image->move(public_path('img'),$file_name);
         $input=$request->all();
         $input['artist_image']=$file_name;
         $artist->update($input);
        return redirect()->route('artist.index')->with('success', 'Uspešno ste izmenili podatke.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();
        return redirect()->route('artist.index')->with('success', 'Uspešno ste obrisali!');
    }
}
