$(document).ready(function(){

	$("#btnusuarios").click(function(){
		$.get("listar.php", function(data, status){
			console.log(data);
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