<?php

namespace App\Http\Controllers\Web\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Web\Routine\Syllabus;
use App\Model\Web\Routine\DepartmentRoom;

class syllabusController extends Controller
{
    public function addCourse(Request $req)
    {
      $YearToSemester = $req->YearToSemester;
      $CourseCode = $req->CourseCode;
      $CourseName = $req->CourseName;
      $Credit = $req->Credit;
      $Type = $req->CourseType;

      if(Syllabus::where(['CourseCode'=>$CourseCode])->orwhere(['CourseName'=>$CourseName])->exists())
      {
          return redirect()->route('admin.add.course');//['This course already exists in syllabus']);
      }
      else {
        $query = array('YearToSemester'=>$YearToSemester,'CourseCode'=>$CourseCode,'CourseName'=>$CourseName,'Credit'=>$Credit,'TheoryOrLab'=>$Type);
        Syllabus::insert($query);
        return redirect()->route('admin.add.course');
      }
    }

    public function editCourse(Request $req)
    {
      $YearToSemester = $req->YearToSemester;
      $CourseCode = $req->CourseCode;
      $CourseName = $req->CourseName;
      $Credit = $req->Credit;
      $Type = $req->CourseType;

      if(Syllabus::where(['CourseCode'=>$CourseCode])->orwhere(['CourseName'=>$CourseName])->exists())
      {
          $query = array('YearToSemester'=>$YearToSemester,'CourseCode'=>$CourseCode,'CourseName'=>$CourseName,'Credit'=>$Credit,'TheoryOrLab'=>$Type);
          Syllabus::where(['CourseCode'=>$CourseCode])->orwhere(['CourseName'=>$CourseName])->update($query);
          return redirect()->route('admin.edit.course');
      }
      else {
        return redirect()->route('admin.edit.course',['message','This course is not found our syllabus']);
      }
    }

    public function deleteCourse(Request $req)
    {
      $CourseCode = $req->CourseCode;
      $CourseName = $req->CourseName;

      if(Syllabus::where(['CourseCode'=>$CourseCode])->orwhere(['CourseName'=>$CourseName])->exists())
      {
          Syllabus::where(['CourseCode'=>$CourseCode])->orwhere(['CourseName'=>$CourseName])->delete();
          return redirect()->route('admin.delete.course');
      }
      else {
        return redirect()->route('admin.delete.course');//,['message','This course is not found our syllabus']);
      }
    }

    public function departmentRoom(Request $req)
    {
      $roomNumber = $req->RoomNumber;

      if(DepartmentRoom::where('RoomNumber')->exists())
      {
        return redirect()->route('admin.add.roomNumber');//['message','This room are alreday exists']);
      }
      else {
        $query = array(['RoomNumber'=>$req->RoomNumber,'TheoryOrLab'=>$req->RoomType]);
        DepartmentRoom::insert($query);
        return redirect()->route('admin.add.roomNumber');//['messsage','Succesfully Updated']);
      }
    }
}
