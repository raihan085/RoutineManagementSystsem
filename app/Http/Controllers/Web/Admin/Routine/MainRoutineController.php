<?php

namespace App\Http\Controllers\Web\Admin\Routine;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Web\Student\Student;
use App\Model\Web\Teacher\Teacher;
use App\Model\Web\Staff\Staff;

class MainRoutineController extends Controller
{


    public function index(Request $req)
    {
          $time = array('EightToNine','NineToTen','TenToEleven','ElevenToTwelve','TwelveToOne',
                         'OneToTwo','TwoToThree','ThreeToFour','FourToFive');
        // student insert

        for($i=0;$i<9;$i++)
        {
              $Name = $time[$i]; // get time like EightToNine
              $Name.="TeacherName"; // EightToNine Teacher name
              $CourseCode = $time[$i];
              $CourseCode.="CourseCode"; // EightToNine Course Code
              $roomNumber = $time[$i];
              $roomNumber.="RoomNumber"; // EightToNine RoomNumber

              $query = array($time[$i]=>$req->$CourseCode."\n". $req->$roomNumber."\n".$req->$Name); // CSE 490 Gallery 2 MSI

              if(Student::where(['Day'=>$req->Day,'YearToSemester'=>$req->Semester,'Session'=>$req->Session,'Section'=>$req->Section])->exists())
                {
                  Student::where(['Day'=>$req->Day,'YearToSemester'=>$req->Semester,'Session'=>$req->Session,'Section'=>$req->Section])->update($query);
                }
              elseif($req->$Name != null)
              {
                  Student::insert(['Day'=>$req->Day,'YearToSemester'=>$req->Semester,'Session'=>$req->Session,'Section'=>$req->Section,
                                  $time[$i]=>$req->$CourseCode."\n".$req->$roomNumber."\n".$req->$Name]);
              }
        }


        // teacher insert


        for($i=0;$i<9;$i++)
        {
              $Name = $time[$i];
              $Name.="TeacherName";
              $CourseCode = $time[$i];
              $CourseCode.="CourseCode";
              $roomNumber = $time[$i];
              $roomNumber.="RoomNumber";

              $query = array($time[$i]=>$req->$CourseCode. " (" .$req->Section. ")\n". $req->$roomNumber);

              if(Teacher::where(['Day'=>$req->Day,'ShortName'=>$req->$Name])->exists())
                {
                  Teacher::where(['Day'=>$req->Day,'ShortName'=>$req->$Name])->update($query);
                }
              elseif($req->$Name != null)
              {
                  Teacher::insert(['Day'=>$req->Day,'ShortName'=>$req->$Name,
                                  $time[$i]=>$req->$CourseCode." (". $req->Section. ")\n".$req->$roomNumber]);
              }
        }

        // staff insert


        for($i=0;$i<9;$i++)
        {
              $Name = $time[$i];
              $Name.="TeacherName";
              $CourseCode = $time[$i];
              $CourseCode.="CourseCode";
              $roomNumber = $time[$i];
              $roomNumber.="RoomNumber";

              $query = array($time[$i]=>$req->$CourseCode. " (" .$req->Section. ")\n". $req->$Name);

              if(Staff::where(['Day'=>$req->Day,'RoomNumber'=>$req->$roomNumber])->exists())
                {
                  Staff::where(['Day'=>$req->Day,'RoomNumber'=>$req->$roomNumber])->update($query);
                }
              elseif($req->$Name != null) // $req->$roomNumber != null
              {
                  Staff::insert(['Day'=>$req->Day,'RoomNumber'=>$req->$roomNumber,
                                  $time[$i]=>$req->$CourseCode." (". $req->Section. ")\n".$req->$Name]);
              }
        }

        return view('Web.Admin.Pages.index');
    }

    public function addClass()
    {
        // add class
    }

    public function addCourse()
    {
      // add course
    }

}
