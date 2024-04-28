<?php

namespace App\Http\Controllers;

use App\Models\Ocene;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OceneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth-custom');
    }
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        $ocene = Ocene::join('artist', 'artist.id', '=', 'ocene.artist_id')
        ->join('users', 'users.id', '=', 'ocene.user_id')
        ->select('artist.artist_ime', 'artist.artist_prezime', 'users.name', 'users.prezime', 'ocene.ocena')
        ->paginate(10);
        
        $prosecneOcene = Artist::select('artist_ime', 'artist_prezime')
        ->addSelect(DB::raw('AVG(ocene.ocena) as prosecna_ocena'))
        ->join('ocene', 'artist.id', '=', 'ocene.artist_id')
        ->groupBy('artist.id', 'artist.artist_ime', 'artist.artist_prezime')
        ->get();
        
        return view('prikazOcena', compact('ocene','prosecneOcene'))
        ->with('success', 'Uspešno');
    }
    
    /**
    * Show the form for creating a new resource.
    */
    public function create($id)
    {
        $row = Artist::find($id);
        
        if (!$row) {
            return abort(404); 
        }
        
        return view('ocenjivanje', ['row' => $row]);
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        $request->validate([
            'artist_id' => 'required',
            'ocena' => 'required|numeric|min:1|max:5',
        ]);
        
        Ocene::create([
            'artist_id' => $request->artist_id,
            'user_id' => auth()->user()->id, 
            'ocena' => $request->ocena,
        ]);
        
        return redirect()->route('artist.index')->with('success', 'Ocena uspešno sačuvana.');
    }
    
    /**
    * Display the specified resource.
    */
    public function show(Ocene $ocene)
    {
        //
    }
    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit(Ocene $ocene)
    {
        //
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(Request $request, Ocene $ocene)
    {
        //
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Ocene $ocene)
    {
        //
    }
}
