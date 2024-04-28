<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;
use App\Models\Slike;
use App\Models\Konsultacije;
use App\Models\Ocene;

class Artist extends Model
{
    use HasFactory;
    protected $table = 'artist';
    protected $fillable= ['artist_prezime', 'artist_ime', 'artist_email', 'artist_kategorija', 'artist_opis', 'artist_image' ];

    public function slike()
    {
        return $this->hasMany(Slike::class);
    }

    public function konsultacije()
    {
        return $this->hasMany(Konsultacije::class);
    }

    public function routeNotificationForDatabase()
    {
        return 'notifications'; 
    }

    public function ocene() {
        return $this->hasMany(Ocene::class, 'artist_id');
    }

    public function prosecnaOcena() {
        $prosecnaOcena = $this->ocene()->avg('ocena');
        return number_format($prosecnaOcena, 1);
    }
    
}
