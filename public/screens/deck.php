<!DOCTYPE html>
<head>
	<title>Baby and Toddler Flashcards Free</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
</head>

<body>

<!--div class="top-bar">
	<span class="top-menu">&nbsp;</span>
</div-->

<div align="center">
	<p>&nbsp;</p>
	<h1>Please choose a category:</h1>

	<p>&nbsp;</p>
	<div>

		<?php
		require( "../classes/Database.php" );
		require( "../common/input-validation.php" );

		if ( empty( $_GET[ "app_id" ] ) ){
			$app_id = 3;
		}else{	
			$app_id = sanitize_data( $_GET[ "app_id" ] );
		}

		$sql = "select *
			from deck, app_deck, app
			where deck.deck_id = app_deck.deck_id and
			app.app_id = app_deck.app_id and
			app_deck.app_id = " . $app_id . "
			order by app_deck.app_deck_order asc";

			$column = 0;

			echo "<table><tr>";
			if ( $result = $mysqli->query( $sql ) ) {
				while ( $row = $result->fetch_array() ) {

					echo "<td class='normal-text' align='center'>";
					echo "<a href='../screens/card.php?app_id=" . $app_id . "&deck_id=" . $row[ "deck_id" ] . "'>";
					echo "<img src='../apps/"  . $row[ "app_directory" ] . "/cards/" . $row[ "deck_directory" ] . "/" . $row[ "deck_image" ] . "' width='300'>";
					echo "</a><br />";
					echo "<strong>" . $row[ "deck_name" ] . "</strong><br />";
					echo "</td>";
					if ( $column == 2 ){
						echo "</tr><tr>";
					}
					$column++;
				}
				mysqli_free_result( $result );
			}
			mysqli_close( $mysqli );
			
			echo "</tr></table>";
		?>
	</div>
</div>
<?php include( "footer.php" ); ?>	
</body>
</html>