<?php


// route group of user no change

Route::group([
    'namespace' =>'Web\Admin\Auth'
],function(){

  // authentication
  Route::view('verify','Web.Auth.Pages.indexLogIn')->name('verification.resend');

  // log in system
  Route::view('/','Web.Auth.Pages.indexLogIn')->name('user.index');
  Route::post('index','PendingProfileController@login')->name('login');
  //Route::post('index/forgetpassword','ProfileController@changePassword')->name('change.password');

  //Route::post('index','ProfileController@index')->name('login');
  // join us system
  Route::view('joinus','Web.Auth.Pages.SignIn')->name('user.join.us');
  Route::post('joinus/request','RegisterController@create')->name('user.join.us.request');

  // contact system
  Route::view('contact','Web.Auth.Pages.Contact')->name('user.contact');
  Route::post('contact','UserContactController@addContact');

  Route::view('request/contact','Web.Auth.Pages.Contact')->name('user.request.contact');
  Route::post('request/contact','UserContactController@addContact');

  // Request
  Route::view('request','Web.Auth.Pages.requestSignIn')->name('user.index.request');

  Route::get('logout','PendingProfileController@logout')->name('user.logout');
});


// auth and middleware add korte hobe
Route::group(['prefix'=>'admin'],function(){
  Route::group(['prefix'=>'dashborad','namespace'=>'Web\Admin','middleware'=>'admin'],
  function(){
    //Route::view('/','Web.Admin.Pages.index')->name('admin');

    // request
    Route::get('user/request','Auth\PendingProfileController@show_request')->name('admin.user.request');
    Route::post('user/request','Auth\PendingProfileController@accept_request')->name('admin.user.request.accept');
    Route::delete('user/request','Auth\PendingProfileController@delete_request')->name('admin.user.request.delete');

    // inbox
    Route::get('inbox','Auth\UserContactController@showContact')->name('admin.inbox');
    Route::post('inbox','Auth\UserContactController@deleteContact')->name('admin.inbox.delete');

    // add course in syllabus
    Route::view('add/course','Web.Admin.Pages.Syllabus.UploadCourse')->name('admin.add.course');
    Route::post('add/course','syllabusController@addCourse')->name('admin.add.course.submit');
    Route::view('edit/course','Web.Admin.Pages.Syllabus.EditCourse')->name('admin.edit.course');
    Route::post('Edit/Course','syllabusController@editCourse')->name('admin.edit.course.submit');
    Route::view('delete/course','Web.Admin.Pages.Syllabus.DeleteCourse')->name('admin.delete.course');
    Route::post('Delete/Course','syllabusController@deleteCourse')->name('admin.delete.course.submit');

    // room add
    Route::view('add/room','Web.Admin.Pages.Department.AddRoomNumber')->name('admin.add.roomNumber');
    Route::post('AddRoom','syllabusController@departmentRoom')->name('admin.add.roomNumber.submit');

    // add course in routine
    Route::view('add/class','Web.Admin.Pages.Routine.UploadRoutine')->name('admin.add.class');
    Route::post('Add/Class','Routine\MainRoutineController@addClass')->name('admin.add.class.submit');

    // delete account
    Route::get('delete/account','Auth\ProfileController@AccountShow')->name('admin.delete.account');
    Route::post('Delete/Account','Auth\ProfileController@deleteAccount')->name('admin.delete.account.submit');

    // full routine
    Route::get('/','Routine\AdminShowAdminRoutineController@showFullRoutine')->name('admin');

    // extra
    Route::view('Delete/Routine','Web.Admin.Pages.DeleteRoutine')->name('admin.delete.routine');
    Route::view('Add/Routine','Web.Admin.Pages.CreateRoutine')->name('admin.add.routine');
    Route::post('Add/Routine','Routine\MainRoutineController@index');
  });
});


// route group for author

Route::group(['prefix'=>'author'],function(){
  // route group of student
  Route::group([
    'prefix' => 'student','namespace'=>'Web\Student','middleware'=>['student']
  ],function(){
    //Route::view('/','Web.Student.Pages.index');
    Route::get('Day','StudentController@show_day')->name('student.day.routine');
    Route::get('Batch','StudentController@show_semester')->name('student.batch.routine');
    Route::get('/','StudentController@fullRoutine')->name('Student');
    Route::get('contact','StudentController@contact')->name('student.contact');
  });

  // route group of teacher

  Route::group([
    'prefix' => 'teacher','namespace'=>'Web\Teacher','middleware'=>['teacher']
  ],function(){
    Route::get('/','TeacherController@fullRoutine')->name('Teacher');
    Route::get('day','TeacherController@teacherDay')->name('teacher.day.routine');
    Route::get('name','TeacherController@teacherName')->name('teacher.name.routine');
    Route::view('requestclass','Web.Teacher.Pages.RequestedClassTime')->name('request.class');
    Route::post('requestclass','ExtraRequestRoutineController@index')->name('request.class.submit');
    Route::view('contact','Web.Teacher.Pages.Contact')->name('teacher.contact');
    });

  // route group of staff

  Route::group([
    'prefix' => 'staff','namespace'=>'Web\Staff','middleware'=>['staff']
  ],function(){
    //Route::view('/','Web.Staff.Pages.index');
    Route::get('Day','StaffController@staffDay')->name('staff.day.routine');
    Route::get('Room/{roomNumber}','StaffController@staffRoom')->name('staff.room.number.routine');
    Route::get('/','StaffController@fullRoutine')->name('Staff');
  });

});

//Route::get('teachertest','Web\Teacher\ExtraRequestRoutineController@index');
