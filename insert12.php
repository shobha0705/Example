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
	$date = "";
	$labno = "";
	
	
	
	if (isset($_POST['save']))
	{
		$pid = $_POST['pid'];
		$date = $_POST['date'];
		$labno = $_POST['labno'];
		
		
		$mysql= "INSERT INTO outpatient(pid, date, labno) VALUES ('$pid', '$date','$labno')";
		mysqli_query($connection,$mysql);
		echo "One record inserted successfully";
	}
	echo "<br><br><br>";
	echo '<a href="home12.html"> Home12 </a>';
	mysqli_close($connection);
?>