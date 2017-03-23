@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="/css/courses/elements-form.css">
@endsection
@section('content')

<!-- TABLA ALUMNOS -->
<h4>CURSOS</h4>
<table class="table-bordered">
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Item Name</th>
              <th>Item Price</th>
              <th>Opciones</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
            <td>  
				<a class="btn-floating blue" data-edit="x" href="#modal_edit"><i class="material-icons">edit</i></a>  

				<a class="btn-floating red"  data-delete="" href="#modal_delete"><i class="material-icons">delete</i></a>    
			</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
            <td>  
				<a class="btn-floating blue" data-edit="x" href="/alumno/"><i class="material-icons">edit</i></a>  

				<a class="btn-floating red"  data-delete="" href="#modal_delete"><i class="material-icons">delete</i></a>    
			</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
            <td>  
				<a class="btn-floating blue" data-edit="x" href="/alumno/"><i class="material-icons">edit</i></a>  

				<a class="btn-floating red"  data-delete="" href="#modal_delete"><i class="material-icons">delete</i></a>    
			</td>
          </tr>
        </tbody>
      </table>
<!-- MODAL EDITAR -->
<div id="modal_edit" class="modal modal-fixed-footer lg">	
	<form action="/enfermedades" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="modal-content">
			<h8 class="center-align">EDITAR CURSO</h8>
			<div class="row">
				<div class="col s8">
					<div class="input-field">
					  <input  name="name" placeholder="Ingrese aqui el nombre " type="text" class="validate" required>
					  <label for="first_name">Codio</label>
					</div>
					<div class="input-field">
					  <input  name="name" placeholder="Ingrese aqui los apellidos " type="text" class="validate" required>
					  <label for="first_name">Nombre</label>
					</div>						
				</div>
			</div>
 		</div>
		<div class="modal-footer">
			<a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Cerrar</a>
			<button class="btn waves-effect waves-light" type="submit" name="action">Guardar cambios
				<i class="material-icons right">done</i>
			</button>
		</div>

	</form>	
</div>
<!-- MODAL REGISTRO -->
<div id="modal_course" class="modal modal-fixed-footer lg">	
	<form action="/enfermedades" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="modal-content">
			<h8 class="center-align">REGISTRAR CURSO</h8>
			<div class="row">
				<div class="col s8">
					<div class="input-field">
					  <input  name="name" placeholder="Ingrese aqui el nombre " type="text" class="validate" required>
					  <label for="first_name">Codio</label>
					</div>
					<div class="input-field">
					  <input  name="name" placeholder="Ingrese aqui los apellidos " type="text" class="validate" required>
					  <label for="first_name">Nombre</label>
					</div>						
				</div>
			</div>
 		</div>
		<div class="modal-footer">
			<a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Cerrar</a>
			<button class="btn waves-effect waves-light" type="submit" name="action">Guardar cambios
				<i class="material-icons right">done</i>
			</button>
		</div>

	</form>	
</div>
<!-- BOTON MODAL REGISTRO -->
<div class="fixed-action-btn ">
	<a data-add="x" href="#modal_course" title="AGREGAR ENFERMEDAD" class="btn-floating btn-large teal">
		<i class="large material-icons">add</i>
	</a>
</div>

@endsection

@section('scripts')
    <script src="/js/courses/elements-form.js"></script>
@endsection
