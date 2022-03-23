<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class vendorController extends Controller
{
    //
    public function index(){
        return view('dashboard.inventory views.index');
    }
}
