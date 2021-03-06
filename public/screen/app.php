<!DOCTYPE html>
<head>
	<title>Zendey Flashcards Free</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Muli" rel="stylesheet" type="text/css">
</head>
<body>

<div align="center">
	<p>&nbsp;</p>
	<h1>Choose an app:</h1>

	<p>&nbsp;</p>

	<?php

	require( "../common/database.php" );
	require( "../common/input_validation.php" );

	if ( empty( $_GET[ "site_id" ] ) ){
		$site_id = 1;
	}else{	
		$site_id = sanitize_data( $_GET[ "site_id" ] );
	}

	$sql = "select * from app 
		where site_id = :site_id
		order by app_order asc";
	$option[ "parameter" ] = [ ":site_id" => $site_id ];
	$result = $database -> fetch( $sql, $option );
	
	foreach ( $result as $key => $value ){
		echo "<a href='../screen/deck.php?app_id=" . $result[ $key ][ "app_id" ] . "'>";
		echo "<img src='../app/" . $result[ $key ][ "app_directory" ] . "/" . $result[ $key ][ "app_image" ] . "'>";
		echo "</a>";
	}

	?>

</div>
<?php include( "footer.php" ); ?>	
</body>
</html>