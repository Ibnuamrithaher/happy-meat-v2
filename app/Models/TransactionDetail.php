<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TransactionDetail extends Model
{
    

    protected $fillable = [
        'transactions_id', 'username',
        'address'
    ];

    protected $hidden =  [

    ];

    public function transaction(){
        return $this->belongTo(Transaction::class, 'transactions_id', 'id');
    }
}
