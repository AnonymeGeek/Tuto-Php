<?php

	define("HOST", "localhost");
	define("DB_NAME","site-web");
	define("USER", "root");
	define("PASS", "");

	try{
		$db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS );
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                 ?><footer ><?="Connection ok"?></footer><?php
		
	} catch(PDOException $erreur){
		echo $erreur;
	}
?>
