<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;


class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable= ['datum', 'naslov', 'autor', 'post_image', 'kratak_opis', 'slug', 'status'];
    
    public function routeNotificationForDatabase()
    {
        return 'notifications'; 
    }
}
