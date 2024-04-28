<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;
use App\Models\Slike;

class Slike extends Model
{
    use HasFactory;
    protected $table = 'slike';
    protected $fillable= ['artist_id', 'slika'];

    public function artisti(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }
}
