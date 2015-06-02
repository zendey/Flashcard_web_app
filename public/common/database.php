<?php	
	require ( dirname(__FILE__) . "../../../custom/config.php" );
	require ( dirname(__FILE__) . "../../../src/library/module/calliope_database/class/database_class.php" );
	require ( dirname(__FILE__) . "../../../src/library/module/calliope_database/class/data_source_name_class.php" );
	
	$database = new blastpad\database( $database_connection );

?>