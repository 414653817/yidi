<?php

namespace App\Http\Controllers\Console;

use App\Models\AdminPower;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    //
    public function index()
    {
        //获取所有菜单
        $groups = AdminPower::powerGroup();

        return view('console/index/index', compact('groups'));
    }

    public function welcome()
    {
        return view('console/index/welcome');
    }
}






