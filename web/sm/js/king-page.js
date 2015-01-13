$(document).ready(function(){

	//*******************************************
	/*	PRINT BUTTON
	/********************************************/

	$('.print-btn').click( function(){
		window.print();
	});


	//*******************************************
	/*	INBOX PAGE
	/********************************************/

	// star icon toggle
	$('.inbox .message-table td i').clickToggle( 
		function(){
			$(this).removeClass('fa-star-o').addClass('fa-star');
		},
		function(){
			$(this).removeClass('fa-star').addClass('fa-star-o');
		}
	);

	var anyChecked = false;
	var activated = false;

	// inbox checkbox toggle function
	$('.inbox .message-table .simple-checkbox').change( function(){
		if( $(this).find(':checkbox').is(':checked') ){
			$(this).parents('tr').addClass('highlighted');
		} else {
			$(this).parents('tr').removeClass('highlighted');
		}

		// show/hide top menu
		$('.inbox .message-table .simple-checkbox').each( function() {
			if( $(this).find(':checkbox').is(':checked') ) {
				$('.inbox .top-menu-group1').removeClass('hide');
				$('.inbox .top-menu-label').removeClass('hide');
				anyChecked = true;

				return false;
			}else {
				$('.inbox .top-menu-group1').addClass('hide');
				$('.inbox .top-menu-label').addClass('hide');
				anyChecked = false;
			}
		});

		if( anyChecked && !activated ) {
			$('.inbox .top-menu-more ul li').toggleMenuItem();
			activated = true;
		}else if( !anyChecked ) {
			$('.inbox .top-menu-more ul li').toggleMenuItem();
			activated = false;
		}

	});

	$.fn.toggleMenuItem = function() {
		$(this).each( function() {
			if( $(this).hasClass('hide') ) {
				$(this).removeClass('hide')
			}else {
				$(this).addClass('hide')
			}
		});
	}

	// inbox check all message
	$('.inbox .top-menu .simple-checkbox-all').change( function() {
		if( $(this).find(':checkbox').is(':checked') ) {
			$('.inbox .message-table .simple-checkbox').find(':checkbox').prop('checked', true);
			$('.inbox .message-table tr').addClass('highlighted');

			$('.inbox .top-menu-group1').removeClass('hide');
			$('.inbox .top-menu-label').removeClass('hide');
			$('.inbox .top-menu-more ul li').toggleMenuItem();
		}else {
			$('.inbox .message-table .simple-checkbox').find(':checkbox').prop('checked', false);
			$('.inbox .message-table tr').removeClass('highlighted');

			$('.inbox .top-menu-group1').addClass('hide');
			$('.inbox .top-menu-label').addClass('hide');
			$('.inbox .top-menu-more ul li').toggleMenuItem();
		}

	});

	// inbox left menu
	if( $(window).width() > (768-15)) {
		$('.inbox-left-menu')
			.css('display','initial')
			.css('overflow','initial');

	}else {
		$('.inbox-left-menu')
			.css('display','none')
			.css('overflow','hidden');
	}

	// nav item active toggle
	$('.inbox .left-menu li').click( function(e){
		e.preventDefault();
		$('.inbox .left-menu li').removeClass('active');
		$(this).addClass('active');
	});

	// inbox nav responsive menu
	$('.inbox-nav-toggle').clickToggle(
		function(e) {
			$('.inbox-left-menu').slideDown(300);
			e.preventDefault();
		},
		function(e) {
			$('.inbox-left-menu').slideUp(300);
			e.preventDefault();
		}
	);

}); // end ready function
