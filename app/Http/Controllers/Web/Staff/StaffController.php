<?php

namespace App\Http\Controllers\Web\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Web\Staff\Staff;
use Carbon\Carbon;


use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class StaffController extends Controller
{
  use AuthenticatesUsers;

  public function staffDay()
  {
    //$day = 'Sunday';
    $day = Carbon::now()->format('l');
    $query = array('Day'=>$day);
    $days = Staff::where($query)->get();
    return view('Web.Staff.Pages.RoutineDay')->with('days',$days);
  }

  public function staffRoom()
  {
    $roomNumber = Auth::guard('profile')->user()->RoomNumber;
    
    $query = array('RoomNumber'=>$roomNumber);

    $days = Staff::where($query)->get();

    return view('Web.Staff.Pages.RoutineRoom')->with('days',$days);
  }

  public function fullRoutine()
  {
    $days = Staff::all();
    return view('Web.Staff.Pages.FullRoutine')->with('days',$days);
  }
}
