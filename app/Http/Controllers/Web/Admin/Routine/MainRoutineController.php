<?php

namespace App\Http\Controllers\Web\Admin\Routine;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Web\Student\Student;
use App\Model\Web\Student\UpdateStudentRoutine;

use App\Model\Web\Teacher\Teacher;
use App\Model\Web\Teacher\UpdateTeacherRoutine;

use App\Model\Web\Staff\Staff;
use App\Model\Web\Staff\UpdateStaffRoutine;

use App\Model\Web\Routine\Syllabus;

class MainRoutineController extends Controller
{

    public function addClass(Request $req)
    {
      // major problem hocche protibar single single update korte gele sob chole jay
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

              if(Student::where(['Day'=>$req->Day,'YearToSemester'=>$req->Semester,'Session'=>$req->Session,'Section'=>$req->Section])->whereNull($time[$i])->exists() && Syllabus::where('CourseCode',$req->$CourseCode)->where('YearToSemester','=',$req->Semester)->exists())
                {
                  Student::where(['Day'=>$req->Day,'YearToSemester'=>$req->Semester,'Session'=>$req->Session,'Section'=>$req->Section])->update($query);
                  UpdateStudentRoutine::where(['Day'=>$req->Day,'YearToSemester'=>$req->Semester,'Session'=>$req->Session,'Section'=>$req->Section])->update($query);
                }
              elseif($req->$Name != null && Syllabus::where('CourseCode',$req->$CourseCode)->where('YearToSemester','=',$req->Semester)->exists())
              {
                  Student::insert(['Day'=>$req->Day,'YearToSemester'=>$req->Semester,'Session'=>$req->Session,'Section'=>$req->Section,
                                  $time[$i]=>$req->$CourseCode."\n".$req->$roomNumber."\n".$req->$Name]);
                  UpdateStudentRoutine::insert(['Day'=>$req->Day,'YearToSemester'=>$req->Semester,'Session'=>$req->Session,'Section'=>$req->Section,
                                                  $time[$i]=>$req->$CourseCode."\n".$req->$roomNumber."\n".$req->$Name]);

              }

        }



      //  $tet = Syllabus::where(['CourseCode','133'])->where('YearToSemester','=',$)->value('CourseName');

        //echo $tet;
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

              if(Teacher::where(['Day'=>$req->Day,'ShortName'=>$req->$Name])->whereNull($time[$i])->exists() && Syllabus::where('CourseCode',$req->$CourseCode)->where('YearToSemester','=',$req->Semester)->exists())
                {
                  Teacher::where(['Day'=>$req->Day,'ShortName'=>$req->$Name])->update($query);
                  UpdateTeacherRoutine::where(['Day'=>$req->Day,'ShortName'=>$req->$Name])->update($query);
                }
              elseif($req->$Name != null && Syllabus::where('CourseCode',$req->$CourseCode)->where('YearToSemester','=',$req->Semester)->exists())
              {
                  Teacher::insert(['Day'=>$req->Day,'ShortName'=>$req->$Name,
                                  $time[$i]=>$req->$CourseCode." (". $req->Section. ")\n".$req->$roomNumber]);
                  UpdateTeacherRoutine::insert(['Day'=>$req->Day,'ShortName'=>$req->$Name,
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

              if(Staff::where(['Day'=>$req->Day,'RoomNumber'=>$req->$roomNumber])->whereNull($time[$i])->exists() && Syllabus::where('CourseCode',$req->$CourseCode)->where('YearToSemester','=',$req->Semester)->exists())
                {
                  Staff::where(['Day'=>$req->Day,'RoomNumber'=>$req->$roomNumber])->update($query);
                  UpdateStaffRoutine::where(['Day'=>$req->Day,'RoomNumber'=>$req->$roomNumber])->update($query);
                }
              elseif($req->$Name != null && Syllabus::where('CourseCode',$req->$CourseCode)->where('YearToSemester','=',$req->Semester)->exists()) // $req->$roomNumber != null
              {
                  Staff::insert(['Day'=>$req->Day,'RoomNumber'=>$req->$roomNumber,
                                  $time[$i]=>$req->$CourseCode." (". $req->Section. ")\n".$req->$Name]);
                  UpdateStaffRoutine::insert(['Day'=>$req->Day,'RoomNumber'=>$req->$roomNumber,
                                                  $time[$i]=>$req->$CourseCode." (". $req->Section. ")\n".$req->$Name]);
              }
        }

        return redirect()->route('admin');
    }

    public function editClass(Request $req)
    {
      $query = array('Day'=>$req->day,'YearToSemester'=>$req->YearToSemester,'Section'=>$req->Section,'ShortName'=>$req->ShortName,'RoomNumber'=>$req->roomNumber);

      if(Teacher::where(['Day'=>$req->day,'ShortName'=>$req->ShortName]))
      {
        // sesh hoy nai
      }

    }

    public function addCourse(Request $req)
    {
      $query = array('YearToSemester'=>$req->YearToSemester,'CourseCode'=>$req->CourseCode,'CourseName'=>$req->CourseName,'Credit'=>$req->Credit,'TheoryOrLab'=>$req->TheoryOrLab);

      if(Syllabus::where($query)->exists())
      {
        // show meassage this course all ready exists
      }
      else {
        Syllabus::insert($query);
        // show meassage congrasts
      }
    }

    public function editCourse(Request $req)
    {
      $query = array('YearToSemester'=>$req->YearToSemester,'CourseCode'=>$req->CourseCode,'CourseName'=>$req->CourseName,'Credit'=>$req->Credit,'TheoryOrLab'=>$req->TheoryOrLab);

      if(Syllabus::where($query)->exists())
      {
        $newQuery = $query = array('YearToSemester'=>$req->NewYearToSemester,'CourseCode'=>$req->NewCourseCode,'CourseName'=>$req->NewCourseName,'Credit'=>$req->NewCredit,'TheoryOrLab'=>$req->NewTheoryOrLab);

          Syllabus::where($query)->update($newQuery);
      }
      else {

        // show meassage this course doesn't belongs to our Syllabus
        // please add this course
      }
    }

    public function deleteCourse(Request $req)
    {
      $query = array('CourseCode'=>$req->CourseCode,'CourseName'=>$req->CourseName);

      if(Syllabus::where($query)->exists())
      {
        Syllabus::where($query)->delete();
      }
      else {
        // show this course doesn't belongs to our syllabus
      }

    }

    public function addRoutine(Request $req)
    {
      Student::delete();
      Teacher::delete();
      Staff::delete();

      // storing pdf format a table

    }
}
