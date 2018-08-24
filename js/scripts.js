/* scripts para calculo de multas */


var evaluar_simulador = function() {

  var utm 
  $.getJSON('https://mindicador.cl/api', function(data) {
    var dailyIndicators = data;

    var utm = dailyIndicators.utm.valor;
    var veces = $(".form-control option:selected[value=2]").length;
    var multa = utm * veces;

    console.log(multa);

    $('#nVeces').html(veces);
    $('#vUTM').html('$'+utm);
    $('#vTotal').html('$'+multa);
  }).fail(function() {
    console.log('Error al consumir la API!');
  });
}

$(document).ready(function(){
 console.log('ready');
})

$(document).on("click", ".btn-flow", function() {
//   console.log("inside";   <-- here it is
    evaluar_simulador();
 });