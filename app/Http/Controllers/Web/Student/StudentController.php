<?php

namespace App\Http\Controllers\Web\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Web\Student\Student;
use Carbon\Carbon;

class StudentController extends Controller
{
    public function show_day()
    {
        $day = Carbon::now()->format('l');
        //$day = 'Sunday';
        $query = array('Day'=>$day);

        $days = Student::where($query)->get();

        return view('Web.Student.Pages.RoutineDay')->with('days',$days);
    }

    public function show_semester()
    {
        //$semester,$session,$section
        $semester = '1/1';
        $session = "2019-20";
        $section = "A";

        $query = array('YearToSemester'=>$semester,'Session'=>$session,'Section'=>$section);

        $days = Student::where($query)->get();

        return view('Web.Student.Pages.RoutineBatch')->with('days',$days);
    }


    public function fullRoutine()
    {
      $days = Student::all();

      return view('Web.Student.Pages.fullRoutine')->with('days',$days);
    }
}
