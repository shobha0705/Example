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
	
	
	$mysql = "SELECT * FROM lab";
	$result = mysqli_query($connection,$mysql);
	if ($result->num_rows > 0) 
	{
		// output data of each row
    		while($row = $result->fetch_assoc()) 
		{
        		echo "labno: " . $row["labno"]. " - pid: " . $row["pid"]. " - weight:" . $row["weight"]. " - doctorid:" . $row["doctorid"] ."-date:".$row["date"]."-category:".$row["category"]."-patient_type:".$row["patient_type"]."-amount:".$row["amount"]. "<br>";
    		}
	} 
	else 
	{
    		echo "0 results";
	}
	echo "<br><br><br>";
	echo '<a href="home8.html"> Home8 </a>';
	mysqli_close($connection);
?>