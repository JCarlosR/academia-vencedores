
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
		$('#modal_course').modal();
		}

		function editModal(){   
			//id
			var course_id = $(this).data('edit');
			$('#id').val(course_id);
			//name
			var description = $(this).parent().prev().text();
			$('#description').val(description); 
			//name
			var name = $(this).parent().prev().prev().text();
			$('#name').val(name); 

			$('#modal_edit').modal();
		}

		// Preview image
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
			var course_id = $(this).attr('data-delete');
			
			$('#delete').attr("href", "/curso/"+course_id+"/eliminar");
        	
        	$('#modal_delete').modal(); 
        }