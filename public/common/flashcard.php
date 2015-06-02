<?php

	require( "../common/input_validation.php" );
	require( "../common/database.php" );

	$sql = "select app_directory, deck_file
		from deck, app_deck, app
		where deck.deck_id = app_deck.deck_id and
		app.app_id = app_deck.app_id and
		app_deck.deck_id = " . sanitize_data( $_GET[ "deck_id" ] ) . "
		order by deck.deck_id desc";

	$result = $database -> fetch( $sql );		

	$column = 0;

	$carddirectory = "../apps/"  . $result [ 0 ][ "app_directory" ] . "/cards/";
	$cardfilepath = $carddirectory .  $result [ 0 ][ "deck_file" ];
	$cardfile = fopen( $cardfilepath, "r" ) or die( "Unable to open file!" );
	$cardnumber = 0;
	
	$cardtextarray = "";
	$cardimagearray = "";
	$cardsoundarray = "";	
	
	while( !feof( $cardfile )) {
		$cardline = fgets( $cardfile );
		$cardarray[ $cardnumber ] = str_getcsv( $cardline, "\t" );
		$cardnumber++;	
	}
	fclose( $cardfile );
	
	// Change order of the cards in the deck to random.
	shuffle( $cardarray );
	foreach ( $cardarray as $cardelement ) {
		$cardtextarray .= "'" . $cardelement[ 0 ] . "', ";
		$cardimagearray .= "'" . $cardelement[ 1 ] . "', ";
		$cardsoundarray .= "'" . $cardelement[ 2 ] . "', ";
	}
	
?>