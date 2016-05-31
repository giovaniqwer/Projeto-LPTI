$(document).ready(function(e){
  $("#confirma").hide();
});

function confirmar(){
  $("#confirma").show({
    resizable: false,
    width:400,
    height:200,
    modal: true,
	});
};