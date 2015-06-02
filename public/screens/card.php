<!DOCTYPE html>
<head>
	<title>Zendey Baby Flashcards Free</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link rel="stylesheet" href="../css/card.css" type="text/css">
	<script src="../js/flashcard.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
</head>	
<body onload="initializecard();">

<div id="cardmain">
	<?php require( "../common/flashcard.php" ); ?>

	<script>
		var carddirectory = "<?php echo $carddirectory; ?>";
		
		var cardarray = [];	
		cardarray[ 0 ] = [ <?php echo $cardtextarray; ?> ];
		cardarray[ 1 ] = [ <?php echo $cardimagearray; ?> ];
		cardarray[ 2 ] = [ <?php echo $cardsoundarray; ?> ];

		var cardtotal = cardarray[ 0 ].length - 1;
	</script>

		<div id="cardimagediv">
			<img class="cardimage" id="cardimage" src="../images/spacer.png" onclick="playcard();">
		</div>	

		<a href="#" onclick="playcard();">
		<div id="cardtextdiv">	
			<div id="cardtext">
				<span style="font-size: 16px;"><strong>Loading...</strong></span>
			</div>
		</div>
		</a>
		
	<audio id="cardaudio">
		<source type="audio/mpeg">
		Your browser does not support audio.  
		Please upgrade to the latest version of your browser to hear the audio.
	</audio>

	<!-- Preload next card. -->
	<img class="preloadimage" id="preloadimage" src="../images/spacer.png" width="0" height="0">
	<audio id="preloadaudio"><source type="audio/mpeg"></audio>

</div>
<?php include( "footer.php" ); ?>	
</body>
</html>