$(document).ready(function(){

	/*$("#btnusuarios").click(function(){
		$.get("listar.php", function(data, status){
			console.log(data);
			$("#divusuarios").html(data);
			
		});
    });*/
    
    $("#btnarticulos").click(function(){
		$.get("listarart.php", function(data, status){
			//$("#divusuarios").remove();
			$("#divarticulos").html(data);
		});
    });
    
    /*$("#btnpeluches").click(function(){
		$.get("consultadb.php", function(data, status){
			$("#divpeluches").html(data);
		});
	});*/








});