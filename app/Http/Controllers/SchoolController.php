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
        $schools = School::with('owner')->get();
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
            'owner_id'              =>  'numeric|required',
            'name'                  =>  'string|required',
            'predicate'             =>  'string|required',
            'capacity'              =>  'numeric|required',
            '1st_grade_cap'         =>  'numeric|nullable',
            '2nd_grade_cap'         =>  'numeric|nullable',
            '3rd_grade_cap'         =>  'numeric|nullable',
            '4th_grade_cap'         =>  'numeric|nullable',
            '5th_grade_cap'         =>  'numeric|nullable',
            'open_regist'           =>  'boolean|required',
            'regist_begin'          =>  'date|nullable',
            'regist_expire'         =>  'date|nullable',
            'address'               =>  'string|required',
            'year_of_construction'  =>  'date|required',
            'email'                 =>  'email|required|unique:schools',
            'contact'               =>  'numeric|required',
            'emergency_contact'     =>  'numeric|required',
            'preview_url'           =>  'string|nullable'

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
            'owner_id'              =>  'numeric|required',
            'name'                  =>  'string|required',
            'predicate'             =>  'string|required',
            'capacity'              =>  'numeric|required',
            '1st_grade_cap'         =>  'numeric|nullable',
            '2nd_grade_cap'         =>  'numeric|nullable',
            '3rd_grade_cap'         =>  'numeric|nullable',
            '4th_grade_cap'         =>  'numeric|nullable',
            '5th_grade_cap'         =>  'numeric|nullable',
            'open_regist'           =>  'boolean|required',
            'regist_begin'          =>  'date|nullable',
            'regist_expire'         =>  'date|nullable',
            'address'               =>  'string|required',
            'year_of_construction'  =>  'date|required',
            'email'                 =>  'email|required|unique:schools',
            'contact'               =>  'numeric|required',
            'emergency_contact'     =>  'numeric|required',
            'preview_url'           =>  'string|nullable'
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
