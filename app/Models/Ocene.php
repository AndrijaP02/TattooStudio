<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;
use App\Models\User;


class Ocene extends Model
{
    use HasFactory;
    protected $table = 'ocene';
    protected $fillable= ['user_id', 'artist_id', 'ocena'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function artist() {
        return $this->belongsTo(Artist::class, 'artist_id');
    }
}
