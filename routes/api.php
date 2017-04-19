<?php

use App\Student;
use Symfony\Component\HttpFoundation\Request;

Route::get('/student', function (Request $request) {
    return Student::where('dni', $request->input('dni'))->first();
});

Route::get('/students', 'Api\ReportController@students');
Route::get('/courses', 'Api\ReportController@courses');
Route::get('/levels', 'Api\ReportController@levels');
