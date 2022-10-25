<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(){
        $orders=Order::all();
        return view('invoice.index',compact('orders'));
    }

    public function show($id){
        $invoice=Order::with('OrderDetail.Product')->find($id);
        return view('invoice.show',compact('invoice'));
    }
}
