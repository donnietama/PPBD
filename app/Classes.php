<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    // Set the timestamp off so the system not querying it.
    public $timestamps = false;

    // Set the fillable field for mass assigment.
    protected $fillable = [
        'class_name', 'capacity',
    ];

    // Set RouteKeyName to grab from url.
    public function getRouteKeyName()
    {
        return 'id';
    }
}
