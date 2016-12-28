<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

//Student模型
class Student extends Model {

    //默认表名为    students
    //关联表名
    protected $table = 'demolaravel_student';
    //默认以id为主键
    //指定主键
    protected $primaryKey = 'id';
    //关闭时间属性 自动维护时间戳  框架会自动更新 `updated_at`, `created_at` 两个字段
    public $timestamps = false;
    //指定允许批量赋值的字段
    protected $fillable = ['name', 'age', 'addtime'];
    //指定不允许批量赋值的字段
    protected $guarded = ['grade'];

    //修改 `updated_at`, `created_at` 字段值 为时间戳  原来是日期格式
    // public $timestamps = true; 起作用
    protected function getDateFormat() {
        return time();
    }

//    protected function asDateTime($val) {
//        return $val;
//    }
}
