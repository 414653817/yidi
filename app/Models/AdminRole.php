<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminRole extends Model
{
    protected $table = 'admin_roles';

    protected $fillable = ['name', 'description'];

    /**
     * 与用户表建立一对一模型
     */
    public function user()
    {
        return $this->belongsTo(Admin::class, 'aid', 'id');
    }

    /**
     * 与权限建立多对多关联关系
     */
    public function powers()
    {
        return $this->belongsToMany(AdminPower::class, 'admin_role_to_powers', 'role_id', 'power_id');
    }
}
