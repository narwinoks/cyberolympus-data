<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='product';


    public function OrderDetail(){
        return $this->hasMany(OrderDetail::class);
    }
}
