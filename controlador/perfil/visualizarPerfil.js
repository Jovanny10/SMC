$(document).ready(function(){
	visualizarPerfil();
})


function visualizarPerfil(){
	var id = document.getElementById("id").value;
	$.ajax({
		url:'../controlador/perfil/visualizarPerfil.php',
		type:'POST',
		data:{id:id}
	})
	.done(function(resp){
		var objeto=JSON.parse(resp);
		//VISUALIZAR PERFIL
		$('#nombre').val(objeto.Nombre);
		$('#apellidos').val(objeto.Apellidos);
		$('#usuario').val(objeto.Usuario);
		$('#psw').val(objeto.Psw);

		//EDITAR PERFIL
		$('#usuarioEdit').val(objeto.Usuario);
		$('#pswEdit').val(objeto.Psw);
	})
}