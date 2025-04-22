<?php
// Railway MySQL database configuration
$host = "turntable.proxy.rlwy.net";
$username = "root"; // or whatever Railway provides
$password = "OgTPeqdSiCRSPxsqrKvHPrAXilrhyjjv"; // from Railway
$database = "pinanaDB"; // the actual DB name you created
$port = 3306; // default MySQL port on Railway

// Create database connection
$conn = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
