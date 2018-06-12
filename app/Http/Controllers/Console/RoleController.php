<?php

namespace App\Http\Controllers\Console;

use App\Models\Admin;
use App\Models\AdminPower;
use App\Models\AdminRole;
use Illuminate\Http\Request;

class RoleController extends BaseController
{
    /**
     * 角色列表
     */
    public function index()
    {
        $roles = AdminRole::all();


        return view('console.role.index', compact('roles'));
    }

    /**
     * 创建角色页面
     */
    public function create()
    {

        $powers = AdminPower::powerGroup();

        return view('console.role.create', compact('powers'));
    }

    /**
     * 创建角色
     */


}
