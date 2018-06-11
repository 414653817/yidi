<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminStaticPagesController extends Controller
{
    //
    public function home()
    {
        return view('admin_static_pages/home');
    }

    public function welcome()
    {
        return view('admin_static_pages/welcome');
    }
}





