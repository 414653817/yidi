<?php
namespace App\Services;


use App\Models\Admin;
use App\Models\AdminPower;
use App\Models\AdminRole;

class AuthService extends BaseService {

    /**
     * 获取权限菜单
     * return array
     */
    public static function getPowerGroup()
    {
        $groups = AdminPower::powerGroup();
        return $groups;
    }


    /**
     * 获取所有角色
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getAllRoles()
    {
        $roles = AdminRole::all();
        return $roles;
    }

}