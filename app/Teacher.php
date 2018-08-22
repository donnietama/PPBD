<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name', 'birth', 'degree', 'status', 'address', 'city', 'province', 'contact', 'emergenc', 'lesson_id', 'bio', 'avatar'
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
