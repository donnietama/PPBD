<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Set the timestamp off so the system not querying it.
    public $timestamps = false;

    // Set the fillable field for mass assigment.
    protected $fillable = [
        'name', 'birth', 'address', 'city', 'province', 'contact', 'emergenc', 'emergenrel', 'email', 'password', 'avatar',
    ];

    // Set RouteKeyName to grab from url.
    public function getRouteKeyName()
    {
        return 'id';
    }
}
