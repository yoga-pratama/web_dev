$("document").ready(function(){
// url: '../include/itemlistpage/serverside/item_listController.php',

    $.getJSON('../include/itemlistpage/serverside/item_listController.php', success);


    function success(data){

        var table= $('#item_list').DataTable( {
         "oLanguage": {
         "sSearch": "Filter Data"
         },
         "data" : data

    } );



    }

	


    $('#item_list').on('click', 'tbody tr', function () {
        var name = $('td', this).eq(0).text();
       	
         $('#element_to_pop_up').bPopup();


    	 	
    } );


    $('#viewgrafik').click(function(){
    	$('#element_to_pop_up2').bPopup();

    });

	

});





