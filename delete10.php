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

	$pid = "";
	$room_no = "";
	$date_of_adm = "";
	$date_of_dis = "";
	$advance = "";
	$labno = "";
	$patient_type = "";
	
	

	if (isset($_POST['delete']))
	{
		$labno = $_POST['labno'];
		$mysql= "DELETE from inpatient where labno='$labno'";
		mysqli_query($connection,$mysql);
		echo "One record deleted successfully";
	}
	echo "<br><br><br>";
	echo '<a href="home10.html"> Home10 </a>';
	mysqli_close($connection);
?>