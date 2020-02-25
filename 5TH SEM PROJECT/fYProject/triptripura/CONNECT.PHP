<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db     = "triptripuradb";

	$conn = new mysqli ( $dbhost,$dbuser,$dbpass,$db);

	//check connection

	if($conn->connect_error)
	{
		echo "connection failed";

	}

	else{
		echo " connection successful";
	}


?>