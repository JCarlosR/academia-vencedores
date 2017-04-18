<?php

use App\Student;
use Illuminate\Http\Request;

Route::get('/student', function (Request $request) {
    return Student::where('dni', $request->input('dni'))->first();
});
