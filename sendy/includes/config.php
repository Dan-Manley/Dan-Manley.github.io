<?php 
	//----------------------------------------------------------------------------------//	
	//								COMPULSORY SETTINGS
	//----------------------------------------------------------------------------------//
	
	/*  Set the URL to your Sendy installation (without the trailing slash) */
	define('APP_PATH', 'http://www.onewaylancaster.co.uk/sendy');
	
	/*  MySQL database connection credentials  */
	$dbHost = 'onewaylancaster.co.uk'; //MySQL Hostname
	$dbUser = 'onewayla_dan'; //MySQL Username
	$dbPass = 'KY06vctyaris'; //MySQL Password
	$dbName = 'onewayla_ProudToFight'; //MySQL Database Name
	
	
	//----------------------------------------------------------------------------------//	
	//								  OPTIONAL SETTINGS
	//----------------------------------------------------------------------------------//	
	
	/* 
		Change the database character set to something that supports the language you'll
		be using. Example, set this to utf16 if you use Chinese or Vietnamese characters
	*/
	$charset = 'utf8';
	
	/*  Set this if you use a non standard MySQL port.  */
	$dbPort = 3306;	
	
	/*  Domain of cookie (99.99% chance you don't need to edit this at all)  */
	define('COOKIE_DOMAIN', '');
	
	//----------------------------------------------------------------------------------//
?>