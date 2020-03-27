<?php

namespace App\Http\Controllers\Web\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Web\UpdateRoutine;
use App\Model\Web\Student\UpdateStudentRoutine;

class RequestClassController extends Controller
{
    public function index(Request $req)
    {
        $times = array('8.00-9.00'=>'EightToNine','9.00-10.00'=>'NineToTen','10.00-11.00'=>'TenToEleven',
                        '11.00-12.00'=>'ElevenToTwelve','12.00-1.00'=>'TwelveToOne','1.00-2.00'=>'OneToTwo',
                        '2.00-3.00'=>'TwoToThree','3.00-4.00'=>'ThreeToFour','4.00-5.00'=>'FourToFive');

      // insert day, time,CourseCode,section
        $day = $req->day;
        $time = $req->time;
        $CourseCode = $req->CourseCode;
        $Section = $req->Section;

        // convert times to time

        for($i=0;$i<9;$i++)
        {
          if($times[$i] == $time)
          {
            $time = $times[$i];    // if teacher time value passes like EightToNine then no use for loop
            break;
          }
        }

        // search semester

          $semester =  CheckSemester($CourseCode);  // Syllabus::where('CourseCode'=>$CourseCode)->value('Semester');

          // check theory or lab
          $TheoryOrLab = CheckTheoryOrLab($CourseCode);

        // search batch avilable
          //$query = array('Day'=>$day,'YearToSemester'=>$semester,'Section'=>$Section,$time=>null);

       // check studentBtach variable is null or not
       // check step 4 of project paper matrix

          if(CheckStudentAvilable($day,$semster,$Section,$time) == true && CheckRoomAvilable($day,$time,$TheoryOrLab))   // UpdateStudentRoutine::where($query)->exists()
          {     // check student avilable kina && check room avilable kina



            // searching age kothay chilo

              $beforeQuery = array('Day'=>$day,'YearToSemester'=>$semester,'Section'=>$Section);
              $Times = UpdateStudentRoutine::where($beforeQuery)->get();
              flag = false;

              foreach($Times as $Time)
              {
                $i = 0;
                if(strpos($Time->$times[$i],$CourseCode)!==false) // string and sub string(courseCode) match korbe
                {
                  $time = $Time->$time[$i];
                  // ager ta null kore bortoman ta update kore dibo

                  UpdateTeacherRoutine::where('Day'=>)
                  UpdateTeacherRoutine::

                  UpdateStaffRoutine::
                  UpdateStaffRoutine::

                  UpdateStudentRoutine::
                  UpdateStudentRoutine::

                  flag = ture;
                  break;
                }
                $i++;
              }

              if(flag != ture)
              {

              }

          }
          else { // searching this is theory or lab class from syllabus
                // other wise
              $TheoryOrLabss = Syllabus::where('CourseCode'=>$CourseCode)->get();

              foreach($TheoryOrLabss as $TheoryOrLabs)
              {
                $TheoryOrLab = $TheoryOrLabs->;
                break;
              }

              // searching
              // check step 3 and 2 of project paper matrix

              $query = array($time=>$time);

              if(UpdateStaffRoutine::where($query)->Isnull())
              {
                $roomNumbers = UpdateStaffRoutine::where($query)->get();

                foreach($roomNumbers as $roomNumber)
                {
                    $query = array('RoomNumber'=>$roomNumber,'TheoryOrLab'=>$$TheoryOrLab);

                    if($roomNumber == null && RoomNumber::where($query)->exists())
                    {
                      // get a room for extra class or changing class

                      break;
                    }
                }
              }
              else {
                 // show no room avilable if you are try to pending the your class time or try other rooms
              }
          }
    }


    // sub function

    public function CheckRoomAvilable($Day,$time,$TheoryOrLab)
    {
      $query = array('Day'=>$Day,$time=>null);

      if(UpdateStaffRoutine::where($query)->exists())
      {
          $RoomLists = UpdateStaffRoutine::where($query)->get();

          foreach($RoomLists as $RoomList)
          {
              if($RoomList->$time == null $$ $RoomList->TheoryOrLab == $TheoryOrLab)
              {
                return $RoomList->RoomNumber;
              }
          }
      }
      else {
              return false;
      }
    }

    public function CheckStudentAvilable($Day,$Semester,$Section,$time)
    {
      $query = array('Day'=>$Day,'YearToSemester'=>$Semester,'Section'=>$Section,$time=null);

      if(UpdateStudentRoutine::where($query)->exists())
      {
        return true;
      }
      else {
        return false;
      }
    }

    public function CheckSemester($CourseCode)
    {
      return Syllabus::where('CourseCode'=>$CourseCode)->value('YearToSemester');
    }

    public function CheckTheoryOrLab($CourseCode)
    {
      return Syllabus::where('CourseCode'=>$CourseCode)->value('TheoryOrLab');
    }

}
