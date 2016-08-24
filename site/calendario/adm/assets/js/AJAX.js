$(document).ready(function(e){
	$(".cabecalho a").click(function(e){
		e.preventDefault();
		var href = $(this).attr('href');
		$(".conteudo").load(href + " .conteudo");
	});
});

function chama(botao) {
		var href = $(botao).attr('href');
		$(".conteudo").load(href + " .conteudo");
}

