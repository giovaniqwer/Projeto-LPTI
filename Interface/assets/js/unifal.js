$(document).ready(function(e){
	$("#todo").click(function(e){
		e.preventDefault();
		var href = $(this).attr('href');
		$("#conteudo").load(href + " #conteudo");
	});
$(".cadastro").click(function(e){
		e.preventDefault();
		var href = $(this).attr('href');
		$("#conteudo").load(href + " #conteudo");
	});
$(".inicio").click(function(e){
		e.preventDefault();
		var href = $(this).attr('href');
		$("#conteudo").load(href + " #conteudo");
	});
});
