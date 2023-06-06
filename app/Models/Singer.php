<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    use HasFactory;
    protected $fillable = ['artist_name', 'name', 'lastname', 'image_url', 'birth_date', 'published_album', 'is_in_a_band'];

}
