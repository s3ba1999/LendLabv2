<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $career = [ 'Ing. Sistemas', 'Ing. Electronica', 'Ing. Mecatronica'];
        return view('admin.student.create', compact('career'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = Student::create($request->all()+['state' => 'Pendiente']);
        $student->user()->create(['password' => Hash::make($request->password)] + $request->all());
        return redirect(route('student.index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $career = [ 'Ing. Sistemas', 'Ing. Electronica', 'Ing. Mecatronica'];
        return view('admin.student.edit', compact('career', 'student'));
    }

    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        $student->user->update($request->all());
        return redirect(route('student.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->user->delete();
        $student->delete();
        return redirect(route('student.index'));
    }
}
