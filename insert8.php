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

	$labno = "";
	$pid = "";
	$weight = "";
	$doctorid = "";
	$date = "";
	$category = "";
	$patient_type = "";
	$amount = "";
	
	
	
	if (isset($_POST['save']))
	{
		$labno = $_POST['labno'];
		$pid = $_POST['pid'];
		$weight = $_POST['weight'];
		$doctorid = $_POST['doctorid'];
		$date = $_POST['date'];
		$category = $_POST['category'];
		$patient_type = $_POST['patient_type'];
		$amount = $_POST['amount'];
		
		
		$mysql= "INSERT INTO lab(labno, pid, weight, doctorid, date, category, patient_type, amount) VALUES ('$labno', '$pid','$weight','$doctorid','$date','$category','$patient_type','$amount')";
		mysqli_query($connection,$mysql);
		echo "One record inserted successfully";
	}
	echo "<br><br><br>";
	echo '<a href="home8.html"> Home8 </a>';
	mysqli_close($connection);
?>