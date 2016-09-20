 $(document).ready(function(e){
	$("#menuTopo a").click(function(e){
		e.preventDefault();
		var href = $(this).attr('href');
		$(".conteudo").load(href + " .conteudo");
 });
 });

 $(document).ready(function(e){
   $(".add-post").click(function(){
     $("#modal").fadeIn(50);
   });
   $("#fechar, #modal").click(function(e){
     if(e.target !==this){
       return;
     }
      $("#modal").fadeOut(50);
   });
   
 });

	

