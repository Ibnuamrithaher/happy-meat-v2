<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoTutorial extends Model
{
    protected $fillable = [
        'title', 'slug', 'resource', 'creator', 'publish', 'desc'
    ];

    protected $hidden = [

    ];

    // public function artikel_galleries(){
    //     return $this->hasMany(ArtikelGallery::class, 'artikel_packages_id', 'id');
    // }
}