<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Define the relationship with the Attendance model
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
