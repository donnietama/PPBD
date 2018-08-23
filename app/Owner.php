<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    // Set the timestamp off so the system not querying it.
    public $timestamps = false;

    // Set the fillable field for mass assigment.
    protected $fillable = [
        'name', 'email', 'password', 'school_id', 'civilian_id',
        'family_id', 'ownership_id', 'birthdate', 'birthplace',
        'address', 'city', 'state', 'country', 'zipcode',
        'contact', 'emergency_contact', 'avatar',
    ];

    // Set RouteKeyName to grab from url.
    public function getRouteKeyName()
    {
        return 'id';
    }
    
    public function school()
    {
        return $this->hasMany(School::class);
    }
}
