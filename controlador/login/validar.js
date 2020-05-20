function enviar(usuario,clave){
	var formulario = {"Usuario":usuario,"Clave":clave};
	$.ajax({
		data:formulario,
		url:'controlador/login/validar.php',
		type: 'post',
		beforeSend: function(){
			$("#resultado").html("<div class='spinner-border' role='status'><span class='sr-only'>Loading...</span></div>");
		},

		success: function(respuesta){
			if(respuesta==1){
				location.href="vista/index.php";
			}else{
				$("#resultado").html(respuesta);
			}

			$('#alert').fadeIn();     
  			setTimeout(function() {
       		$("#resultado").fadeOut(); 
       		location.href = "index.php";       
  			},1000);
		}
	});
}
