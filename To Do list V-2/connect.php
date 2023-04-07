<?php
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$mobile = $_POST['mobile'];

	// Database connection
	$conn = new mysqli('localhost','root','','data');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name, gender, email, password, mobile) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssi", $name,$gender, $email, $password, $mobile);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
        header('Location: success.html');
		$stmt->close();
		$conn->close();
	}
?>