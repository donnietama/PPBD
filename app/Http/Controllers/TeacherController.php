<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Lesson;
use Illuminate\Http\Request;

use Validator;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return $teachers;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /**
         * Show lessons list and put it into the select
         * option property.
         */
        
        $lessons = Lesson::all();
        return $lessons;
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
            'name'      =>  'string|required',
            'birth'     =>  'date|required',
            'degree'    =>  'string|required',
            'status'    =>  'string|required',
            'address'   =>  'string|required',
            'city'      =>  'string|required',
            'province'  =>  'string|required',
            'contact'   =>  'string|required',
            'emergency'  =>  'string|required',
            'lesson_id' =>  'string|required',
            'bio'       =>  'string|nullable',
            'avatar'    =>  'string|nullable',
        ]);

        $teachers = Teacher::create($request->all());
        
        if($validator->fails()) {
            return response()->json()->withErrors($validator);
        }

        return $teachers;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        $specified = Teacher::findOrFail($teacher);
        return $specified;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        $specified = Teacher::findOrFail($teacher);
        return $specified;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $validator = Validator::make($request, [
            'name'      =>  'string|required',
            'birth'     =>  'date|required',
            'degree'    =>  'string|required',
            'status'    =>  'string|required',
            'address'   =>  'string|required',
            'city'      =>  'string|required',
            'province'  =>  'string|required',
            'contact'   =>  'string|required',
            'emergency'  =>  'string|required',
            'lesson_id' =>  'string|required',
            'bio'       =>  'string|nullable',
            'avatar'    =>  'string|nullable',
        ]);

        $teachers = Teacher::findOrFail($teacher);
        $modified = $teachers->fill($request->all())->save();
        
        if($validator->fails()) {
            return response()->json()->withErrors($validator);
        }

        return $modified;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teachers = Teacher::findOrFail($teacher);
        $action = $teacher->destroy();

        if(!$action) {
            return response('Proses penghapusan gagal, silahkan coba beberapa saat lagi.');
        }

        return response('Data dengan NIP:'.$teachers->id.'berhasil dihapus');
    }
}
