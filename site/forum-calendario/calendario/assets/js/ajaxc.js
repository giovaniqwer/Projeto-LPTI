
$(document).ready(function() {

$('#calendar').fullCalendar({
    events:'MC.php',
 eventClick:function(calEvent, jsEvent) {
 	 $(".modal-title").html(calEvent.title + " - " + calEvent.data);
 	
 	$(".modal-bodyP").html("   Palestrante: " + calEvent.palestrante);
 	$(".modal-bodyH").html("   Hora: " + calEvent.horario);
 	$(".modal-bodyL").html("   Local: " + calEvent.local);
 	$(".modal-bodyC").html("   Classificação: " + calEvent.classificacao);
 	$(".modal-bodyD").html("   Descrição: " + calEvent.descricao);

	$("#calendario").modal("show"); 
 } 
});

$('#calendarioADM').fullCalendar({
 events: '../MC.php',
 eventClick:function(calEvent, jsEvent) {
 	$(".modal-title").html(calEvent.title + " - " + calEvent.data);
 	
 	$(".modal-bodyP").html("Palestrante: " + calEvent.palestrante);
 	$(".modal-bodyH").html("Hora: " + calEvent.horario);
 	$(".modal-bodyL").html("Local: " + calEvent.local);
 	$(".modal-bodyC").html("Classificação: " + calEvent.classificacao);
 	$(".modal-bodyD").html("Descrição: " + calEvent.descricao);

	$("#calendario").modal("show"); 
 } 
 });
 });



