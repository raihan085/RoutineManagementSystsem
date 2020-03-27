<?php

namespace App\Http\Controllers\Web\Admin\Routine;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Web\Teacher\UpdateTeacherRoutine;

class AdminShowAdminRoutineController extends Controller
{
    public function showFullRoutine()
    {
      $days = UpdateTeacherRoutine::all();
      return view('Web.Admin.Pages.Routine.fullRoutine')->with('days',$days);
    }
}
