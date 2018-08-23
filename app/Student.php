<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Set the timestamp off so the system not querying it.
    public $timestamps = false;

    // Set the fillable field for mass assigment.
    protected $fillable = [
        'name', 'username', 'email', 'password', 'birthdate',
        'birthplace', 'address', 'city', 'state', 'country',
        'contact', 'emergency_contact', 'emergency_contact_relation',
        'math_scores', 'science_scores', 'literature_scores',
        'certificate_exam_url', 'certificate_qualification_url',
        'avatar',
    ];

    // Set RouteKeyName to grab from url.
    public function getRouteKeyName()
    {
        return 'id';
    }
}
