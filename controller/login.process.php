<?php 
session_start();

require("../config.php");
require("../model/DB.php");

$database = new Databaseconnection($config);
$conn = $database->dbConnection();

if (isset($_POST["submit"])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sqlQuery = "SELECT * FROM `registerTable` WHERE `email` = '$email'";
    $result = mysqli_query($conn, $sqlQuery);

    if (mysqli_num_rows($result) > 0) {
        
        $user = mysqli_fetch_assoc($result);
        $_SESSION['email']=$email;
       
        
        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Password is correct, redirect to index
            header("Location: ../index.php");
            exit();
        } else {
            // Password is incorrect
            echo "Incorrect password.";
        }
    } else {
        // No user found with that email
        echo "No user found with that email address.";
    }
}

mysqli_close($conn);
?>
