/*
*  Zendey Flashcards
*  www.zendey.com  
*  info@zendey.com
*
*/

	function initializecard(){
		cardtoggle = "text";
		
		cardtext 		= document.getElementById( "cardtext" );
		cardimage 		= document.getElementById( "cardimage" );
		cardaudio 		= document.getElementById( "cardaudio" );
		preloadaudio 	= document.getElementById( "preloadaudio" );
		cardtext.style.visibility = "visible";
		
		cardcounter = 1;
		preloadnextcard();
		playcard();
	}

	function preloadnextcard(){
		document.images[ "preloadimage" ].src = carddirectory + cardarray[ 1 ][ cardcounter + 1 ];
		preloadaudio.setAttribute( "src", carddirectory + cardarray[ 2 ][ cardcounter + 1 ] );		
	}

	function playcard(){
		if ( cardtoggle == "text" ){
			cardtoggle = "image";
			
			cardtext.innerHTML = cardarray[ 0 ][ cardcounter ];	
			cardaudio.setAttribute( "src", carddirectory + cardarray[ 2 ][ cardcounter ] );		
			
			cardtext.style.visibility = "visible";
			cardimage.style.visibility = "hidden";
			preloadnextcard();
			
		} else {
		
			cardtoggle = "text";
			
			document.images[ "cardimage" ].src = "../images/spacer.png";
			document.images[ "cardimage" ].src = carddirectory + cardarray[ 1 ][ cardcounter ];
			
			cardtext.style.visibility = "hidden";
			cardimage.style.visibility = "visible";
			
			if ( cardcounter < cardtotal ){
				cardcounter++;
			} else {
				cardcounter = 0;
			}	
		}
		cardaudio.play();
		
	}
