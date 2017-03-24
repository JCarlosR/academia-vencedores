<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Intervention\Image\Facades\Image;

class CourseController extends Controller
{
    public function index()
    {
    	$courses = Course::all();
    	return view('courses.index')->with(compact('courses'));
    }
    public function store(Request $request)
    {    			

        //guardamos en la bd
        $courses = new Course();
        $courses->name = $request->input('name');
        $courses->description = $request->input('description');
        $courses->save();

        return back()->with('notification','Usuario registrado exitosamente');
    }
    public function update($id)
    {
        dd("editar curso");
    }
    public function delete($id)
    {
        $courses = Course::find($id);
        $courses->delete();
        return back();
    }
}
