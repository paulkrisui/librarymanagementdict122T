<?php
// Display errors ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL); 
 
// Database connection details 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "library_management_system"; 
 
// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname);  
// Check connection if ($conn->connect_error) {     die("Connection failed: " . $conn->connect_error); 
} function create_tables($conn) { 
    // SQL to create tables 
    $sql = " 
    CREATE TABLE IF NOT EXISTS users (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255) NOT NULL,email VARCHAR(255) NOT NULL UNIQUE,         password VARCHAR(255) NOT NULL 
    ); 
 
    CREATE TABLE IF NOT EXISTS books (     id INT AUTO_INCREMENT PRIMARY KEY,title VARCHAR(255) NOT NULL,         author VARCHAR(255) NOT NULL,         isbn VARCHAR(13) NOT NULL UNIQUE,         publication_year INT 