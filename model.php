<?php
	$host = 'localhost';
	$user = 'root';
	$password = '1smartcoded';
	$dbname = 'car_registeration';
  
	//set dsn
	$dsn = 'mysql:host='.$host.';dbname='.$dbname;
	//create a pdo instance
	$pdo = new PDO($dsn, $user, $password);

	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    
	