<?php

namespace App\Http\Controllers\Console;

use Illuminate\Http\Request;

class IndexController extends BaseController
{
    //
    public function index()
    {
        return view('console/index/index');
    }

    public function welcome()
    {
        return view('console/index/welcome');
    }
}





