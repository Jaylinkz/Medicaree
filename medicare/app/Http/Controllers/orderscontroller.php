<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use Carbon\Carbon;

class orderscontroller extends Controller
{
   public function orders() {
  $orders = order::all();#orderBy("created_at","DESC")->get()->take(10);
  $totalrevenue =order::sum("price");
  $todaysales = order::whereDate("Created_at",carbon::today())->sum("Price");
  $todayorders =order::whereDate("Created_at",carbon::today())->count();
  return view("inventory views.dashboard",["orders"=>$orders, "totalrevenue"=>$totalrevenue,"todaysales"=>$todaysales,"todayorders"=>$todayorders]);


}//
}
