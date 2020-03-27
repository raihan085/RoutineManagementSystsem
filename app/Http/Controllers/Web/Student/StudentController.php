<?php

namespace App\Http\Controllers\Web\Student;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Web\Student\Student;
use App\Model\Web\Student\UpdateStudentRoutine;
use App\Model\Web\Auth\Profile;

use Carbon\Carbon;

class StudentController extends Controller
{

    use AuthenticatesUsers;

    public function show_day()
    {
        $day = Carbon::now()->format('l');
        //$day = 'Sunday';

        $query = array('Day'=>$day);

        $days = UpdateStudentRoutine::where($query)->get();

        return view('Web.Student.Pages.RoutineDay')->with('days',$days);
    }

    public function show_semester()
    {
        //$semester,$session,$section
        $user = \Auth::guard('profile')->user();

        $registrationNumber = $user->RegistrationNumber;
        $semester = $user->YearToSemester;
        $session = $user->Session;
        $section = $user->Section;

        /*$students = Profile::where(['RegistrationNumber'=>$registrationNumber])->get();

        foreach($students as $student)
        {
          $semester = $student->Semester;
          $section = $student->Section;
          $name = $student->Name;
        }
        */
        // find semester session section form a model

        $query = array('YearToSemester'=>$semester,'Session'=>$session,'Section'=>$section);

        $days = UpdateStudentRoutine::where($query)->get();

        return view('Web.Student.Pages.RoutineBatch')->with(['days'=>$days]);
    }

    public function fullRoutine()
    {
      $days = Student::all();

      return view('Web.Student.Pages.fullRoutine')->with(['days'=>$days]);
    }

}
