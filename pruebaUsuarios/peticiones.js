$(document).ready(function(){


	$("#btnusuarios").click(function(){
		$.get("../../pruebaUsuarios/listar.php", function(data, status){
			//$("#divarticulos").remove();
			$("#divusuarios").html(data);
			
		});
    });
    
    /*$("#btnglobos").click(function(){
		$.get("consultadb.php", function(data, status){
			$("#divglobos").html(data);
		});
    });
    
    $("#btnpeluches").click(function(){
		$.get("consultadb.php", function(data, status){
			$("#divpeluches").html(data);
		});
	});*/








});