<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'birth', 'address', 'city', 'province', 'contact', 'emergenc', 'emergenrel', 'email', 'password', 'avatar',
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
