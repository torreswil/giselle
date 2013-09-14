$(document).ready(function(){
	elegiste();
	var carpeta=$('#baseurl').val();
	$('#eleccion').click(function(){
		regalar();
	});
});

var carpeta=$('#baseurl').val();
var invitado=$('#invitado').val();

$('#confirmar').click(function(){
	$.ajax({
		url: carpeta + 'invitados/confirmar',
		data:{'invitado' : invitado},
		type:'get',
		success: function(respuesta) {
            
     	}
	});
});

function disponibles(){
	var carpeta=$('#baseurl').val();
	$('#cargador-regalos').show();
	$.ajax({
		url: carpeta + 'invitados/regalos_disponibles',
		data:{'invitado' : invitado},
		type:'get',
		success: function(respuesta) {
            $('#regalos').empty().html(respuesta);
     	}
	});
	$('#cargador-regalos').hide();
	

	/*$.get(carpeta + 'invitados/regalos_disponibles', {'invitado' : invitado}, function(respuesta) {
                        $('#regalos').empty().html(respuesta);
     })*/
}


function elegiste(){
	$('#cargador-regalos').show();
	$.get(carpeta + 'invitados/elegiste',{'invitado' : invitado}, function(respuesta) {
     $('#porajax').empty().html(respuesta);
     $('#cargador-regalos').hide();
     })
}

function regalar(invitado,regalo){
	if(confirm("Realmente quieres elegir este regalo como obsequio, si lo haces no podras cambiarlo posteriormente")){
		$.get(carpeta + 'invitados/regalar',{'invitado' : invitado, 'regalo' : regalo}, function(respuesta) {
			elegiste();
     });

	}
	
}