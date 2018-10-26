$(document).ready(function() {
    $(".boton-enviar-mensaje").click(enviarMensaje);
    //$('#form-enviar-mensaje').submit(formEnvialMensaje(e));
    $("#imageUpload").change(function() {
    readURL(this);
	});
});

function formEnvialMensaje(e) {
	//e.preventDefault();
	//alert("formulario cancelado");
	return false;
}

function enviarMensaje () {

	if ($("#InputMensaje").val() == "") {
		$("#resultado").html("<div class='alert alert-danger alert-dismissable' id='flash-msg'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button><h4><i class='icon fa fa-check'></i>Mensaje Requerido</h4></div>");
		return;
	}

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
	if (data == "exitoso") {
		$("#resultado").html("<div class='alert alert-success alert-dismissable' id='flash-msg'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button><h4><i class='icon fa fa-check'></i>Comentario exitoso!</h4></div>");
	}
	else {
		$("#resultado").html("<div class='alert alert-danger'>Error en cargar mensaje</div>");
	}
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.imagePreview').css('background-image', 'url('+e.target.result +')');
            $('.imagePreview').hide();
            $('.imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}