<?php

namespace App\Http\Controllers\Console;


use App\Services\AuthService;
use Illuminate\Http\Request;

class RoleController extends BaseController
{
    /**
     * 角色列表
     */
    public function index()
    {
        $roles = AuthService::getAllRoles();

        return view('console.role.index', compact('roles'));
    }

    /**
     * 创建角色页面
     */
    public function create()
    {

        $powers = AuthService::getPowerGroup();

        return view('console.role.create', compact('powers'));
    }

    /**
     * 创建角色
     */


}
