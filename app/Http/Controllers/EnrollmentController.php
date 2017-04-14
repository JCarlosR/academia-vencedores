<?php

namespace App\Http\Controllers;

use App\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::all();
        return view('enrollment.index')->with(compact('enrollments'));
    }

    public function create()
    {
        return view('enrollment.create');
    }
}
