<?php

namespace App\Http\Controllers;

use App\Models\Konsultacije;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\KonsultacijaPotvrda;
use App\Models\User;



class KonsultacijeController extends Controller
{
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        $consultations = Konsultacije::join('artist', 'konsultacije.artist_id', '=', 'artist.id')
        ->select('konsultacije.*', 'artist.artist_ime', 'artist.artist_prezime') ->where('konsultacije.potvrdjeno', true) ->paginate(10);
        
        return view('prikazKonsultacija', compact('consultations'))
        ->with('success', 'Uspešno');
    }
    
    public function indexMenadzer()
    {
        $consultations = Konsultacije::join('artist', 'konsultacije.artist_id', '=', 'artist.id')
        ->select('konsultacije.*', 'artist.artist_ime', 'artist.artist_prezime')
        ->paginate(10);
        
        return view('prikazKonsultacijaMenadzer', compact('consultations'))
        ->with('success', 'Uspešno');
    }
    
    
    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        $categories = Artist::distinct()->pluck('artist_kategorija'); 
        return view('createKonsultacije', compact('categories'));
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Molimo vas da se ulogujete kako biste dodali konsultaciju.');
        }
        $loggedInUser = Auth::user();
        $userEmail = $loggedInUser->email;
        
        
        if ($userEmail !== $request->input('email')) {
            return redirect()->back()->with('error', 'Morate koristiti isti email koji je povezan sa vašim nalogom.');
        }
        
        $request->validate([
            'prezime' => 'required', 
            'ime' => 'required', 
            'datum' => 'required', 
            'vreme' => 'required', 
            'email'  => 'required|regex:/^([A-Za-z0-9]){2,25}\@[a-z]{2,10}\.[a-z]{2,6}$/',
            'brojtelefona' => 'required|regex:/^06[0-9]{1}\/[0-9]{3}\-[0-9]{4}$/',
            'kategorija' => 'required'
        ]);
        
        $selectedCategory = $request->input('kategorija');
        $artist = Artist::where('artist_kategorija', $selectedCategory)->firstOrFail();
        
        $datum = $request->input('datum');
        $vreme = $request->input('vreme');
        
        $existingConsultation = Konsultacije::where('datum', $datum)
        ->where('vreme', $vreme)
        ->exists();
        
        if ($existingConsultation) {
            return redirect()->back()->with('error', 'Izabrano vreme je već zauzeto.');
        }
        
        $konsultacije = new Konsultacije([
            'prezime' => $request->prezime,
            'ime' => $request->ime,
            'email' => $request->email,
            'datum' => $request->datum,
            'vreme' => $request->vreme,
            'brojtelefona' => $request->brojtelefona,
            'artist_id' => $artist->id
        ]);
        
        $konsultacije->save();
        
        if (Auth::check()) {
            auth()->user()->increment('unread_consultations');
            
            $manager = User::where('role', 'manager')->first();
            $notification = new KonsultacijaPotvrda($konsultacije);
            $manager->notifications()->create($notification->toDatabase($manager));
        }
        return redirect()->back()->with('success', 'Uspešno ste kreirali konsultaciju!');
        
    }
    
    
    /**
    * Display the specified resource.
    */
    public function show(Konsultacije $konsultacije)
    {
        return view('showKonsultacija',compact('konsultacije'));
    }
    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit(Konsultacije $konsultacije)
    {
        //
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update($id)
    {
        $konsultacija = Konsultacije::find($id);
        
        if (!$konsultacija) {
            return back()->with('error', 'Konsultacija nije pronađena');
        }
        
        $konsultacija->update(['potvrdjeno' => !$konsultacija->potvrdjeno]);
        
        return back()->with('success', 'Status konsultacije je uspešno ažuriran');
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Konsultacije $konsultacije)
    {
        $konsultacije->delete();
        return redirect()->route('user.profil')->with('success', 'Uspešno ste obrisali!');
    }
    
}
