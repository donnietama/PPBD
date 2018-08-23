<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = [
        'class_name', 'capacity',
    ];

    public function getRouteKeyName() {
        return 'id';
    }
}
