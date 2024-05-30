<?php
session_start();

$logIn = isset($_SESSION['email']) ? $_SESSION['email'] : '';

if ($logIn === "admin123@gmail.com") {
    require("./config.php");
    require("./model/DB.php");
    
    $database = new Databaseconnection($config);
    $conn = $database->dbConnection();
    
    // Query to fetch user details
    $query = "SELECT name, email, password, coursename FROM registerTable";
    
    $result = $conn->query($query);
    
    if (!$result) {
        die("Query failed: " . $conn->error);
    }
} 

?>
