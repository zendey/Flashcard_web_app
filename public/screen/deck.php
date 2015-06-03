<!DOCTYPE html>
<head>
	<title>Flashcards</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Muli" rel="stylesheet" type="text/css">
</head>

<body>

<div align="center">
	<p>&nbsp;</p>
	<h1>Please choose a category:</h1>

	<p>&nbsp;</p>
	<div>

		<?php
		require( "../common/database.php" );
		require( "../common/input_validation.php" );

		if ( empty( $_GET[ "app_id" ] ) ){
			$app_id = 3;
		}else{	
			$app_id = sanitize_data( $_GET[ "app_id" ] );
		}

		$sql = "select *
			from deck, app_deck, app
			where deck.deck_id = app_deck.deck_id and
			app.app_id = app_deck.app_id and
			app_deck.app_id = :app_id
			order by app_deck.app_deck_order asc";
	$option[ "parameter" ] = [ ":app_id" => $app_id ];
	$result = $database -> fetch( $sql, $option );
	
	$column = 0;
	echo "<table><tr>";
	foreach ( $result as $key => $value ){
		echo "<td class='normal_text' align='center'>";
		echo "<a href='../screen/card.php?app_id=" . $app_id . "&deck_id=" . $result[ $key ][ "deck_id" ] . "'>";
		echo "<img src='../app/"  . $result[ $key ][ "app_directory" ] . "/card/" . $result[ $key ][ "deck_directory" ] . "/" . $result[ $key ][ "deck_image" ] . "' width='300'>";
		echo "</a><br />";
		echo "<strong>" . $result[ $key ][ "deck_name" ] . "</strong><br />";
		echo "</td>";
		if ( $column == 2 ){
			echo "</tr><tr>";
		}
		$column++;
	}
	echo "</tr></table>";
	
?>
	</div>
</div>
<?php include( "footer.php" ); ?>	
</body>
</html>