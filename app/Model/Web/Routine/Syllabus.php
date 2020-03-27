<?php

namespace App\Model\Web\Routine;

use Illuminate\Database\Eloquent\Model;



class Syllabus extends Model
{
    protected $fillable = [
      'YearToSemester',
      'CourseCode',
      'CourseName',
      'Credit',
      'TheoryOrLab'
    ];
}
