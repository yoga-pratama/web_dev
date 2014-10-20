
$('document').ready(function(){

var dataset;

$.getJSON("../include/listpembelianpage/serverside/listpembelianController.php", success);


function success(Data){
 	
	var table = $('#listpembelian').DataTable( {
        "oLanguage": {
     	 "sSearch": "Filter Data"
   		 },
   		 "data" : Data
    } );
	
$('#datepicker1').datepicker({
	dateFormat: "yy-mm-dd",
	"onSelect" : function(date) {
      minDateFilter = new Date(date).getTime();
      table.draw();
    }
    
}).keyup(function() {
    minDateFilter = new Date(this.value).getTime();
    table.draw();
  });;

$('#datepicker2').datepicker({
	dateFormat: "yy-mm-dd",
	"onSelect" :function(date) {
      maxDateFilter = new Date(date).getTime();
     
      table.draw();
    }
}).keyup(function(){
	maxDateFilter = new Date(this.value).getTime();
    table.draw();
	
});

	


}

 });

// Date range filter
// Date range filter
minDateFilter = "";
maxDateFilter = "";

$.fn.dataTableExt.afnFiltering.push(
  function(oSettings, aData, iDataIndex) {
    if (typeof aData._date == 'undefined') {
      aData._date = new Date(aData[1]).getTime();
    }

    if (minDateFilter && !isNaN(minDateFilter)) {
      if (aData._date < minDateFilter) {
        return false;
      }
    }

    if (maxDateFilter && !isNaN(maxDateFilter)) {
      if (aData._date > maxDateFilter) {
        return false;
      }
    }

    return true;
  }
);



