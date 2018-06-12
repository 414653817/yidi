<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminPower extends Model
{
    protected $table = 'admin_powers';
    /**
     * 获取权限分组
     */
    public static function powerGroup()
    {
        $data = [];
        //获取主菜单
        $first_menu = self::where('name', 'LIKE', '%index')->where('parent_id', 0)->get()->sortBy('sort');
        foreach ($first_menu as $val) {
            //获取二级菜单
            $second_menu = self::where('parent_id', $val->id)->get();
            $data[$val->group][$val->label]['id'] = $val->id;
            if ($second_menu) {
                $data[$val->group][$val->label]['child'] = $second_menu->toArray();
            } else {
                $data[$val->group][$val->label]['child'] = [];
            }
        }
        return $data;
    }
}
