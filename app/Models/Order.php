<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='orders';


    public function User(){
        return $this->hasMany(User::class,'id','customer_id');
    }
    public function Agent(){
        return $this->hasMany(Agent::class,'id','agent_id');
    }

    public function OrderDetail(){
        return $this->hasMany(OrderDetail::class,'order_id','id');
    }
}
