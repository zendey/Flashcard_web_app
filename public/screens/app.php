<!DOCTYPE html>
<head>
	<title>Zendey Flashcards Free</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
</head>
<body>

<div align="center">
	<p>&nbsp;</p>
	<h1>Choose an app:</h1>

	<p>&nbsp;</p>

	<?php

	require( "../classes/Database.php" );
	require( "../common/input-validation.php" );

	if ( empty( $_GET[ "site_id" ] ) ){
		$site_id = 1;
	}else{	
		$site_id = sanitize_data( $_GET[ "site_id" ] );
	}

	$sql = "select * from app 
		where site_id = " . $site_id . " 
		order by app_order asc";
		
		if ( $result = $mysqli->query( $sql ) ) {
			while ( $row = $result->fetch_array() ) {

			echo "<a href='../screens/deck.php?app_id=" . $row[ "app_id" ] . "'>";
			echo "<img src='../apps/" . $row[ "app_directory" ] . "/" . $row[ "app_image" ] . "'>";
			echo "</a>";
			}
			mysqli_free_result( $result );
		}
		mysqli_close( $mysqli );

	?>

</div>
<?php include( "footer.php" ); ?>	
</body>
</html>