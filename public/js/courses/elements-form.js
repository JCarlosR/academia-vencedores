
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
        });

       function addModal(){        	
		$('#modal_course').modal();
		}
		function editModal(){        	
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