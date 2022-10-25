<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='order_detail';
    public function Product(){
        return $this->belongsTo(Product::class, 'product_id','id');
    }

    public function Order(){
        return $this->belongsTo(Order::class, 'order_id','id');
    }
}
