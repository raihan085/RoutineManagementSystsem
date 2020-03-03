<?php

namespace App\Http\Controllers\Web\Admin\Routine;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Web\Student\Student;
use App\Model\Web\Teacher\Teacher;
use App\Model\Web\Staff\Staff;
use App\Model\Web\Student\UpdateStudentRoutine;
use App\Model\Web\Teacher\UpdateTeacherRoutine;
use App\Model\Web\Staff\UpdateStaffRoutine;

use Carbon\Carbon;

class UpdateRoutineController extends Controller
{
    public function index()
    {
      if(Carbon::now->format('l') == 'Friday')
      {
          // delete all data from update routine table
          UpdateTeacherRoutine::delete();
          UpdateStudentRoutine::delete();
          UpdateStaffRoutine::delete();

          // insert all data from curent routine table

          $teacherQuery = Teacher::all(); // get all data from teachers routine table
          UpdateTeacherRoutine::insert($teacherQuery); // insert all data from teacher query

          $studentQuery = Student::all(); // get all data from student routine table
          UpdateStudentRoutine::insert($studentQuery); // insert all data from student query

          $staffQuery = Student::all(); // get all data from staff routine table
          UpdateStaffRoutine::insert($staffQuery); // insert all data from staff query

          // error if friday all update class routine delete
 
      }
    }
}
