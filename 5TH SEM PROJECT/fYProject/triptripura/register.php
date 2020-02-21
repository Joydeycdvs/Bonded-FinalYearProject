<?php
	require_once('library.php');
	global $lib;
	$lib=new library();
	$lib->connect();

	extract($_POST);
// $_POST['$email'] 
	// $email using extract we can access directly
	//echo $email;
	//echo $psw."<br><br>";
$qury="INSERT INTO `registerq`(`fname`,`email`,`psw`) VALUES('$fname','$email','$password')";
	$lib1=$lib->executeQuery($qury)->pg_fetch_all_columns()
echo $lib1;
echo "No of rows inserted  = ".settype($lib1, "string");
echo "No of rows inseted   = ".($lib1);
//header("Location:index.html");


?>

