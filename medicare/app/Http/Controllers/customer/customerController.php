<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class customerController extends Controller
{
    //
    public function index(){
        return view('dashboard.custormer.index');
    }

}
