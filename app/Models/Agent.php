<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table='agent';

    public function Order(){
        return $this->hasMany(Order::class,'agent_id','id');
    }
}
