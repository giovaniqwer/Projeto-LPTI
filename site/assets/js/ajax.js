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

jQuery(document).ready(function(){
   jQuery('#ajax_post').submit(function(){
     var dados = jQuery( this ).serialize();

     jQuery.ajax({
       type: "POST",
       url: "../Post/add-post.php",
       data: dados,
       success: function( data )
       {
         alert( data );
       }
     });
     return false;
   });
 });

 /*jQuery(document).ready(function(){
      jQuery('#ajax_coment').submit(function(){
        var dados = jQuery( this ).serialize();

        jQuery.ajax({
          type: "POST",
          url: "../Comentario/add-coment.php",
          data: dados,
          success: function( data )
          {
            alert( data );
          }
        });


      return false;
    });
  });*/
  
