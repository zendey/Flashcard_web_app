<?php

	require( "../common/input-validation.php" );
	require( "../classes/Database.php" );

	$sql = "select app_directory, deck_file
		from deck, app_deck, app
		where deck.deck_id = app_deck.deck_id and
		app.app_id = app_deck.app_id and
		app_deck.deck_id = " . sanitize_data( $_GET[ "deck_id" ] ) . "
		order by deck.deck_id desc";

	$result = $mysqli->query( $sql );
	$column = 0;
	
	$row = $result->fetch_assoc();

	$carddirectory = "../apps/"  . $row[ "app_directory" ] . "/cards/";
	$cardfilepath = $carddirectory . $row[ "deck_file" ];
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
		//echo $cardelement[ 0 ] . "<br />";
		$cardtextarray .= "'" . $cardelement[ 0 ] . "', ";
		$cardimagearray .= "'" . $cardelement[ 1 ] . "', ";
		$cardsoundarray .= "'" . $cardelement[ 2 ] . "', ";
	}
	
?>