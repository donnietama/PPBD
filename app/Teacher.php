<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    // Set the timestamp off so the system not querying it.
    public $timestamps = false;

    // Set the fillable field for mass assigment.
    protected $fillable = [
        'name', 'birth', 'degree', 'status', 'address', 'city', 'province', 'contact', 'emergenc', 'lesson_id', 'bio', 'avatar'
    ];

    // Set RouteKeyName to grab from url.
    public function getRouteKeyName()
    {
        return 'id';
    }
}
