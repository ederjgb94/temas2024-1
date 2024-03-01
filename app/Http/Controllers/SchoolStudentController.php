<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Student;

class SchoolStudentController extends Controller
{
    public function getStudentsFromSchool(School $school)
    {
        //sin parentesis para hacer referencia al contenido de la relación
        $students = $school->students;
        return $students;
    }

    public function addStudentToSchool(School $school, Student $student)
    {
        //parentesis para hacer referencia a la relación
        $school->students()->attach($student->id);
        return response()->json([
            'message' => 'Student added to school'
        ]);
    }
}
