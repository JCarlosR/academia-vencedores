@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="/css/teachers/elements-form.css">
@endsection
@section('content')

<!-- TABLA ALUMNOS -->
<h4>DOCENTES</h4>
<table class="table-bordered">
        <thead>
          <tr>
              <th>NombreE</th>
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
				<a class="btn-floating blue" data-edit="x" href="/docente/"><i class="material-icons">edit</i></a>  

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
	<form action="" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="modal-content">
			<h8 class="center-align">EDITAR DOCENTE</h8>
			<div class="row">
				<div class="col s8">
					<div class="input-field">
					  <input  name="name" placeholder="Ingrese aqui el nombre " type="text" class="validate" required>
					  <label for="first_name">Nombre</label>
					</div>
					<div class="input-field">
					  <input  name="name" placeholder="Ingrese aqui los apellidos " type="text" class="validate" required>
					  <label for="first_name">Apellido</label>
					</div>
					<div class="input-field col s6">
					  <input  name="name" placeholder="Ingrese aqui el DNI " type="number" class="validate" required>
					  <label for="first_name">DNI</label>
					</div>
					<div class="input-field col s6">
					  <input  name="name" placeholder="Ingrese aqui su direccion " type="text" class="validate" required>
					  <label for="first_name">Direccion</label>
					</div>
					<div class="input-field col s6">
						<label >Fecha de Nacimiento</label>
						<input type="date" class="datepicker">
					</div>
					<div class="input-field col s6">
			            <select name="role">
			                <option value="" disabled selected>Escoja su sexo</option>                
			                    <option value="M">Masculino</option>
			                    <option value="F">Femenino</option>
			                    <option value="A">Atrofiado</option>
			            </select>
			            <label >Sexo</label>
			        </div>
					<div class="input-field col s6">
					  <input  name="" placeholder="Ingrese aqui su E-mail " type="email" class="validate" required>
					  <label for="first_name">E-mail</label>
					</div>
					<div class="input-field col s6">
					  <input  name="name" placeholder="Ingrese aqui el DNI " type="number" class="validate" required>
					  <label for="first_name">Telefono</label>
					</div>					
				</div>
				<div class="col s4">
					<div class="col s12 ">
					  <div class="card">
					    <div class="card-image">
					    <img id="blah" src="/images/logdo.png" alt="your image" />		    
					    </div>
					  </div>
					</div>
					<div class="input-field col s12">
					   <div class="file-field input-field">
					      <div class="btn btn-red">
					        <span >Foto</span>
					        <input id="imgInp" name="photo" type="file" required>
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
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
<div id="modal_teacher" class="modal modal-fixed-footer lg">	
	<form action="" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="modal-content">
			<h8 class="center-align">REGISTRAR DOCENTE</h8>
			<div class="row">
				<div class="col s8">
					<div class="input-field">
					  <input  name="name" placeholder="Ingrese aqui el nombre " type="text" class="validate" required>
					  <label for="first_name">Nombre</label>
					</div>
					<div class="input-field">
					  <input  name="lastName" placeholder="Ingrese aqui los apellidos " type="text" class="validate" required>
					  <label for="first_name">Apellido</label>
					</div>
					<div class="input-field col s6">
					  <input  name="dni" placeholder="Ingrese aqui el DNI " type="number" class="validate" required>
					  <label for="first_name">DNI</label>
					</div>
					<div class="input-field col s6">
					  <input  name="address" placeholder="Ingrese aqui su direccion " type="text" class="validate" required>
					  <label for="first_name">Direccion</label>
					</div>
					<div class="input-field col s6">
						<label >Fecha de Nacimiento</label>
						<input name="birthdate" type="date" class="datepicker">
					</div>
					<div class="input-field col s6">
			            <select name="sex">
			                <option value="" disabled selected>Escoja su sexo</option>                
			                    <option value="M">Masculino</option>
			                    <option value="F">Femenino</option>
			                    <option value="A">Atrofiado</option>
			            </select>
			            <label >Sexo</label>
			        </div>
					<div class="input-field col s6">
					  <input  name="email" placeholder="Ingrese aqui su E-mail " type="email" class="validate" required>
					  <label for="first_name">E-mail</label>
					</div>
					<div class="input-field col s6">
					  <input  name="phone" placeholder="Ingrese aqui el DNI " type="number" class="validate" required>
					  <label for="first_name">Telefono</label>
					</div>
				</div>
				<div class="col s4">
					<div class="col s12 ">
					  <div class="card">
					    <div class="card-image">
					    <img id="blaho" src="/images/logdo.png" alt="your image" />		    
					    </div>
					  </div>
					</div>
					<div class="input-field col s12">
					   <div class="file-field input-field">
					      <div class="btn btn-red">
					        <span >Foto</span>
					        <input id="imgInpo" name="photo" type="file" required>
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
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
	<a data-add="x" href="#modal_teacher" title="AGREGAR DOCENTE" class="btn-floating btn-large teal">
		<i class="large material-icons">add</i>
	</a>
</div>

@endsection

@section('scripts')
    <script src="/js/teachers/elements-form.js"></script>
@endsection
