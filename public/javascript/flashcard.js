/*
*  Zendey Flashcards
*  www.zendey.com  
*  info@zendey.com
*
*/

	function initialize_card(){
		card_toggle = "text";
		
		card_text 		= document.getElementById( "card_text" );
		card_image 		= document.getElementById( "card_image" );
		card_audio 		= document.getElementById( "card_audio" );
		preload_audio 	= document.getElementById( "preload_audio" );
		card_text.style.visibility = "visible";
		
		card_counter = 1;
		preload_next_card();
		play_card();
	}

	function preload_next_card(){
		document.images[ "preload_image" ].src = card_directory + card_array[ 1 ][ card_counter + 1 ];
		preload_audio.setAttribute( "src", card_directory + card_array[ 2 ][ card_counter + 1 ] );		
	}

	function play_card(){
		if ( card_toggle == "text" ){
			card_toggle = "image";
			
			card_text.innerHTML = card_array[ 0 ][ card_counter ];	
			card_audio.setAttribute( "src", card_directory + card_array[ 2 ][ card_counter ] );		
			
			card_text.style.visibility = "visible";
			card_image.style.visibility = "hidden";
			preload_next_card();
			
		} else {
		
			card_toggle = "text";
			
			document.images[ "card_image" ].src = "../images/spacer.png";
			document.images[ "card_image" ].src = card_directory + card_array[ 1 ][ card_counter ];
			
			card_text.style.visibility = "hidden";
			card_image.style.visibility = "visible";
			
			if ( card_counter < card_total ){
				card_counter++;
			} else {
				card_counter = 0;
			}	
		}
		card_audio.play();
		
	}
