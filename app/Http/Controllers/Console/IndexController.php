<?php

namespace App\Http\Controllers\Console;


use App\Services\AuthService;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    //
    public function index()
    {
        //获取所有菜单
        $groups = AuthService::getPowerGroup();

        return view('console/index/index', compact('groups'));
    }

    public function welcome()
    {
        return view('console/index/welcome');
    }
}






