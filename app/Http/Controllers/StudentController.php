<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

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
        return $students;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /**
         * Show classes list and put it into the select
         * option property.
         */
        $classes = Classes::all();
        return $classes;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request, [
            'name'          =>  'string|required',
            'birth'         =>  'date|required',
            'address'       =>  'string|required',
            'city'          =>  'string|required',
            'province'      =>  'string|required',
            'contact'       =>  'numeric|required',
            'emergency'      =>  'numeric|required',
            'emergenrel'    =>  'string|required',
            'avatar'        =>  'image|nullable',
        ]);

        if($validator->fails()) {
            return response()->json()->withErrors($validator);
        }

        $students = Student::create($request->all());
        return $students;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $students = Student::findOrFail($student);
        return $students;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        /**
         * Fetch student's profile, then shows each values
         * into form inputs as placeholder and prevents
         * inputs submitted with null values.
         */
        
        $students = Student::findOrFail($student);
        return $students;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $students = Student::findOrFail($student);

        $validator = Validator::make($request, [
            'name'          =>  'string|required',
            'birth'         =>  'date|required',
            'address'       =>  'string|required',
            'city'          =>  'string|required',
            'province'      =>  'string|required',
            'contact'       =>  'numeric|required',
            'emergency'      =>  'numeric|required',
            'emergenrel'    =>  'string|required',
            'avatar'        =>  'image|nullable',
        ]);

        if($validator->fails()) {
            return response()->json()->withErrors($validator);
        }

        $modified = $students->fill($request->all())->save();
        return $modified;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $students   = Student::findOrFail($student);
        $action     = $students->destroy();

        if(!$action) {
            return response('Proses penghapusan gagal, silahkan coba beberapa saat lagi.');
        }

        return response('Data dengan NIP:'.$teachers->id.'berhasil dihapus');
    }
}
