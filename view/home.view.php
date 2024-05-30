<?php
session_start();
$logIn = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$username = isset($_SESSION['name']) ? $_SESSION['name'] : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogwarts University</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./view/css/style.css">
</head>

<body class="bg-gray-100">

    <!-- Navigation Bar -->
    <?php
    require "partials/navbar.php"
    ?>
    
    <!-- Main Content -->
    <div class="container mx-auto mt-10">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to Hogwarts University</h1>
            <?php if ($logIn) : ?>
                <p class="text-gray-600 mb-6">Dear <?php echo htmlspecialchars($username); ?>, View Course for better understanding...</p>
                <a href="" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">View Course</a>
            <?php else : ?>
                <p class="text-gray-600 mb-6">Dear learners, summer courses registration are open now. Please enroll if not already.</p>
                <a href="register.php" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Register Now</a>
            <?php endif ?>
        </div>
    </div>
</body>

</html>
