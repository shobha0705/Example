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
	
	

	if (isset($_POST['update']))
	{
		$pid = $_POST['pid'];
		$room_no = $_POST['room_no'];
		$date_of_adm = $_POST['date_of_adm'];
		$date_of_dis = $_POST['date_of_dis'];
		$advance = $_POST['advance'];
		$labno = $_POST['labno'];
		
		
		$mysql= "UPDATE inpatient set room_no='$room_no',date_of_adm='$date_of_adm',date_of_dis='$date_of_dis',advance='$advance',labno='$labno' where pid='$pid'";
		mysqli_query($connection,$mysql);
		echo "One record updated successfully";
	}
	echo "<br><br><br>";
	echo '<a href="home10.html"> Home10 </a>';
	mysqli_close($connection);
?>