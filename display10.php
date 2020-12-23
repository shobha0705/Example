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
	
	
	$mysql = "SELECT * FROM inpatient";
	$result = mysqli_query($connection,$mysql);
	if ($result->num_rows > 0) 
	{
		// output data of each row
    		while($row = $result->fetch_assoc()) 
		{
        		echo "pid: " . $row["pid"]. " - room_no: " . $row["room_no"]. " - date_of_adm:" . $row["date_of_adm"]. " - date_of_dis:" . $row["date_of_dis"] ."-advance:".$row["advance"]."-labno:".$row["labno"]. "<br>";
    		}
	} 
	else 
	{
    		echo "0 results";
	}
	echo "<br><br><br>";
	echo '<a href="home10.html"> Home10 </a>';
	mysqli_close($connection);
?>