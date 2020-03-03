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

        // search batch avilable
          $query = array('Day'=>$day,$time=>$CourseCode,'Section'=>$Section) // like coursecode
          $studentBatch = UpdateStudentRoutine::where($query)->get();

       // check studentBtach variable is null or not
       // check step 4 of project paper matrix

          if(UpdateStudentRoutine::where($query)->exists())
          {
            // then show this time is already booked for this batch.
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
}
