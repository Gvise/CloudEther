<?php
	//Start a session as this will be necessary on virtually every page
	session_start();
	
	define("RESOURCE_DIR", __DIR__ . "/../");
	define("CREATE_HUB_SCRIPT", __DIR__ . "/../scripts/createHub.sh");
	define("DELETE_HUB_SCRIPT", __DIR__ . "/../scripts/deleteHub.sh");
	define("PUBLIC_DIR", __DIR__ . "/../../public");

	//Declare the database connection and session configuration
	$GLOBALS['config'] = array(
		'db' => array(
			'type' => 'mysql',
			'host' => '127.0.0.1',
			'username' => 'seuser',
			'password' => '6bX&7UI$ysq!jJUB',
			'db_name' => 'softethermanager'
		),

		'email' => array(
			// The from email account
			'from' => '',
			'to' => '',
			'username' => '',
			'password' => '',
			'fromName' => '',
			'server' => '',
			'port' => '',
			// Either NA, TLS, SSL
			'encryption' => 587,
			'emailSubject' => ''
		),

		'security' => array(
			'passwordLength' => 8,
			// You can generate a new key here:
			// http://jeffreybarke.net/tools/codeigniter-encryption-key-generator/
			'encryptionKey' => '6sGRaFoC76FLamNFXc4OVy3FobL9K8DV'
		)
	);

	//The spl_autoload_register will automatically include the proper class file when an object is declared of that class
	spl_autoload_register(function($class) {
		require_once (RESOURCE_DIR . 'classes/' . $class . '.php');
	});

	//Function to sanitize user input
	require_once(RESOURCE_DIR . 'functions/sanitize.php');

	//Function to start the database connection
	require_once(RESOURCE_DIR . 'functions/startPDOConnection.php');

	//Functio to send emails
	//require_once(RESOURCE_DIR . 'functions/sendEmail.php');