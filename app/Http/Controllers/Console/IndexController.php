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
        print_r($groups);exit;
        return view('console/index/index');
    }

    public function welcome()
    {
        return view('console/index/welcome');
    }
}





