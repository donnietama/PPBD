<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    // Set the timestamp off so the system not querying it.
    public $timestamps = false;

    // Set the fillable field for mass assigment.
    protected $fillable = [
        'school_id', 'working_id', 'name', 'degree', 'birthdate',
        'birthplace', 'contract_begin', 'contract_expire', 'status',
        'address', 'city', 'state', 'country', 'zipcode', 'bio',
        'avatar',
    ];

    // Set RouteKeyName to grab from url.
    public function getRouteKeyName()
    {
        return 'id';
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
