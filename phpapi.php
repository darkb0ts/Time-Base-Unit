<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$db = "announcement_unit";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve the name
$sql ="SELECT * FROM message_announces WHERE days = 'daliy'"; // Change the table and condition as needed

// Execute the SQL query
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
  die("Error executing SQL query: " . $conn->error);
}

// Encode the result set as JSON
$json = json_encode($result->fetch_all());

// Return the JSON response to the client
header('Content-Type: application/json');
echo $json;

