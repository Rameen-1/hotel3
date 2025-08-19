<?php
// Start session for user login/signup functionality
session_start();
 
// Enable full error reporting during development
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
// Database connection credentials
$host = "localhost";
$db = "db4xo4rriaccdi";
$user = "ufgzffdwyusgm";
$pass = "ifqlkpgc9quz";
 
// Create database connection
$conn = new mysqli($host, $user, $pass, $db);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
 
