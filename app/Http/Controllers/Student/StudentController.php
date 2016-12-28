<?php

namespace App\Http\Controllers\Student;

use \Illuminate\Support\Facades\DB;

class StudentController extends StcommonController {

    public function test1() {

        //增    返回布尔值  true or false
        $bool = DB::insert("insert into demolaravel_student (name,age)  values (?,?)", ["李寻欢", 15]);
        var_dump($bool);
        echo "<hr>";
        dd($bool);
        /*
          //查
          $sdbr = DB::select("SELECT * FROM  `demolaravel_student` ");
          var_dump($sdbr);
          echo "<hr>";
          dd($sdbr);
         */
    }

}
