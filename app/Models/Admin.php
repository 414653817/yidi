<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';

    //白名单
    protected $fillable = ['name', 'mobile', 'password', 'role_id', 'status', 'parent_id'];

    protected $hidden = ['password', 'remimber_token'];

    /**
     * 与role建立对应关系
     */
    public function role()
    {
        //一对一:第一个参数都是你要获取的模型,第二个参数就是获取的模型的外键,第三个参数是当前模型的主键
        return $this->hasOne(AdminRole::class, 'id', 'role_id');
    }
}