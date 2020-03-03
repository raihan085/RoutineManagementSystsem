<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// default route

/*
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/main',function()
{
  return view('all');
});
*/

// normal user no navbar
Route::view('/signin','Web.Auth.auth.login');
Route::view('/signup','Web.Auth.auth.signup');

// test route
Route::view('/test','test');
Route::post('/testsubmit','testController@index');
Route::get('/tests/{id}','testController@main');

// going index function of UpdateRoutineController


// route group of user no change
Auth::routes();
Route::group([
  'prefix' => 'user'
],function(){
  Route::view('index','Web.Auth.Pages.indexLogIn');
  Route::view('joinus','Web.Auth.Pages.SignIn');
  Route::post('joinus/request','Web\Auth\PendingProfileController@index');

  Route::view('index/request','Web.Auth.Pages.requestSignIn');
});


// route group for admin

Route::group(['prefix'=>'admin'],function(){
  Route::group(['prefix'=>'Dashborad','namespace'=>'Web\Admin'],
  function(){
    Route::view('/','Web.Admin.Pages.index');

    Route::view('Add/Routine','Web.Admin.Pages.CreateRoutine');
    Route::post('Add/Routine','MainRoutineController@index');

    Route::view('Add/Class','Web.Admin.Pages.UploadRoutine');
    Route::post('Add/Class','Routine\MainRoutineController@index');

    Route::view('Add/Course','Web.Admin.Pages.UploadCourse');
    Route::post('Add/Course','MainRoutineController@addCourse');

    Route::view('Edit/Course','Web.Admin.Pages.EditCourse');
    Route::view('Delete/Course','Web.Admin.Pages.DeleteCourse');
    Route::view('Delete/Routine','Web.Admin.Pages.DeleteRoutine');
    Route::view('Delete/Account','Web.Admin.Pages.DeleteAccount');
  });
});


// route group for author

Route::group(['prefix'=>'author'],function(){
  // route group of student
  Route::group([
    'prefix' => 'student','namespace'=>'Web\Student'
  ],function(){
    Route::view('/','Web.Student.Pages.index');
    Route::get('Day','StudentController@show_day');
    Route::get('batch','StudentController@show_semester');
    Route::get('FullRoutine','StudentController@fullRoutine');
  });

  // route group of teacher

  Route::group([
    'prefix' => 'teacher','namespace'=>'Web\Teacher'
  ],function(){
    Route::view('/','Web.Teacher.Pages.index')->name('teacher');
    Route::get('Day','TeacherController@teacherDay')->name('teacher/Day');
    Route::get('Name/{name}','TeacherController@teacherName')->name('teacher/Name/{name}');
    Route::get('FullRoutine','TeacherController@fullRoutine')->name('teacher/FullRoutine');
  });

  // route group of staff

  Route::group([
    'prefix' => 'staff','namespace'=>'Web\Staff'
  ],function(){
    Route::view('/','Web.Staff.Pages.index');
    Route::get('Day','StaffController@staffDay');
    Route::get('Room/{roomNumber}','StaffController@staffRoom');
    Route::get('FullRoutine','StaffController@fullRoutine');
  });

});


/*

Route::match(['view','post'],'/Add/Routine','Web.Admin.Pages.CreateRoutine');
Route::match(['view','post'],'Add/Class','Web.Admin.Pages.UploadRoutine');
Route::match(['view','post'],'Add/Course','Web.Admin.Pages.UploadCourse');
Route::match(['view','post'],'Edit/Course','Web.Admin.Pages.EditCourseSubmit');
Route::match(['view','delete'],'Delete/Course','Web.Admin.Pages.DeleteCourse');
Route::match(['view','delete'],'Delete/Routine','Web.Admin.Pages.DeleteRoutine');
Route::match(['view','delete'],'Delete/Account','Web.Admin.Pages.DeleteAccount');

*/
