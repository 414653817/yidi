<?php

namespace App\Http\Controllers\Console;

use Illuminate\Http\Request;

class RoleController extends BaseController
{
    public function index()
    {
        return view('console.role.index');
    }
}
