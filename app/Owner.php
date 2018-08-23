<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function school()
    {
        return $this->hasMany(School::class);
    }
}
