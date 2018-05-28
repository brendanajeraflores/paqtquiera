$(document).ready(function(){

	$("#btnusuarios").click(function(){
		$.get("listar.php", function(data, status){
			console.log(data);
			$("#divusuarios").html(data);
			
		});
    });
    
    $("#btnglobos").click(function(){
		$.get("listar.php", function(data, status){
			$("#divglobos").html(data);
		});
    });
    
    $("#btnchocolates").click(function(){
		$.get("listar.php", function(data, status){
			$("#divchocolates").html(data);
		});
	});








});