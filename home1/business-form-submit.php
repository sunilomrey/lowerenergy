<?php
	error_reporting(0);

	$con=mysqli_connect("localhost","root","Paras123!@#","project");
	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	

	$CompanyName = $_POST['CompanyName'];
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Phone = $_POST['Phone'];
	$Email = $_POST['Email'];
	$ZipCode = $_POST['ZipCode'];
	$Bill = $_POST['Bill'];
	$LowerOurEnergy = $_POST['LowerOurEnergy'];
	
	$sql = "insert into accounts (corporation_name, contact_first_name, contact_last_name, contact_email, contact_phone,billing_zipcode,load_profile,lead_source) values ('$CompanyName', '$FirstName', '$LastName', '$Email', $Phone, $ZipCode,'$Bill','$LowerOurEnergy')";
	mysqli_query($con, $sql);
	echo $sql;
	echo "success";
?>
