<?php	
	// Inialize session
	session_start();

	// All the data entered by user stored in variables below
	$server = "localhost";
	$user = "root";
	$pass = "";

	// connection variable initialization
	$connection = mysqli_connect($server, $user, $pass);	
	if (!$connection)
		die("Connection failed: " . mysqli_connect_error());

	$db = mysqli_select_db($connection,"hospital");
	if (!$db)
		die("Database selection failed: " . mysqli_connect_error());

	$room_no = "";
	$room_type = "";
	$status = "";
	
	
	

	if (isset($_POST['delete']))
	{
		$room_no = $_POST['room_no'];
		$mysql= "DELETE from room where room_no='$room_no'";
		mysqli_query($connection,$mysql);
		echo "One record deleted successfully";
	}
	echo "<br><br><br>";
	echo '<a href="home14.html"> Home14 </a>';
	mysqli_close($connection);
?>