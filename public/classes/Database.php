<?php

// Connect to database.
$mysqli = new mysqli( "localhost", "root", "", "flashcards" );

// Print out error message.
if ( $mysqli->connect_errno ) {
	//echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	echo "There was a problem connecting.  Please refresh the page or try again later.";
	exit;
}

?>