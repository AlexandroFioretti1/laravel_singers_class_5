<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Singer extends Model
{
    use HasFactory;
    protected $fillable = ['artist_name', 'name', 'lastname', 'image_url', 'birth_date', 'published_album', 'is_in_a_band'];

    public static function generateSlug($artist_name)
    {
        return Str::slug($artist_name, '-');
    }

    public function singers() :HasMany
    {
        return $this->hasMany(Album::class);
    }
}
