<?php

/*
  |--------------------------------------------------------------------------
  | Routes File
  |--------------------------------------------------------------------------
  |
  | Here is where you will register all of the routes in an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome');
});




//Route::get('query1', ['uses' => 'Student\StudentController@DemoQueryBuilder']);
//Route::any('test', [ 'uses' => 'Student\StudentController@EcologicalOperationTable']);
//设置 Student 中路由
Route::group(['namespace' => 'Student'], function() {
    Route::get('stquery1', ['uses' => 'StudentController@DemoQueryBuilder']);
    Route::any('sttest', [ 'uses' => 'StudentController@EcologicalOperationTable']);
});



/*
  //参数路由  正则判断  {id}必须填写   {name?}  name可以不写    where 条件可以不加    id是数组 name是字母
  Route::get('test2/{id}/{name?}', function($id, $name = "moren") {
  return "test2-id:" . $id . "---name:" . $name;
  })->where(["id" => "[0-9]+", "name" => "[A-Za-z]+"]);
 */
/*
  //路由别名
  Route::get('test3/cccaa', ["as" => "test3", function() {
  return route('test3');
  }]);
 */
/*
  //路由群组
  // Route::group(['namespace'=>'Home'],function(){});
  //路由前缀
  Route::group(['prefix' => 'st'], function() {
  Route::get('test3/cz', function() {
  return 'xxz';
  });
  });
 */

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | This route group applies the "web" middleware group to every route
  | it contains. The "web" middleware group is defined in your HTTP
  | kernel and includes session state, CSRF protection, and more.
  |
 */

Route::group(['middleware' => ['web']], function () {
    //
});
