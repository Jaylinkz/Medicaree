<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercon extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function profile()
    {
        return view('profile');
    }
    public function searchBar()
    {
        return view('searchBar');
    }
   
}
