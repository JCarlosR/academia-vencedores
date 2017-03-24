
	//select sexo
      $(document).ready(function() {
		    $('select').material_select();
		  });
    //select date
      $('.datepicker').pickadate({
		    selectMonths: true, // Creates a dropdown to control month
		    selectYears: 15 // Creates a dropdown of 15 years to control year
		}); 
    //show modal
      $(function(){
    		
			$('[data-add]').on('click',addModal);
			$('[data-edit]').on('click',editModal);	  
			$('[data-delete]').on('click',confirmation);	        	
        });

       function addModal(){        	
		$('#modal_student').modal({
				startingTop: '0%', // Starting top style attribute
				endingTop: '2%' // Ending top style attribute
			});
		}
		

		function editModal(){  
			
			var id = $(this).data('edit');
			var name = $(this).data('name');
			var lastName = $(this).data('lastname');
			var dni = $(this).data('dni');
			var address = $(this).data('address');
			//falta la fecha
			var sex = $(this).data('sex');
			var email = $(this).data('email');
			var phone = $(this).data('phone');
			var attorney = $(this).data('attorney');
			var photo = $(this).data('photo');

			
			
			$('#id').val(id);
			$('#name').val(name);
			$('#lastName').val(lastName);
			$('#dni').val(dni);
			$('#address').val(address);
			//falta la fecha
			//FALTA ASIGNAR EL VALOR AL SELECT SEX
			$('#email').val(email);
			$('#phone').val(phone);
			$('#attorney').val(attorney);			
			$("#blah").attr("src","/images/students/"+id+"."+photo);

			$('#modal_edit').modal({
					startingTop: '0%', // Starting top style attribute
					endingTop: '2%' // Ending top style attribute
				});
		}


		// Preview image registro
		function read(input) {

		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#blaho').attr('src', e.target.result);
		        }

		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInpo").change(function(){
		    read(this);
		});

		// Preview image edit
		function readURL(input) {

		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#blah').attr('src', e.target.result);
		        }

		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		});

		//modal confirmar eliminacion
		function confirmation(){
        	//id
			var student_id = $(this).attr('data-delete');
			
			$('#delete').attr("href", "/alumno/"+student_id+"/eliminar");
        	
        	$('#modal_delete').modal(); 
        }