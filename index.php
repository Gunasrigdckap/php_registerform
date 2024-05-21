<?php
session_start();
$logIn = (isset($_SESSION['email']));
$username = (isset($_SESSION['name'])) ? $_SESSION['name'] : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogwarts University</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-gray-100">
    <!-- Navigation Bar -->
    <nav class="bg-white shadow">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <div>
                <a href="#" class="text-2xl font-bold text-gray-800 lg:text-3xl hover:text-gray-700">Hogwarts University</a>
            </div>
            <div class="flex items-center">
                <?php if ($logIn) : ?>
                    <h2 id="navbtn" class="text-2xl text-gray-700 mb-4"><a href="controller/logout.php">Log Out</a></h2>
                <?php else : ?>
                    <h2 id="navbtn" class="text-2xl text-gray-700 mb-4"><a href="login.php">Log In</a></h2>
                <?php endif ?>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto mt-10">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to Hogwarts University</h1>
            <?php if ($logIn) : ?>
                <p class="text-gray-600 mb-6">Dear <?php echo $username ?>, View Course for better understanding...</p>
                <a href="" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">View Course</a>
            <?php else : ?>
                <p class="text-gray-600 mb-6">Dear learners, summer courses registration are open now. Please enrol if not already.</p>
                <a href="register.php" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Register Now</a>

            <?php endif ?>
        </div>
    </div>
</body>

</html>