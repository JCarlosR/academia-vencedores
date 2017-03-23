<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
    	return view('students.index');
    }

    public function store(Request $request)
    {
    	dd("holi");
        //obenemos la extension del archivo
        $extension = $request->file('photo')->getClientOriginalExtension();  

        //guardamos en la bd
        $especies = new Species();
        $especies->name = $request->input('name');
        $especies->photo = $extension;
        $especies->save();

        //obenemos el id del registro
        $id = $especies->id;

        //generamos el nombre del archivo (id+extension)
        $file_name = $id.'.'.$extension;    

        //ajustamos y guardamos la imagen en la ruta especificada
        Image::make($request->file('photo'))
               ->resize(250,250)
               ->save('images/species/'. $file_name);

        return back()->with('notification','Usuario registrado exitosamente');
    }
    
}
