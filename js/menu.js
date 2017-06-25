$(window).ready(function() {
var UD_MENU_OPEN = false;

		$('.ud_menu_icon').stop().click(function(){
			if(UD_MENU_OPEN === false) {
				UD_MENU_OPEN = true;
				$('.ud_menu_icon').addClass('is-active');
                $('#menu_main').css('visibility','visible');
                $('#menu_main').css('margin-left','0');
			} else {
				UD_MENU_OPEN = false;
				$('.ud_menu_icon').removeClass('is-active');
                $('#menu_main').css('visibility','hidden');
                $('#menu_main').css('margin-left','-500');
			}
		});

    })