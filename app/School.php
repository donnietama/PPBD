<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    // Set the timestamp off so the system not querying it.
    public $timestamps = false;

    // Set the fillable field for mass assigment.
    protected $fillable = [
        'name', 'owner_id', 'city', 'region', 'address', 'postal', 'plan_id', 'email'
    ];

    // Set RouteKeyName to grab from url.
    public function getRouteKeyName()
    {
        return 'id';
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
