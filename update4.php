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

	$doctorid = "";
	$doctorname = "";
	$dept = "";

	if (isset($_POST['update']))
	{
		$doctorid = $_POST['doctorid'];
		$doctorname = $_POST['doctorname'];
		$dept = $_POST['dept'];
		
		
		
		$mysql= "UPDATE doctor set doctorname='$doctorname',dept='$dept' where doctorid='$doctorid'";
		mysqli_query($connection,$mysql);
		echo "One record updated successfully";
	}
	echo "<br><br><br>";
	echo '<a href="home4.html"> Home4 </a>';
	mysqli_close($connection);