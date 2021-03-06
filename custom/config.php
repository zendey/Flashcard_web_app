<?php
/**
 * 
 * Basic configuration details for your server.
 *
 * (Advanced configuration should be placed in the "custom/config/config_advanced.php" file.)
 * (To set the database login for other server environments (development server, testing server, etc.) please go to the custom/config/database folder.)
 *
 */
	
/**
 *
 * Basic database connection details.
 * 
 * Please enter the database login details for your PRODUCTION server here.
 * 
 * The supported databases are: 
		sqlite 		(default)
		mysql
		pgsql 		(postgresql)
		cubrid 
		sqlsrv 		(Microsoft SQL Server)
		firebird
		ibm
		informix
		oci 		(oracle)
		odbc 		(odbc or db2)
		4D
 */

	$database_connection[ "production" ] = [
		"database_driver" 	=> "mysql",		
		"server" 			=> "127.0.0.1",					
		"port"				=> "",							
		"database" 			=> "flashcard",
		"username" 			=> "root",
		"password" 			=> "",
	];
	
/*
 *
 * Please go to the "custom/config/database" folder for other server environments.
 *
 */
?>