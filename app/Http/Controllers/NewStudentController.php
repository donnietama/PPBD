<?php

namespace App\Http\Controllers;

use App\NewStudent;
use Illuminate\Http\Request;

class NewStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newStudent = NewStudent::all();
        return $newStudent;
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
            'user_id'   =>  'numeric|required|disabled',
            'math'      =>  'numeric|required',
            'science'   =>  'numeric|required',
            'bahasa'    =>  'numeric|required',
            'english'   =>  'numeric|required',
            'skhun'     =>  'file|required',
            'ijazah'    =>  'file|required',
            'raport'    =>  'file|required',
        ]);

        if($validator->fails()) {
            return response()->json()->withErrors($validator);
        }

        $newStudents = NewStudent::create($request->all());
        return $newStudents;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewStudent  $newStudent
     * @return \Illuminate\Http\Response
     */
    public function show(NewStudent $newStudent)
    {
        $newStudents = NewStudent::findOrFail($newStudent)->with('user');
        return $newStudents;
    }
}
