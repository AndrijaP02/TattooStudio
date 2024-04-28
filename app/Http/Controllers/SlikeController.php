<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Slike;
use Illuminate\Support\Facades\Storage;


class SlikeController extends Controller
{
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        
    }
    
    public function showSlikeForArtist($artistId)
    {
        $artist = Artist::find($artistId);
        
        if (!$artist) {
            return ('<div class="text-center"> Nema artista </div>');
        }
        
        $slike = $artist->slike;
        
        return view('prikazSlika', [
            'slike' => $slike,
            'artist_id' => $artist->id,
            'artist_ime' => $artist->artist_ime,
            'artist_prezime' => $artist->artist_prezime,
        ]);
    }
    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        $artist = Artist::all(); 
        return view('dodajSlike', compact('artist'));
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        $request->validate([
            'artist_id' => 'required', 
            'slika'  =>  'required|image|mimes:jpg,png,gif,svg,jpeg'
        ]);
        $file_name= time(). '.' . request()-> slika->getClientOriginalExtension();
        request()->slika->move(public_path('img'),$file_name);
        $photo= new Slike();
        $photo->slika= $file_name;
        $photo->artist_id= $request->artist_id;
        
        $photo->save();
        return redirect()->route('slike.showSlikeForArtist', ['artistId' => $request->artist_id])
        ->with('success', 'Slike su dodate.');
    }


    public function destroy($slikaId)
    {
        $slika = Slike::findOrFail($slikaId);
        
        $slika->delete();
        Storage::delete('public/img/' . $slika->slika);
        
        return redirect()->route('slike.showSlikeForArtist', ['artistId' => $slika->artist_id])->with('success', 'Slika uspešno obrisana.');
    }
    
    
    /**
    * Display the specified resource.
    */
    
}
