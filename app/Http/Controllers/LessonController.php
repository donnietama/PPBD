<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Teacher;
use Illuminate\Http\Request;

use Validator;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::all();
        return $lessons;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lessons.create');
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
            'teacher_id'    =>  'numeric|required',
        ]);

        if($validator->fails()) {
            return response()->json()->withErrors($validator);
        }

        $lessons = Lesson::create($request->all());
        
        return $lessons;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        $lessons = Lesson::findOrFail($lesson);
        return $lessons;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        $lessons = Lesson::findOrFail($lesson);
        return $lessons;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        $lessons = Lesson::findOrFail($lesson);

        $validator = Validator::make($request, [
            'name'          =>  'string|required',
            'teacher_id'    =>  'numeric|required',
        ]);

        if($validator->fails()) {
            return response()->json()->withErrors($validator);
        }

        $modified = $lessons->fill($request->all())->save();
        return $modified;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        $lessons = Lesson::findOrFail($lessons);
        $response = $lessons->destroy();

        if(!$response) {
            return response('Proses penghapusan gagal, silahkan coba beberapa saat lagi.');
        }

        return response('Pelajaran dengan ID: '.$lessons->id.' berhasil dihapus');
    }
}
