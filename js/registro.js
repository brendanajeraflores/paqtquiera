$(document).ready(function(){

	//optColonia = $("#optcolonia");
	//console.log(optcolonia);
	$("#selectcolonia").change(function(){
		value = $('select[name="colonias"] option:selected').val();
		//value = $("#optcolonia").val();
		console.log(value);
		//var url = "../usuarios/colonia.php";
		var url = "../usuarios/colonia.php?value="+value;
        $.ajax({                        
           type: "POST",                 
           url: url, 
           data:{},
           //data:{valor: value},                    
           //data: $("#optcolonia").serialize(), 
           success: function(data)             
           {
             $('#delegacion').html(data);               
           }
       });



		/*value = $("#selectcolonia").val();
		console.log(value);
		$.get("../usuarios/colonia.php", function(data, status){
			console.log(data);
			$("#delegacion").html(data);
			
		});*/
	})

})
