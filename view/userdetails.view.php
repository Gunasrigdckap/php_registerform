<?php
 require "./controller/user.details.process.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="content container mx-auto py-8">
        <div class="container mx-auto py-8">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2">Name</th>
                        <th class="border border-gray-300 px-4 py-2">Email</th>
                        <!-- <th class="border border-gray-300 px-4 py-2">Password</th> -->
                        <th class="border border-gray-300 px-4 py-2">Course Name</th>
                        <th class="border border-gray-300 px-4 py-2">Modification</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        // Fetch each row as an associative array
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td class='border border-gray-300 px-4 py-2'>" . htmlspecialchars($row['name']) . "</td>";
                            echo "<td class='border border-gray-300 px-4 py-2'>" . htmlspecialchars($row['email']) . "</td>";
                            // echo "<td class='border border-gray-300 px-4 py-2'>" . htmlspecialchars($row['password']) . "</td>";
                            echo "<td class='border border-gray-300 px-4 py-2'>" . htmlspecialchars($row['coursename']) . "</td>";
                            echo "<td class='border border-gray-300 px-4 py-2'>
                                    <a href='register.php?id=" . htmlspecialchars($row['id']) . "' class='editBtn'>Edit</a>
                                    <a href='controller/DeleteUserController.php?id=" . htmlspecialchars($row['id']) . "' class='deleteBtn'>Delete</a>
                                  </td>";
                            echo "</tr>";
                            
                        }
                    } else {
                        echo "<tr><td colspan='4' class='border border-gray-300 px-4 py-2 text-center'>No users found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>








