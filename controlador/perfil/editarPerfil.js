$(document).ready(function(){
	editarPerfil();
})

function editarPerfil(){
	$('form').submit(function(e){
		var datos=$(this).serialize();
		e.preventDefault();
		$.ajax({
			url:'../controlador/perfil/editarPerfil.php',
			type:'POST',
			data:datos,
		})

	.done(function(resp){
		$("#resultado").html(resp);
		visualizarPerfil();
		
	})

  })
}