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

	$bill_no = "";
	$pid = "";
	$patient_type = "";
	$doctor_charge = "";
	$medicine_charge = "";
	$room_charge = "";
	$oprtn_charge = "";
	$no_of_days = "";
	$nursing_charge = "";
	$advance = "";
	$lab_charge = "";
	$bill = "";

	if (isset($_POST['delete']))
	{
		$bill_no = $_POST['bill_no'];
		$mysql= "DELETE from bill where bill_no='$bill_no'";
		mysqli_query($connection,$mysql);
		echo "One record deleted successfully";
	}
	echo "<br><br><br>";
	echo '<a href="home18.html"> Home18 </a>';
	mysqli_close($connection);
?>