<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassManagement extends Model
{
    protected $fillable = [
        'class_name', 'capacity',
    ];

    public function getRouteKeyName() {
        return 'id';
    }
}
