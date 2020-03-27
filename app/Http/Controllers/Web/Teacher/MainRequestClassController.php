<?php

namespace App\Http\Controllers\Web\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Model\Web\Student\UpdateStudentRoutine;
use App\Model\Web\Teacher\UpdateTeacherRoutine;
use App\Model\Web\Staff\UpdateStaffRoutine;

use App\Model\Web\Routine\Syllabus;
use App\Model\Web\Routine\DepartmentRoom;

class MainRequestClassController extends Controller
{
  public function index(Request $req)
  {

    // insert day, time,CourseCode,section
      $name = $req->ShortName;
      $day = $req->day;
      $time = $req->Time;
      $CourseCode = $req->CourseCode;
      $Section = $req->Section;

      // echo "ShortName = ",$name," day = ",$day," time = ",$time," CourseCode = ",$CourseCode," Section = ",$Section;
      // search semester

        $semester =  $this->CheckSemester($CourseCode);

        // check theory or lab
        $TheoryOrLab = $this->CheckTheoryOrLab($CourseCode);
        $CheckStudentAvailability = $this->CheckStudentAvailable($day,$semester,$Section,$time);
        $CheckRoomAvailability = $this->CheckRoomAvailable($day,$time,$TheoryOrLab);


        if( $CheckStudentAvailability == 1 &&  $CheckRoomAvailability != '0')
        {
            // if change then update all null
            $ChangeOrExtra = $this->getTeacherChangingClassTime($day,$name,$CourseCode,$semester,$Section,$CheckRoomAvailability);

            if($ChangeOrExtra != 'extraclass')
            {
              // changing class

              // all ago classes already updated null
                $all = $CourseCode;
                $all.='/n';
                $all.=$name;
                $all.='/n';
                $all.=$CheckRoomAvailability;

                //$query = array($Time);

                 //UpdateStudentRoutine::where(['Day'=>$day,'YearToSemester'=>$semester,'Section'=>$Section])->update([$ChangeOrExtra=>null]);

                // now all changing classes updated this time
                 //echo " Time = ",$time;

                 $this->UpdateRoutine($day,$semester,$Section,$name,$CourseCode,$CheckRoomAvailability,$time);

            }
            else {
              // extra class
              $this->UpdateRoutine($day,$semester,$Section,$name,$CourseCode,$CheckRoomAvailability,$time);

              // return view('') day routine or my routine
            }
        }
        else {
          // pending text
          echo "pending";
          // return false and showing pending message
        }

        // redirect route 
      }


  // sub function

  public function CheckRoomAvailable($Day,$time,$TheoryOrLab)
  {

    $RoomLists = DepartmentRoom::all();
    // for somewhere class
    foreach($RoomLists as $RoomList)
    {
      if($RoomList->TheoryOrLab == $TheoryOrLab && UpdateStaffRoutine::where(['Day'=>$Day,'RoomNumber'=>$RoomList->RoomNumber])->whereNull($time)->exists())
      {
        return $RoomList->RoomNumber;
      }
    }
    // for all class are booked
    return '0';



/*    if(UpdateStaffRoutine::where($query)->whereNull($time)->exists())
    {
        $RoomLists = UpdateStaffRoutine::where($query)->get();

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
*/
  }

  public function CheckStudentAvailable($Day,$Semester,$Section,$time)
  {
    $query = array('Day'=>$Day,'YearToSemester'=>$Semester,'Section'=>$Section);

    if(UpdateStudentRoutine::where($query)->whereNull($time)->exists())
    {
      return 1;
    }
    else {
      return 0;
    }
  }

  public function CheckSemester($CourseCode)
  {
    return Syllabus::where(['CourseCode'=>$CourseCode])->value('YearToSemester');
  }

  public function CheckTheoryOrLab($CourseCode)
  {
    return Syllabus::where(['CourseCode'=>$CourseCode])->value('TheoryOrLab');
  }

  public function CheckExtraOrChangeClass($day,$name,$coursecode)
  {
      $query = array('Day'=>$day,'ShortName'=>$name);
      if(UpdateTeacherRoutine::where($query)->exists())
      {
        return true;
      }
      else
        return false;
  }

  public function getTeacherChangingClassTime($day,$name,$CourseCode,$semester,$Section,$CheckRoomAvailability)
  {

      $query = array('Day'=>$day,'ShortName'=>$name);

      $times = array('EightToNine','NineToTen','TenToEleven','ElevenToTwelve','TwelveToOne','OneToTwo','TwoToThree','ThreeToFour','FourToFive');

      $newCourseCode = $CourseCode;

    foreach($times as $time)
    {
        if(UpdateTeacherRoutine::where($query)->where($time,'like',$CourseCode.'%')->exists())
        {
            UpdateTeacherRoutine::where($query)->update([$time=>null]);
            UpdateStaffRoutine::where(['Day'=>$day,'RoomNumber'=>$CheckRoomAvailability])->update([$time=>null]);
            UpdateStudentRoutine::where(['Day'=>$day,'YearToSemester'=>$semester,'Section'=>$Section])->update([$time=>null]);
            return $time;
        }
        $CourseCode = $newCourseCode;

      /*  for($i=0;$i<9;$i++)
          {
            if(strpos($Time->$times[$i],$CourseCode) !==false)
            {
              $query = array('Day'=>$day,'ShortName'=>$name,$times[$i]=>$Time->$times[$i]);
              UpdateTeacherRoutine::where($query)->update('');
              return $Time->$times[$i];
            }
          } */
    }
    return 'extraclass';
  }

  public function getRoomNumber($day,$time,$CourseCode,$name,$Section)
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

  public function UpdateRoutine($day,$semester,$Section,$name,$CourseCode,$roomNumber,$time)
  {
    $teacherQuery = $CourseCode;
    $teacherQuery.=' (';
    $teacherQuery.=$Section;
    $teacherQuery.=')';
    $teacherQuery.='\n';
    $teacherQuery.=$roomNumber;

    echo "  teacher = ",$teacherQuery;
    echo " time = ",$time;

    UpdateTeacherRoutine::where(['Day'=>$day,'ShortName'=>$name])->update([$time=>$teacherQuery]);

    $staffQuery = $CourseCode;
    $staffQuery.=' (';
    $staffQuery.=$Section;
    $staffQuery.=')\n';
    $staffQuery.=$name;

    UpdateStaffRoutine::where(['Day'=>$day,'RoomNumber'=>$roomNumber])->update([$time=>$staffQuery]);

    $studentQuery = $CourseCode;
    $studentQuery.='\n';
    $studentQuery.=$roomNumber;
    $studentQuery.='\n';
    $studentQuery.= $name;

    UpdateStudentRoutine::where(['Day'=>$day,'YearToSemester'=>$semester,'Section'=>$Section])->update([$time=>$studentQuery]);
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
