<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['student_id', 'course_id', 'type', 'value'];
}
