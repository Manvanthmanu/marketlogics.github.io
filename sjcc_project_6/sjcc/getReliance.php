<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "log_in_info";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) 
	{
		echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
	}
	$sql = "SELECT * FROM stock_info WHERE company_name = 'Reliance'";
	$Reliance = $conn->query($sql)->fetch_assoc();
	$Reliance_name = $Reliance['company_name'];
	$Reliance_remaining = $Reliance['remaining_stocks'];
	$Reliance_price = $Reliance['stock_price'];
?>