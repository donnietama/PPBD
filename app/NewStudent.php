<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewStudent extends Model
{
    protected $fillable = [
        'user_id', 'math', 'science', 'bahasa', 'english', 'skhun', 'ijazah', 'raport',
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }

    // Get user details by relationships.
    public function user()
    {
        return $this->hasMany(NewStudent::class);
    }

    public function newStudent()
    {
        return $this->belongsTo(User::class);
    }
}
