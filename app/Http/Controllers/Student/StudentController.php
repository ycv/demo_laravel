<?php

namespace App\Http\Controllers\Student;

use \Illuminate\Support\Facades\DB;
use App\Http\Model\Student;

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
    public function DemoQueryBuilder() {
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
        // get() 获取表的所有数据
        //$q1 = DB::table("demolaravel_student")->get();
        //first() 返回一条记录(默认第一条)
        //$q1 = DB::table("demolaravel_student")->first();
//        $q1 = DB::table("demolaravel_student")->orderBy("id", "desc")->first();
        // where() 
//        $q1 = DB::table("demolaravel_student")->where("id", ">=", 4)->get();
//        $q1 = DB::table("demolaravel_student")->whereRaw("id >= ? and age > ?", [4, 16])->get();
        //pluck() 返回结果集 指定的字段  一个字段
//        $q1 = DB::table("demolaravel_student")->pluck('name');
//        $q1 = DB::table("demolaravel_student")->whereRaw("id >= ? and age > ?", [4, 16])->pluck('name');
        //lists 返回结果集 指定的字段 一个字段  可以指定某个字段 为下标
        //$q1 = DB::table("demolaravel_student")->lists('name');
        //$q1 = DB::table("demolaravel_student")->lists('name', "id"); //指定id为下标 (key)    id 是key ; name 是value
        //select  返回结果集 指定的字段 可以是多个字段
//        $q1 = DB::table("demolaravel_student")->select("name", "age", "grade")->get();
        //chunk 分段获取数据    大数据 实用
        echo "<pre>";
        DB::table("demolaravel_student")->chunk(2, function($ss) {
            print_r($ss);
            //return false;     //可以终止查询
            //if("满足条件"){return false;} //满足条件  可以跳出查询
        });


//        dd($q1);
    }

    /**
     *  构造器 中 聚合函数
     * count() max() min() avg() sum()
     */
    public function DemoQueryAggregate() {
        //统计表中记录数
        //$q1 = DB::table("demolaravel_student")->count();
        //返回 字段最大值
        //$q1 = DB::table("demolaravel_student")->max('age');
        //返回 字段最小值
        //$q1 = DB::table("demolaravel_student")->min('age');
        //平均数
        $q1 = DB::table("demolaravel_student")->avg('age');
        //和
        //$q1 = DB::table("demolaravel_student")->sum('age');
        dd($q1);
    }

    public function DemoORMTest1() {
        //返回 一个集合
        //$s = Student::all();
        //根据主键查询
        //$s = Student::find(3);
        //根据主键查找 没找到抛出异常
        //$s = Student::findOrFail(3);
//        $s = Student::get();
        //作用等同于 find()
        //$s = Student::where("id", ">", '7')->orderBy("age", "desc")->first();
        //$s = Student::where("id", ">", '7')->orderBy("age", "desc")->get();
//        echo "<pre>";
//        Student::chunk(2, function($cs) {
//            print_r($cs);
//        });
//        
//        $s = Student::count();
        $s = Student::where("id", "<", 9)->max("age");
        dd($s);
    }

    public function DemoORMTest2() {
        //使用模型新增数据
//        $ss = new Student();
//        $ss->name = "张子看";
//        $ss->age = "19";
//        $ss->grade = "六年级";
//        $ss->addtime = time();
        //返回值是布尔值
        //$sav = $ss->save();
//        $s1 = Student::find(15);
//        echo $s1->addtime;
        //使用模型的create方法新增数据
//        $s1 = Student::create(
//                        ['name' => '按时33', 'age' => 18, 'addtime' => time()]
//        );
        //firstOrCreate 以属性查找数据 若没有 则新增数据，并取得新增的实例
//        $s1 = Student::firstOrCreate(
//                        ['name' => '按时3344']
//        );
        //firstOrNew 以属性查找数据 若没有 则新增实例,但不入库，需要数据入库 要添加save()方法
//        $s1 = Student::firstOrNew(
//                        ['name' => '按时3344']
//        );
        //返回布尔值
//        $s21 = $s1->save();
        //使用模型更新数据 如果$timestamps = true 会自动更新updated_at 字段
//        $s1 = Student::find(20);
//        $s1->name = "kikyt";
//        //返回布尔值
//        $s1s = $s1->save();
        //批量更新 返回更新的行数  没有更新的话 返回0
//        $s1s = Student::where("id", ">", 14)->update(['age' => 16, 'grade' => "五年级"]);
        //通过模型 删除
//        $s1 = Student::find(7);
//        //返回布尔值  没有删除数据 报异常
//        $s1s = $s1->delete();
        //通过主键 删除
        //返回删除条数 没有删除数据 返回0
//        $s1s = Student::destroy(7);
//        $s1s = Student::destroy(12, 11);
//        $s1s = Student::destroy([7, 8]);
        //指定条件删除 返回删除条数， 没有数据 返回0
        $s1s = Student::where('id', '=', 16)->delete();
        dd($s1s);
    }

}
