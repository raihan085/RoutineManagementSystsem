<?php

namespace App\Model\Web\Student;

use Illuminate\Database\Eloquent\Model;

class UpdateStudentRoutine extends Model
{
    protected $fillable = [
        'Day',
        'YearToSemester',
        'Session',
        'Section'
    ];
}
