<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

use Validator;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();
        return $schools;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schools.create');
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
            'owner_id'  =>  'string|required',
            'city'      =>  'string|required',
            'region'    =>  'string|required',
            'address'   =>  'string|required',
            'postal'    =>  'numeric|required',
            'plan_id'   =>  'numeric|required',
            'email'     =>  'nullable|string|email|max:255|unique:users',
            'contact'   =>  'numeric|nullable',
            'capacity'  =>  'numeric|required',
            'image'     =>  'image|required',
        ]);

        if($validator->fails()) {
            return response()->json()->withErrors($validator);
        }
        
        $schools = School::create($request->all());
        return $schools;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        $schools = School::findOrFail($school);
        return $schools;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        $schools = RegusteredSchool::findOrfail($school);
        return $schools;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        $schools = School::findOrFail($school);

        $validator = Validator::make($request, [
            'name'      =>  'string|required',
            'owner_id'  =>  'string|required',
            'city'      =>  'string|required',
            'region'    =>  'string|required',
            'address'   =>  'string|required',
            'postal'    =>  'numeric|required',
            'plan_id'   =>  'numeric|required|disabled',
            'email'     =>  'required|string|email|max:255|unique:users|disabled',
        ]);

        if($validator->fails()) {
            return response()->json()->withErrors($validator);
        }

        $modified = $schools->fill($request->all())->save();
        return $modified;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $schools    = School::findOrFail($school);
        $action     = $schools->destroy();

        if(!$action) {
            return response('Proses penghapusan gagal, silahkan coba beberapa saat lagi.');
        }

        return response('Data dengan NIS:'.$schools->id.'berhasil dihapus');
    }
}
