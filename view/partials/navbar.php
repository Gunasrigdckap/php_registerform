
<nav class="bg-white shadow">
<div class="container mx-auto px-6 py-3 flex justify-between items-center">
    <div>
        <a href="#" class="text-2xl font-bold text-gray-800 lg:text-3xl hover:text-gray-700">Hogwarts University</a>
    </div>
    <div class="flex items-center">
        <?php if ($logIn === "admin123@gmail.com") : ?>
            <h2 id="nav_admin" class="text-2xl text-gray-700 mb-4"><a href="userdetails.php">User details</a></h2>
        <?php endif ?>
        
        <?php if ($logIn) : ?>
            <h2 id="navbtn" class="text-2xl text-gray-700 mb-4"><a href="controller/logout.php">Log Out</a></h2>
        <?php else : ?>
            <h2 id="navbtn" class="text-2xl text-gray-700 mb-4"><a href="login.php">Log In</a></h2>
        <?php endif ?>
    </div>
</div>
</nav>
