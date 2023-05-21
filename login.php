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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Sanitize input data
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	// Query database to check if user exists
	$stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
	$stmt->bind_param("ss", $username, $password);
	$stmt->execute();
	$result = $stmt->get_result();

	if ($result->num_rows == 1) {
	  // If valid, set session variable to indicate that user is logged in
	  $_SESSION['loggedin'] = true;
	  $_SESSION['username'] = $username;

	  // Redirect to homepage
	  header('Location: store.php');
	  exit;
	} else {
	  // If not valid, display error message
	  $error = "Invalid username or password.";
	}

	mysqli_close($conn);
} else {
	// If invalid, show error message
	echo 'Invalid username or password';
}

?>