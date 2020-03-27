<?php

namespace App\Model\Web\Student;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
      'Day',
      'YearToSemester',
      'Section',
      'Session'
    ];
}
