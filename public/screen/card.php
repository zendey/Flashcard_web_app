<!DOCTYPE html>
<head>
	<title>Flashcards</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link rel="stylesheet" href="../css/card.css" type="text/css">
	<script src="../javascript/flashcard.js"></script>
	<link href="http://fonts.googleapis.com/css?family=Muli" rel="stylesheet" type="text/css">
</head>	
<body onload="initialize_card();">

<div id="card_main">
	<?php require( "../common/flashcard.php" ); ?>

	<script>
		var card_directory = "<?php echo $card_directory; ?>";
		
		var card_array = [];	
		card_array[ 0 ] = [ <?php echo $card_text_array; ?> ];
		card_array[ 1 ] = [ <?php echo $card_image_array; ?> ];
		card_array[ 2 ] = [ <?php echo $card_sound_array; ?> ];

		var card_total = card_array[ 0 ].length - 1;
	</script>

		<div id="card_image_div">
			<img class="card_image" id="card_image" src="../images/spacer.png" onclick="play_card();">
		</div>	

		<a href="#" onclick="play_card();">
		<div id="card_text_div">	
			<div id="card_text">
				<span style="font-size: 16px;"><strong>Loading...</strong></span>
			</div>
		</div>
		</a>
		
	<audio id="card_audio">
		<source type="audio/mpeg">
		Your browser does not support audio.  
		Please upgrade to the latest version of your browser to hear the audio.
	</audio>

	<!-- Preload next card. -->
	<img class="preload_image" id="preload_image" src="../images/spacer.png" width="0" height="0">
	<audio id="preload_audio"><source type="audio/mpeg"></audio>

</div>
<?php include( "footer.php" ); ?>	
</body>
</html>