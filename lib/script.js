$(document).ready(function() {
    $(".boton-enviar-mensaje").click(enviarMensaje);
    //$('#form-enviar-mensaje').submit(formEnvialMensaje(e));
});

function formEnvialMensaje(e) {
	//e.preventDefault();
	//alert("formulario cancelado");
	return false;
}

function enviarMensaje () {
	var parametros = {
		"id-publicacion" : $("#id-publicacion").text(), 
		"nombre" : $("#InputNombre").val(),
		"email" : $("#InputEmail").val(),
		"mensaje" : $("#InputMensaje").val(),
	};

	$.ajax({
		data:  parametros, //datos que se envian a traves de ajax
		url:   'mensaje-ajax.php', //archivo que recibe la peticion
		type:  'post', //método de envio
		beforeSend: function () { // función que se ejecuta antes de enviar
			$("#resultado").html("Procesando, espere por favor...");
		},
		success:  function (response) { 
			resultadoAjaxMensajeEnviado(response);
		}
	});
}

function resultadoAjaxMensajeEnviado(data) {
	$("#resultado").html(data);
}