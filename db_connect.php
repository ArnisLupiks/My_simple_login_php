<?php
	define("HOST", "localhost");
	define("DBUSER", "root");
	define("PASS", "");
	define("DB", "login");

	############## creating connection with mysql ##########
	$conn = mysql_connect(HOST, DBUSER, PASS);
	if (!$conn)
	{
		//if connection failed quit the script
		die('Could not connect !<br /> Please contact the site\'s administrator.');
	}
	$db = mysql_select_db(DB);
	if (!$db)
	{
		//cannot connect to the database
		die('Could not connect to the database !<br /> Please contact the site\'s administrator');
	}

?>
