<?php
$dbhost="localhost"; //database location
$dbuser="root"; //database username
$dbpassword=""; //database password
$dbname="foodstory"; //database name

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}