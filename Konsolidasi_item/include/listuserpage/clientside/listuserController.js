$('document').ready(function(){

	var table= $('#listuser').dataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "../include/listuserpage/serverside/listuserController.php"

    } );

   $('#listuser tbody').on( 'click', 'tr', function () {
        	
       				
       	  
       	    var no = $('td', this).eq(0).text();
       	    console.log(no);
       	   	$('#usernameEdit').focus();


       	   	$('#editUser').bPopup({

       	   		onOpen : function() {
       	   		$.getJSON('../include/listuserpage/serverside/editMacthing.php',{No : no},function(data){
        		
        		$.each(data,function(i, item){
        			console.log('open');
              $('#id_UserEdit').val(item.id_user);
              $('#id_userdelete').val(item.id_user);
        			$('#jabatanEdit').val(item.jabatan).prop('selected',true);
        			$('#usernameEdit').val(item.Username);
        			$('#passwordEdit').val(item.Password);
        			$('#emailEdit').val(item.Email);
        			$('#cabangEdit').val(item.id_cabang);

        		});

             $('#submitedit').click(function(event){

              $.post('../include/listuserpage/serverside/edituserController.php',$("#edituser").serialize(),function(msg){
                  if(msg == 0){
                    alert('error');
                  }else{
                    //alert();
                  }
              });
             // event.preventDefault();

            });

             $('#deleteuser').click(function(){
              
                $.post('../include/listuserpage/serverside/deleteuser.php', $("#delete").serialize(), function(){
                  
                });
             });

        	});	

       	   		},
       	   		onClose : function(){
       	   		console.log('close');
       	   		$('#jabatanEdit').val('');
       	   		$('#usernameEdit').val('');
        			$('#passwordEdit').val('');
        			$('#emailEdit').val('');
        			$('#cabangEdit').val('');

       	   		}

       	   	});
        

        
        
    } );


   



    $('#addButton').click(function(){
    		$('#adduser').bPopup();

    		$('#jabatan').focus();
    		var jabatan = $('#jabatan').val();

            $('#jabatan').change(function(){

                jabatan = $(this).val();
                 console.log(jabatan);
            });


            $('#submit').click(function( event){
               // event.preventDefault();
              if(jabatan == 'Pilih Jabatan'){
                  $('#eror').text("Pilih Jabatan!");
                 
              }else{
              //  console.log($("form").serialize());
            	$.post( "../include/listuserpage/serverside/adduser.php", $( "form" ).serialize() ,function(msg){
				 		if(msg ==1){
				 			$('#eror').text('add success');
				 		}
				 });
              
              }
		 });
    });




});