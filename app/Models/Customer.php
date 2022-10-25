<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='customer';

    // public function Order(){
    //     return $this->hasMany(Order::class,'id','customer_id');
    // }
}
