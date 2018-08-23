<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'name', 'owner_id', 'city', 'region', 'address', 'postal', 'plan_id', 'email'
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
