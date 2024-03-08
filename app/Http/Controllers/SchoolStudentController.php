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
        //añade y se puede repetir
        // $school->students()->attach($student->id);

        //añade y no se puede repetir pero elimina los que ya existen
        // $school->students()->sync($student->id);

        //añade y no se puede repetir pero no elimina los que ya existen
        $school->students()->sync($student->id, false);

        return response()->json([
            'message' => 'Student added to school'
        ]);
    }

    public function removeStudentFromSchool(School $school, Student $student)
    {
        //parentesis para hacer referencia a la relación
        $school->students()->detach($student->id);
        return response()->json([
            'message' => 'Student removed from school'
        ]);
    }
}
