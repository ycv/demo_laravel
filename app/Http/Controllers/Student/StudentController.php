<?php

namespace App\Http\Controllers\Student;

use \Illuminate\Support\Facades\DB;

class StudentController extends StcommonController {

    /**
     * 原生态操作表
     */
    public function EcologicalOperationTable() {
        //增    返回布尔值  true or false
//        $bool = DB::insert("insert into demolaravel_student (name,age)  values (?,?)", ["李寻欢", 15]);
//        dd($bool);
        //查
        $sdbr = DB::select("SELECT * FROM  `demolaravel_student` where id>? ", [3]);
        dd($sdbr);
        //改 返回修改的行数
//        $sdbr = DB::update("update  `demolaravel_student`  set name=? where id=? ", ["李莫愁", 6]);
//        dd($sdbr);
        //删    返回删除行数
//        $sdbr = DB::update("delete from  `demolaravel_student`   where id=? ", [6]);
//        dd($sdbr);
    }

    /**
     * 查询构造器 
     */
    public function query1() {
        /**
         * 添加
         */
        //返回布尔值
//        $q1 = DB::table("demolaravel_student")->insert(
//                ["name" => "immoon", "age" => 18]
//        );
        //得到自增id
//        $qid = DB::table('demolaravel_student')->insertGetId(
//                ["name" => "阿斯达", "age" => 18]
//        );
        //添加多条数据  返回布尔值
//        $q2 = DB::table("demolaravel_student")->insert([
//            ["name" => "immoon11", "age" => 18], ["name" => "immoon12", "age" => 28]
//        ]);
//        
        /**
         * 更新
         */
        //更新  返回影响行数
//        $q1 = DB::table("demolaravel_student")->where('id', "<", 2)->update(
//                ['grade' => "四年级"]
//        );
//        $q1 = DB::table("demolaravel_student")->where('id', 3)->update(
//                ['age' => 23]
//        );
        //自增 or 自减  返回影响行数
        //默认自增1
//        $q1 = DB::table("demolaravel_student")->increment('age');
        //自增3
//        $q1 = DB::table("demolaravel_student")->increment('age', 3);
        //自减 默认1
//        $q1 = DB::table("demolaravel_student")->decrement('age', 3);
        //带条件 自减
//        $q1 = DB::table("demolaravel_student")->where('id', 3)->decrement('age', 3);
//        $q1 = DB::table("demolaravel_student")->where('id', 10)->decrement('age', 3, ["name" => "大碗"]);
        /**
         * 删除
         */
        //返回删除行数
//        $q1 = DB::table("demolaravel_student")->where('id', "=", 2)->delete();
        //不返回数据 表清空 不建议使用
//        DB::table("demolaravel_student")->truncate();
        /**
         * 查
         * get()    first()     where()     pluck()
         * lists()      select()    chunk()
         */
        echo "xz";
        die;
        //dd($q1);
    }

}
