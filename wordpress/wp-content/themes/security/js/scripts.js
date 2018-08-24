/* scripts para calculo de multas */


var evaluar_simulador = function() {

  $.bootstrapGrowl("Calculando Infracciones");
  var utm 
  $.getJSON('https://mindicador.cl/api', function(data) {
    var dailyIndicators = data;

    var utm = dailyIndicators.utm.valor;
    var veces = $(".form-control option:selected[value=2]").length;

    var valorMulta = 0;
    $.each( $(".form-control option:selected[value=2]"), function(k,v){
      valorMulta = valorMulta + parseInt($(this).attr('rel'));
    })
    console.log(valorMulta);

    var multa = utm * valorMulta;
    
    $('#nVeces').html(veces);
    $('#vUTM').html('$'+utm);
    $('#vTotalUTM').html(valorMulta);
    $('#vTotal').html('$'+multa);
    
    $('.oculto').slideDown('fast');
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