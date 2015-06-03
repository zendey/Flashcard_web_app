<?php

	require( "../common/input_validation.php" );
	require( "../common/database.php" );

	$sql = "select app_directory, deck_file
		from deck, app_deck, app
		where deck.deck_id = app_deck.deck_id and
		app.app_id = app_deck.app_id and
		app_deck.deck_id = :deck_id
		order by deck.deck_id desc";
	$option[ "parameter" ] = [ ":deck_id" => sanitize_data( $_GET[ "deck_id" ] ) ];
	$result = $database -> fetch( $sql, $option );	

	$column = 0;

	$card_directory = "../app/"  . $result [ 0 ][ "app_directory" ] . "/card/";
	$card_file_path = $card_directory .  $result [ 0 ][ "deck_file" ];
	$card_file = fopen( $card_file_path, "r" ) or die( "Unable to open file!" );
	$card_number = 0;
	
	$card_text_array = "";
	$card_image_array = "";
	$card_sound_array = "";	
	
	while( !feof( $card_file )) {
		$card_line = fgets( $card_file );
		$card_array[ $card_number ] = str_getcsv( $card_line, "\t" );
		$card_number++;
	}
	fclose( $card_file );
	
	// Change order of the cards in the deck to random.
	shuffle( $card_array );
	foreach ( $card_array as $card_element ) {
		$card_text_array .= "'" . $card_element[ 0 ] . "', ";
		$card_image_array .= "'" . $card_element[ 1 ] . "', ";
		$card_sound_array .= "'" . $card_element[ 2 ] . "', ";
	}
	
?>