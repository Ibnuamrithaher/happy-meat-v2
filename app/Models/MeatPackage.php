<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MeatPackage extends Model
{


    protected $fillable = [
        'patch',
        'user_id',
        'title',
        'slug',
        'type',
        'price',
        'about'
    ];

    protected $hidden =  [];

    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'meat_packages_id', 'id');
    }
}
