<?php 

session_start();
require("../config.php");
require("../model/DB.php");

$database = new Databaseconnection($config);
$conn = $database->dbConnection();

if (isset($_POST["submit"])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $coursename = mysqli_real_escape_string($conn, $_POST['coursename']);

    $encrypted_pass = password_hash($password, PASSWORD_DEFAULT);

    // Corrected SQL query
    $sqlQuery = "INSERT INTO `registerTable` (`name`, `email`, `password`, `coursename`) VALUES ('$name', '$email', '$encrypted_pass', '$coursename')";
    $result = mysqli_query($conn, $sqlQuery);

    if ($result) {
        $_SESSION['name']=$name;
        // Store name and email in session
        
        // Redirection should occur before any output
        header('Location: ../login.php');
        exit();
    } else {
        echo "Error: " . $sqlQuery . "<br>" . $conn->error;
    }
}

$conn->close();
?>
