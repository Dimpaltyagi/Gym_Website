<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	// $password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','g');
	 if($conn->connect_error){
	 	echo "$conn->connect_error";
	 	die("Connection Failed : ". $conn->connect_error);
	 } else {
	 	$stmt = $conn->prepare("insert into fit(firstName, lastName, gender, email, number) values(?, ?, ?, ?, ?)");
	 	$stmt->bind_param("ssssi", $firstName, $lastName, $gender, $email, $number);
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
	<h1 >THANKS FOR CONNECT WITH US SUCCESSFULLY</h1>
	<h3> OUR TEAM CONTACT WITH YOU AS SOON AS POSSSIBLE</h3>
	<div class="back"><a href="index.html">Back To Home</a></div>
</body>
</html>