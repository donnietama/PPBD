<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    // Set the timestamp off so the system not querying it.
    public $timestamps = false;

    // Set the fillable field for mass assigment.
    protected $fillable = [
        //
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
