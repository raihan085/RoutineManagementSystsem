<?php

namespace App\Http\Controllers\Web\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use App\Model\Web\Teacher\Teacher;
use App\Model\Web\Teacher\UpdateTeacherRoutine;

use Carbon\Carbon;

class TeacherController extends Controller
{

    use AuthenticatesUsers;

    public function teacherDay()
    {
      //$day = 'Sunday';
      $day = Carbon::now()->format('l');
      $query = array('Day'=>$day);
      $days = UpdateTeacherRoutine::where($query)->get();

      return view('Web.Teacher.Pages.RoutineDay')->with('days',$days);
    }

    public function teacherName()
    {
      $name = Auth::guard('profile')->user()->ShortName;
      $query = array('ShortName'=>$name);

      $days = UpdateTeacherRoutine::where($query)->get();

      return view('Web.Teacher.Pages.RoutineName')->with('days',$days);
    }

    public function fullRoutine()
    {
      $days = Teacher::all();

      return view('Web.Teacher.Pages.fullRoutine')->with('days',$days);
    }


}
