<?php

namespace App\Http\Controllers;

use App\Owner;
use App\School;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owner::select('id', 'name', 'email')->with('school')->get();
        return $owners;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owners.create');
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
            'emergenc'      =>  'numeric|required',
            'emergenrel'    =>  'string|required',
            'avatar'        =>  'image|nullable',
            'email'         =>  'required|string|email|max:255|unique:users',
            'password'      =>  'required|string|min:6|confirmed',
        ]);

        if($validator->fails()) {
            return response()->json()->withErrors($validator);
        }

        $owners = Owner::create($request->all());
        return $owners;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        $owners = Owner::findOrFail($owner);
        return $owners;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        $owners = Owner::findOrFail($owner);
        return $owners;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owner $owner)
    {
        $owners = Owner::findOrFail($owner);
        $validator = Validator::make($request, [
            'name'          =>  'string|required',
            'birth'         =>  'date|required',
            'address'       =>  'string|required',
            'city'          =>  'string|required',
            'province'      =>  'string|required',
            'contact'       =>  'numeric|required',
            'emergenc'      =>  'numeric|required',
            'emergenrel'    =>  'string|required',
            'avatar'        =>  'image|nullable',
            'email'         =>  'required|string|email|max:255|unique:users',
            'password'      =>  'required|string|min:6|confirmed',
        ]);

        if($validator->fails()) {
            return response()->json()->withErrors($validator);
        }
        $modified = $owner->fill($request->all())->save();
        return $modified;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        $owners = Owner::findOrFail($owner);
        $owners->destroy();
    }
}
