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
	
	
	if (isset($_POST['save']))
	{
		$bill_no = $_POST['bill_no'];
		$pid = $_POST['pid'];
		$patient_type = $_POST['patient_type'];
		$doctor_charge = $_POST['doctor_charge'];
		$medicine_charge = $_POST['medicine_charge'];
		$room_charge = $_POST['room_charge'];
		$oprtn_charge = $_POST['oprtn_charge'];
		$no_of_days = $_POST['no_of_days'];
		$nursing_charge = $_POST['nursing_charge'];
		$advance = $_POST['advance'];
		$lab_charge = $_POST['lab_charge'];
		$bill = $_POST['bill'];
		
		$mysql= "INSERT INTO bill(bill_no, pid, patient_type, doctor_charge, medicine_charge,room_charge, oprtn_charge, no_of_days, nursing_charge, advance,lab_charge,bill) VALUES ('$bill_no', '$pid','$patient_type','$doctor_charge','$medicine_charge','$room_charge','$oprtn_charge','$no_of_days','$nursing_charge','$advance','$lab_charge','$bill')";
		mysqli_query($connection,$mysql);
		echo "One record inserted successfully";
	}
	echo "<br><br><br>";
	echo '<a href="home18.html"> Home18 </a>';
	mysqli_close($connection);
?>