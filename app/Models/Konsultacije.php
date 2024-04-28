<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;
use App\Models\User;


class Konsultacije extends Model
{
    use HasFactory;
    protected $table = 'konsultacije';
    protected $fillable= ['datum', 'vreme','ime', 'prezime', 'email','brojtelefona','artist_id', 'potvrdjeno'];

    public function artisti(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }
    
    public function korisnik(): BelongsTo
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }
    public function routeNotificationForDatabase()
    {
        return 'notifications'; 
    }
}
