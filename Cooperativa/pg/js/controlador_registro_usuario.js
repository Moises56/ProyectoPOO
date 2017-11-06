$(document).ready(function(){	
	$("#btn-registrar").click(function(){
if ($("#password").val()==$("#password-confirm").val()) {

		var parametros = "txt-nombre=" + $("#txt-nombre").val() + "&" + 
			"txt-apellido="+$("#txt-apellido").val()+ "&" +
			"txt-fecha="+$("#fecha").val() + "&" +
			"slc-pais="+$("#slc-pais").val() + "&" +
			"txt-correo="+$("#txt-correo").val() + "&" +
			"txt-password="+$("#password").val() + "&" +
			"txt-password-confirm="+$("#password-confirm").val() + "&" +
			"txt-telefono="+$("#txt-telefono").val() + "&" +
			"slc-genero="+$("#slc-genero").val();
			alert(parametros);
		$.ajax({
			url:"ajax/acciones.php?accion=1",
			method: "POST",
			data:parametros,
			dataType:"json",
			success:function(respuesta){
				window.location="pagina-perfil.php";
			},
			error:function( jqXHR, textStatus, errorThrown){
             if (jqXHR.status === 0) {

            alert('Not connect: Verify Network.');

          } else if (jqXHR.status == 404) {

            alert('Requested page not found [404]');

          } else if (jqXHR.status == 500) {

            alert('Internal Server Error [500].');

          } else if (textStatus === 'parsererror') {

            alert('Requested JSON parse failed.');

          } else if (textStatus === 'timeout') {

            alert('Time out error.');

          } else if (textStatus === 'abort') {

            alert('Ajax request aborted.');

          } else {

            alert('Uncaught Error: ' + jqXHR.responseText);

          }

          
			}
		});

}else{
	alert('Las Contraseñas no Coinciden');
}
	});
	
});	
