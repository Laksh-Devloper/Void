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
// Retrieve the username from the query parameter
$username = $_SESSION['username'];


require('config.php')
?>

<!-- HTML code for the navbar -->
<nav>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Stores</a></li>
    <li><a href="#">Products</a></li>
    <li><span>Welcome, <?php echo $username; ?></span></li>
  </ul>



<form action="register.php">
<script


 src="https://checkout.stripe.com/checkout.js" class="stripe-button"
 data-key = "pk_test_51MqcscSB4pZtb52kIdScfSbyZb05J10dYScvrHd6aothsS1sD79ybiHUTyohFjUH0JeaEdcEEyMhjIFOR0KAxUtT00IwjLmzYk"
 data-amount="500"
 data-name="VOID"
 data-description = "Void"
 data-image = "sakshinonef7cf50ab548d473783ee94a96e07852bremovebg172-4th8-200h.png"
 data-currency = "inr"

></script>
</form>
</nav>