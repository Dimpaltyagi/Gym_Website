<?php
	$firstName = $_POST['firstName'];
	$email = $_POST['email'];
	$phnumber = $_POST['phnumber'];
    $trnumber = $_POST['trnumber'];
    $banumber = $_POST['banumber'];
    // $formfile = $_POST['formFile'];
   

	// Database connection
	$conn = new mysqli('localhost','root','','trainer');
	 if($conn->connect_error){
	 	echo "$conn->connect_error";
	 	die("Connection Failed : ". $conn->connect_error);
	 } else {
	 	$stmt = $conn->prepare("insert into receipt(firstName, email, phnumber, trnumber, banumber) values(?, ?, ?, ?, ?)");
	 	$stmt->bind_param("ssiii", $firstName, $email, $phnumber, $trnumber, $banumber);
		 $execval = $stmt->execute();
	 	//  echo $execval;
	 	//  echo "Registration successfully...";
	 	$stmt->close();
	 	$conn->close();
	 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="contact.css" />
</head>
<body>
	<h1 >YOUR SLOOT BOOKING PROCESS IS DONE </h1>
	<h3> THANKS FOR CONNECTING WITH US, YOU WILL GET A LINK AND A PASSKEY ON YOUR REGISTERED NUMBER TO JOIN YOUR SESSION</h3>
	<div class="back"><a href="index.html">Back To Home</a></div>
</body>
</html>