<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function PopularProduct()
    {
        $products=Product::withCount('OrderDetail')->orderBy('order_detail_count','DESC')->limit(10)->get();
        // dd($products);
        $return =[];
         foreach ($products as $key => $product) {
             $name =$product->product_name;
             $sale = $product->order_detail_count;
             $price= $product->price_sell;

             $return[] =[
                'id'=>$key + 1,
                'name'=>$name,
                'sale'=>$sale,
                'price'=>$price
             ];
         }        
        $output['data'] = $return;
        echo  json_encode($output);
    }

    public function PopularCustomer(){
        $customers=User::withCount('Order')->orderBy('order_count','DESC')->limit(10)->get();
        $return =[];
        foreach ($customers as $key => $customer) {
            $name =$customer->first_name;
            $total = $customer->order_count . "  ". "Order";

            $return[] =[
               'id'=>$key + 1,
               'name'=>$name,
               'total'=>$total,
            ];
        }        
        // dd($customer[0]);
        $output['data'] = $return;
        echo  json_encode($output);
    }

    public function PopularAgent(){
        $Agents=Agent::withCount('Order')->orderBy('order_count','DESC')->limit(10)->get();
        $return =[];
        foreach ($Agents as $key => $Agent) {
            $name =$Agent->store_name;
            $total = $Agent->order_count . "  ". "Customer";

            $return[] =[
               'id'=>$key + 1,
               'name'=>$name,
               'total'=>$total,
            ];
        }        
        // dd($customer[0]);
        $output['data'] = $return;
        echo  json_encode($output);
    }

    public function Invoices(Request $request){
        if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('orders')
         ->where('invoice_id', 'like', '%'.$query.'%')
         ->orWhere('name', 'like', '%'.$query.'%')
         ->orWhere('payment_date', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('orders')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
        foreach ($data as $key => $row) 
       {
       
        // $href=' <a href="'.route('show',$row->id).'" class="btn btn-primary ">Show</a>';
        // $key + 1;
        // dd($href);
        $output .= '
        <tr>
         <td>'. $key  .'</td>
         <td>'.$row->invoice_id.'</td>
         <td>'.$row->name.'</td>
         <td>'.$row->payment_date.'</td>
         <td>'.konversi_uang($row->payment_total).'</td>
         <td><a href='.route('invoice.show',$row->id).' class="btn btn-primary ">Show</a></td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
