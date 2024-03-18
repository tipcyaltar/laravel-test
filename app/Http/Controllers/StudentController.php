<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        $students = Student::all();
        return view('students.index')->with('students', $students);
    }
 
    /**
    * Show the form for creating a new resource.
    */

    public function create() 
    {
        //
        return view ('students.create');
    }

    public function store (Request $request)
    {
        $input = $request->all();
        Student::create($input);
        return redirect('student')->with ('flash_message', 'Student Added!');
    }

    public function show (string $id)
    {
        //
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }
 
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    }

    public function update(string $id)
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'Student Updated!');
    }

    public function destroy(string $id)
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Student Deleted!');
    }
}
