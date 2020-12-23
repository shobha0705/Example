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
	
	
	$mysql = "SELECT * FROM bill";
	$result = mysqli_query($connection,$mysql);
	if ($result->num_rows > 0) 
	{
		// output data of each row
    		while($row = $result->fetch_assoc()) 
		{
        		echo "bill_no: " . $row["bill_no"]. " - pid: " . $row["pid"]. " - patient_type:" . $row["patient_type"]. " - doctor_charge:" . $row["doctor_charge"] ."-medicine_charge:".$row["medicine_charge"]."-room_charge:".$row["room_charge"]."-oprtn_charge:".$row["oprtn_charge"]."-no_of_days:".$row["no_of_days"]."-nursing_charge:".$row["nursing_charge"]."-advance:".$row["advance"]."-advance:".$row["advance"]."-lab_charge:".$row["lab_charge"]."-bill:".$row["bill"]. "<br>";
    		}
	} 
	else 
	{
    		echo "0 results";
	}
	echo "<br><br><br>";
	echo '<a href="home18.html"> Home18 </a>';
	mysqli_close($connection);
?>