<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class LoginController extends Controller
{
    //后台登录
    public function create()
    {
        return view('login.create');
    }

    public function store(Request $request)
    {

    }
}





