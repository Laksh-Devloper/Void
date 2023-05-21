<?php
session_start();

// Database configuration
$host = 'localhost'; // Hostname
$user = 'root'; // Database username
$password = ''; // Database password
$database = 'void'; // Database name
$table = 'users'; // Table name

// Connect to the database
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

  // Sanitize input data
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];


  $query = "INSERT INTO users (username, password, fullname, email, age, gender)
  VALUES ('$username', '$password', '$fullname', '$email', '$age', '$gender')";

if (mysqli_query($conn, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>