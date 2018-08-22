<?php

namespace App\Http\Controllers;

use App\ClassManagement;
use Illuminate\Http\Request;

use Validator;

class ClassManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classRooms = ClassManagement::all();
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

        $storedData = ClassManagement::create($request->all());
        return $storedData;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClassManagement  $classManagement
     * @return \Illuminate\Http\Response
     */
    public function show(ClassManagement $classManagement)
    {
        $classDetails = ClassManagement::findOrFail($classManagement);
        return view('classes.show', compact('classDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClassManagement  $classManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassManagement $classManagement)
    {
        $specifiedClass = ClassManagement::findOrFail($classManagement);
        return view('classes.edit', compact('specifiedClass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClassManagement  $classManagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassManagement $classManagement)
    {
        $validator = Validator::make($request, [
            'class_name'    => 'string|required|max:191',
            'capacity'      => 'numeric|required',
            'teacher_id'    => 'numeric|required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $editedData = ClassManagement::fill($request->all())->save();
        return $editedData;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClassManagement  $classManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassManagement $classManagement)
    {
        $class = ClassManagement::findOrFail($classManagement);
        $class->destroy();
    }
}
