$("#buscarEspacio").live("click", function() {
	var numResults = $(this).attr('numResults');
	var paginacion = $(".rejilla-espacios").attr('paginacion');
	buscar(0, numResults, paginacion, 'verde', 'espacio', direccionBusquedaEspacio);
});
$('.numero-paginacion-verde').live("click", function() {
	var indice = parseInt($(this).attr('indice'));
	var numResults = $(this).attr('numResults');
	var paginacion = $(".rejilla-espacios").attr('paginacion');
	buscar(indice, numResults, paginacion, 'verde', 'espacio', direccionBusquedaEspacio);
});
$("#buscarEvento").live("click", function() {
	var numResults = $(this).attr('numResults');
	var paginacion = $(".rejilla-eventos").attr('paginacion');
	buscar(0, numResults, paginacion, 'rosa', 'evento', direccionBusquedaEvento);
});
$('.numero-paginacion-rosa').live("click", function() {
	var indice = parseInt($(this).attr('indice'));
	var numResults = $(this).attr('numResults');
	var paginacion = $(".rejilla-eventos").attr('paginacion');
	buscar(indice, numResults, paginacion, 'rosa', 'evento', direccionBusquedaEvento);
});
$("#buscarServicio").live("click", function() {
	var numResults = $(this).attr('numResults');
	var paginacion = $(".rejilla-servicios").attr('paginacion');
	buscar(0, numResults, paginacion, 'azul', 'servicio', direccionBusquedaServicio);
});
$('.numero-paginacion-azul').live("click", function() {
	var indice = parseInt($(this).attr('indice'));
	var numResults = $(this).attr('numResults');
	var paginacion = $(".rejilla-servicios").attr('paginacion');
	buscar(indice, numResults, paginacion, 'azul', 'servicio', direccionBusquedaServicio);
});
function buscar(indice, numResults, paginacion, color, tipo, direccion) {
	$("#loader-widget-" + color).css('display', 'block');
	//$(".desplegables").css('display','none');
	$("#elementos-" + tipo + "-" + color).empty();
	$(".paginacion-" + color).empty();

	var data = 'numResults=' + numResults + '&indice=' + indice + '&paginacion=' + paginacion;
	$.each($("." + color + " select"), function(indice, valor) {
		var auxiliar = $.trim($(valor).val());
		var id = $(valor).attr('name');
		data += '&' + id + '=' + auxiliar;
	});
	console.log(data);

	$.post(direccion, data, function(respuesta) {
		var respuesta = JSON.parse(respuesta);
		console.dir(respuesta);
		$("#loader-widget-" + color).css('display', 'none');
		$("#elementos-" + tipo + "-" + color).append(respuesta.htmlElementos);
		$(".paginacion-" + color).append(respuesta.htmlPaginacion);
	});
}

////////////////////SEDES//////////////////////////////////
$("#buscarSede").live("click", function() {

	for (var i = 0; i < markers.length; i++)
		markers[i].setMap(null);
	markers = new Array();

	var data = '';

	$.each($(".rejilla-sedes select"), function(indice, valor) {
		var auxiliar = $.trim($(valor).val());
		var id = $(valor).attr('name');
		data += '&' + id + '=' + auxiliar;
	});

	$.post(direccionBusquedaSede, data, function(respuesta) {
		var respuesta = JSON.parse(respuesta);
		var elementos = respuesta['arreglo']['elementos'];
		markers = new Array(elementos.length);
		colocaMarcador(elementos);
	});

});

function colocaMarcador(respuesta) {

	for (var i = 0; i < respuesta.length; i++) {
		var latitud = respuesta[i]['latitud'];
		var longitud = respuesta[i]['longitud'];
		var nombre = respuesta[i]['nombre'];
		markers[i] = new google.maps.Marker({
			position : new google.maps.LatLng(latitud, longitud),
			map : map,
			title : nombre
		});
	};
}
