<?php

namespace App\Http\Controllers;

use App\Classes;
use Illuminate\Http\Request;

use Validator;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classRooms = Classes::all();
        return $classRooms;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classes.create');
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
            'class_name'    => 'string|required|max:191',
            'capacity'      => 'numeric|required',
            'teacher_id'    => 'numeric|required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $storedData = Classes::create($request->all());
        return $storedData;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classes  $Classes
     * @return \Illuminate\Http\Response
     */
    public function show(Classes $Classes)
    {
        $classDetails = Classes::findOrFail($Classes);
        return view('classes.show', compact('classDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classes  $Classes
     * @return \Illuminate\Http\Response
     */
    public function edit(Classes $Classes)
    {
        $specifiedClass = Classes::findOrFail($Classes);
        return view('classes.edit', compact('specifiedClass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classes  $Classes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classes $Classes)
    {
        $validator = Validator::make($request, [
            'class_name'    => 'string|required|max:191',
            'capacity'      => 'numeric|required',
            'teacher_id'    => 'numeric|required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $editedData = Classes::fill($request->all())->save();
        return $editedData;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classes  $Classes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classes $Classes)
    {
        $class = Classes::findOrFail($Classes);
        $class->destroy();
    }
}
