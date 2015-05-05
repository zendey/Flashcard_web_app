<?php

	function validate_name( $user_input ){
		$user_input = sanitize_data( $user_input );
		if ( !preg_match( "/^[a-zA-Z ]*$/", $user_input ) ) {
		  $message .= "<br />Only letters and white space allowed. "; 
		}
		return $user_input;
	}

	function sanitize_data( $user_input ) {
	  $user_input = trim( $user_input );
	  $user_input = stripslashes( $user_input );
	  $user_input = htmlspecialchars( $user_input );
	  return $user_input;
	}
	
	function check_required( $user_input, $input_type ){
		$message = "";
		if ( empty( $user_input ) ){
			$message .= "<br />Please enter " . $input_type . ".";
		}
		return $message;
	}	

?>