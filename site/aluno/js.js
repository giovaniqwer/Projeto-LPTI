$(document).ready(function() {
	var open = 1;
	var lastScrollTop = 0;
	var info = 0;

	$('#toogle_menu').click(function(){
		if($(this).hasClass('sel')){
			$('#toogle_menu, #menu').removeClass('sel');
			$(this).text('+');
		} else {
			$('#toogle_menu, #menu').addClass('sel');
			$(this).text('-');
		}
	});

	$('#ir_topo').click(function(){
		$('html, body').animate({scrollTop:0}, 'slow');
		return false;
	});

	function openInfo(){
		$('#info_all').addClass('on');
		atual = 0;
		$('.info_go').eq(0).click();
		info = 1;
	}

	function exitInfo(){
		$('#info_all').removeClass('on');
		$('html, body').scrollTop( 0 );
		info = 0;
	}

	$('#info_open').click(function(){openInfo();});
	$('#info_exit').click(function(){exitInfo();});

	function setarMenu(at){
		$('.info_link').removeClass('sel');
		$('.info_link').eq(at).addClass('sel');
	};

	$('.info_go').click(function(){
		index = $('.info_go').index( $(this) );
		$('html, body').scrollTop( $(".info_box").eq(index).offset().top );
		atual = index;
		setarMenu(index);
	});

	$(window).scroll(function(event){
		var st = $(this).scrollTop();

		if(open && info){
			if (st > lastScrollTop){
				//descendo
				console.log('down');

				if(atual < 3){
					next = $('.info_down').eq(atual);
					pos = next.offset().top - ((window.pageYOffset || document.scrollTop)  - (document.clientTop || 0)) - $(window).height();
					console.log('nextpos: '+pos);
					if( pos < 0 ){
						open = 0;
						$('html, body').scrollTop( $(".info_box").eq(atual+1).offset().top );
						setarMenu(atual+1);
						atual++;
						open=1;
					}
				}
			} else {
				//subindo
				console.log('up');

				if(atual > 0){
					next = $('.info_up').eq(atual-1);
					pos = next.offset().top - ((window.pageYOffset || document.scrollTop)  - (document.clientTop || 0)) + 250;
					console.log('nextpos: '+pos+', de index: ' + (atual-1));
					if( pos > 0 ){
						open = 0;
						$('html, body').scrollTop( $(".info_box").eq(atual-1).offset().top );
						setarMenu(atual-1);
						atual--;
						open=1;
					}
				}
			}
		}
		lastScrollTop = st;
	});

	function addShow( show, id, tag, tagValue ){
		$("#"+id+' .ms_item['+tag+'*='+tagValue+']').addClass(show);
	}

	function removeShow( show, id, tag, tagValue ){
		$("#"+id+' .ms_item['+tag+'*='+tagValue+']').removeClass(show);
	}

	$(".per_select").click(function(){
		$("#ob_list .ms_item.show2").removeClass('show2');
		$('.per_select').removeClass('sel');
		$(this).addClass('sel');
		addShow( 'show2', 'ob_list', 'data-per', $(this).attr('data-per') );
	});

	$(".type_select").click(function(){
		if( $(this).hasClass('sel') ){
			removeShow( 'show2', 'op_list', 'data-type', $(this).attr('data-type') );
			$(this).removeClass('sel');
		} else {
			addShow( 'show2', 'op_list', 'data-type', $(this).attr('data-type') );
			$(this).addClass('sel');
		}
	});

	$(".cod_select").click(function(){
		if( $(this).hasClass('sel') ){
			removeShow( 'show1', 'op_list', 'data-cod', $(this).attr('data-cod') );
			$(this).removeClass('sel');
		} else {
			addShow( 'show1', 'op_list', 'data-cod', $(this).attr('data-cod') );
			$(this).addClass('sel');
		}
	});


});
