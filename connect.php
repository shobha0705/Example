<?php	

// Inialize session
	session_start();	
function opencon()
{
	
	// All the data entered by user stored in variables below
	$server = "localhost";
	$user = "root";
	$pass = "";

	// connection variable initialization
	$connection = mysqli_connect($server, $user, $pass);	
	if (!$connection)
		die("Connection failed: " . mysqli_connect_error());
	return $connection;
}
function closecon($connection)
{

	$connection->close();
}
function dbselect()
{
	$connection=opencon();
	$db = mysqli_select_db($connection,"hospital");
	if (!$db)
		die("Database selection failed: " . mysqli_connect_error());
	return $db;
}
?>