<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelGallery extends Model
{

    protected $fillable = [
        'artikel_packages_id', 'image'
    ];

    protected $hidden =  [

    ];

    public function artikel_package(){
        return $this->belongsTo(ArtikelPackage::class, 'artikel_packages_id', 'id');
    }
}