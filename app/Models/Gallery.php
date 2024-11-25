<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Gallery extends Model
{
    

    protected $fillable = [
        'meat_packages_id', 'image'
    ];

    protected $hidden =  [

    ];

    public function meat_package(){
        return $this->belongsTo(MeatPackage::class, 'meat_packages_id', 'id');
    }
}
