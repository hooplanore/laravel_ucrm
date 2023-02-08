<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Inertia\Inertia;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Students/Index',[
            'students' => Student::select('id','class_id','name','kana','email','tel','gender','birthday','joindate','is_payment','introducer',)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Students/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        Student::create([
            'class_id' => $request->class_id,
            'name' => $request->name,
            'kana' => $request->kana,
            'email' => $request->email,
            'password' => $request->password,
            'zip_code' => $request->zip_code,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'tel' => $request->tel,
            'gender' => $request->gender,
            'bitrhday' => $request->birthday,
            'joindate' => $request->joindate,
            'is_payment' => $request->is_payment,
            'introducer' => $request->introducer,
            'parent_name' => $request->parent_name,
            'canpaign' => $request->canpaign,
            'memo' => $request->memo,
            'is_rest' => $request->is_rest,
        ]);

        return to_route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return Inertia::render('Students/Show',[
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return Inertia::render('Students/Edit',[
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        // dd($student->name, $request->name);

        $student->class_id = $request->class_id;
        $student->name = $request->name;
        $student->kana = $request->kana;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->zip_code = $request->zip_code;
        $student->address1 = $request->address1;
        $student->address2 = $request->address2;
        $student->tel = $request->tel;
        $student->gender = $request->gender;
        $student->birthday = $request->birthday;
        $student->joindate = $request->joindate;
        $student->is_payment = $request->is_payment;
        $student->introducer = $request->introducer;
        $student->parent_name = $request->parent_name;
        $student->canpaign = $request->canpaign;
        $student->memo = $request->memo;
        $student->is_rest = $request->is_rest;
        $student->save();

        return to_route('students.index')
        ->with([
            'message' => '更新しました',
            'status' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
