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
            'username'      =>  'string|required',
            'email'         =>  'required|string|email|max:255|unique:students',
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
        /**
         * User harus melengkapi data diri sebelum mendaftarkan
         * sekolah baru. Jika data tidak lengkap, abaikan field
         * complete data.
         * 
         * Namun jika data lengkap dan terisi semua, update
         * field complete data ke true (1), untuk validasi
         * sebelum melanjutkan proses pendaftaran sekolah
         * baru.
         */
        $owners     = Owner::findOrFail($owner);
        $validator  = Validator::make($request, [
            'civilian_id'       => 'numeric|required',
            'family_id'         => 'numeric|required',
            'ownership_id'      => 'numeric|required',
            'birthdate'         => 'date|required',
            'birthplace'        => 'string|required',
            'address'           => 'string|required',
            'city'              => 'string|required',
            'state'             => 'string|required',
            'zipcode'           => 'numeric|required',
            'contact'           => 'numeric|required',
            'emergency_contact' => 'numeric|required',
        ]);

        if($validator->fails()) {
            return response()->json()->withErrors($validator);
        }
        
        $modified = $owner->fill($request->all())->save();
        
        if($modified) {
            $owner->complete_data = true;
            $owner->save();
        }
        
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
