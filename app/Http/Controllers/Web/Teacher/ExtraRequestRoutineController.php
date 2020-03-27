<?php

namespace App\Http\Controllers\Web\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use App\Model\Web\Student\UpdateStudentRoutine;
use App\Model\Web\Teacher\UpdateTeacherRoutine;
use App\Model\Web\Staff\UpdateStaffRoutine;

use App\Model\Web\Routine\Syllabus;
use App\Model\Web\Teacher\PendingClass;

class ExtraRequestRoutineController extends Controller
{
    public function index(Request $req)
    {

      if(!Auth::guard('profile')->check())
        return redirect()->route('user.index');

      // insert day, time,CourseCode,section
        $user = Auth::guard('profile')->user();

        $name = $user->ShortName;
        $day = $req->day;
        $time = $req->time;
        $CourseCode = $req->CourseCode;
        $Section = $req->Section;


        // search semester

          $semester =  $this->CheckSemester($CourseCode);

          // check theory or lab
          $TheoryOrLab = $this->CheckTheoryOrLab($CourseCode);


          if($this->CheckStudentAvilable($day,$semester,$Section,$time) == true && $this->CheckRoomAvilable($day,$time,$TheoryOrLab) != 0)
          {
            $Time = $this->getTeacherChangingClassTime($day,$name,$CourseCode);
/*              if($Time != null)
              {
                // changing class

                // all ago classes already updated null
                  $all = $CourseCode;
                  $all.='/n';
                  $all.=$name;
                  $all.='/n';
                  $all.=$this->getRoomNumber($day,$Time,$CourseCode,$name,$Section);
                  UpdateStudentRoutine::where(['Day'=>$day,'YearToSemester'=>$semester,'Section'=>$Section,$Time=>$all])->update(' ');

                  // now all changing classes updated this time

                  $this->UpdateRoutine($day,$semster,$Section,$name,$roomNumber,$time);

              }
              else {
                // extra class
                $this->UpdateRoutine($day,$semester,$Section,$name,$roomNumber,$time);

                // return view('') day routine or my routine
              }
*/
                      return redirect()->route('teacher.day.routine'); // your request accept
              }
          else {
            // pending text
            // return false and showing pending message
            $Email = $user->Email;
            $query = array('ShortName'=>$name,'Email'=>$Email,'Section'=>$Section,'YearToSemester'=>$semester,'CourseCode'=>$CourseCode,'Time'=>$time);
            PendingClass::insert($query);
            return redirect()->route('')->with();
          }

        }


    // sub function

    private function CheckRoomAvilable($Day,$time,$TheoryOrLab)
    {
      $query = array('Day'=>$Day,$time=>null);

      if(UpdateStaffRoutine::where($query)->exists())
      {
          $RoomLists = UpdateStaffRoutine::where($query);

          foreach($RoomLists as $RoomList)
          {
              if($RoomList->$time == null && $RoomList->TheoryOrLab == $TheoryOrLab)
              {
                return $RoomList->RoomNumber;
              }
          }
      }
      else {
              return 0;
      }
    }

    private function CheckStudentAvilable($Day,$Semester,$Section,$time)
    {
      //$query = array('Day'=>$Day,'YearToSemester'=>$Semester,'Section'=>$Section,$time=null);

      if(UpdateStudentRoutine::where(['Day'=>$Day,'YearToSemester'=>$Semester,'Section'=>$Section])->whereNull($time)->exists())
      {
        return true;
      }
      else {
        return false;
      }
    }

    private function CheckSemester($CourseCode)
    {
      return Syllabus::where('CourseCode',$CourseCode)->value('YearToSemester');
    }

    private function CheckTheoryOrLab($CourseCode)
    {
      return Syllabus::where('CourseCode',$CourseCode)->value('TheoryOrLab');
    }

    private function CheckExtraOrChangeClass($day,$name,$coursecode)
    {
        $query = array('Day'=>$day,'ShortName'=>$name);
        if(UpdateTeacherRoutine::where($query)->exists())
        {
          return true;
        }
        else
          return false;
    }

    private function getTeacherChangingClassTime($day,$name,$CourseCode)
    {
        $query = array('Day'=>$day,'ShortName'=>$name);

      $Times = UpdateTeacherRoutine::where($query)->get();

      $times = array('8.00-9.00'=>'EightToNine','9.00-10.00'=>'NineToTen','10.00-11.00'=>'TenToEleven',
                      '11.00-12.00'=>'ElevenToTwelve','12.00-1.00'=>'TwelveToOne','1.00-2.00'=>'OneToTwo',
                      '2.00-3.00'=>'TwoToThree','3.00-4.00'=>'ThreeToFour','4.00-5.00'=>'FourToFive');

      foreach($Times as $Time)
      {
          for($i=0;$i<9;$i++)
            {
              if(strpos($Time->$times[$i],$CourseCode) !==false)
              {
                $query = array('Day'=>$day,'ShortName'=>$name,$times[$i]=>$Time->$times[$i]);
                UpdateTeacherRoutine::where($query)->update(' ');
                return $Time->$times[$i];
              }
            }
      }
      return null;
    }

    private function getRoomNumber($day,$time,$CourseCode,$name,$Section)
    {
      $all = $CourseCode;
      $all.='(';
      $all.=$Section;
      $all.=')/n';
      $all.=$name;

      $query = array('Day'=>$day,$time=>$all);
      $roomNumber = UpdateStaffRoutine::where($query)->value('RoomNumber');
      UpdateStaffRoutine::where($query)->update('');

      return $roomNumber;
    }

    private function UpdateRoutine($day,$semester,$Section,$name,$roomNumber,$time)
    {
      $teacherQuery = $CourseCode;
      $teacherQuery.=' (';
      $teacherQuery.=$Section;
      $teacherQuery.=')/n';
      $teacherQuery.=$roomNumber;

      UpdateTeacherRoutine::where(['Day'=>$day,'ShortName'=>$name,$time=>' '])->update($teacherQuery);

      $staffQuery = $CourseCode;
      $staffQuery.=' (';
      $staffQuery.=$Section;
      $staffQuery.=')/n';
      $staffQuery.=$name;

      UpdateStaffRoutine::where(['Day'=>$day,'RoomNumber'=>$roomNumber,$time=>' '])->update($staffQuery);

      $studentQuery = $CourseCode;
      $studentQuery.='/n';
      $studentQuery.=$roomNumber;
      $studentQuery.='/n';
      $studentQuery.= $name;

      UpdateStudentRoutine::where(['Day'=>$day,'YearToSemester'=>$semester,'Section'=>$Section,$time=>' '])->update($studentQuery);
    }
}


/*

null

1. day         ok
2. semester    ok
3. section     ok
4. courseCode  ok
5. teacherName ok
6. time        ok
7. room number ok

*/
