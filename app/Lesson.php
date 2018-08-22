<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'name', 'teacher_id'
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
