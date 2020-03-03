<?php

namespace App\Http\Controllers\Web\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Web\Teacher\Teacher;
use Carbon\Carbon;

class TeacherController extends Controller
{

    public function teacherDay()
    {
      $day = 'Sunday';
      //$day = Carbon::now()->format('l');
      $query = array('Day'=>$day);
      $days = Teacher::where($query)->get();

      return view('Web.Teacher.Pages.RoutineDay')->with('days',$days);
    }

    public function teacherName($name)
    {

      $query = array('ShortName'=>$name);

      $days = Teacher::where($query)->get();

      return view('Web.Teacher.Pages.RoutineName')->with('days',$days);
    }

    public function fullRoutine()
    {
      $days = Teacher::all();

      return view('Web.Teacher.Pages.fullRoutine')->with('days',$days);
    }

/*    public function TeacherChangeClass($name,$day,$semester,$couresecode,$time)
    {
        if(Teacher::where('Day'=>$day,'YrToSe'=>$semster,'CourseCode'=>$coursecode,$time=>$time)->find() == null)
        {
          echo "class time avilable";
        }
    }
    */
}
