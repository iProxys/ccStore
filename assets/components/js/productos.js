// FUNCION PARA BUSCAR DATOS DE TABLA PROVEEDORES
$(buscar_datos());
function buscar_datos(consulta){
	$.ajax({
		url:'assets/components/php/productos/productos.php',
		type: 'POST' ,
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#productos").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}

$(document).on('keyup','#caja_busqueda', function(){
	var valor = $(this).val();
	if (valor != "") {
		buscar_datos(valor);
	}else{
		buscar_datos();
	}
});