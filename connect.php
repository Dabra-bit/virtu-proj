<?php

require_once 'dbconfig.php';

function connect($host, $db, $user, $password)
{
	$dsn = "mysql:host=$host;dbname=$db;port=3306;charset=UTF8";

	try {
		$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

		return new PDO($dsn, $user, $password, $options);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}

return connect($host, $db, $user, $pass);