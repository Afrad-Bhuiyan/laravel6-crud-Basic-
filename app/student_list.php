<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_list extends Model
{
    //
    protected $fillable = [
        'fname', 'lname', 'age','gender','mobile'
    ];
}
