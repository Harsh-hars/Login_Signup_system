
<?php
session_start();
include './config.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md text-center">
        <h1 class="text-3xl font-bold mb-6">Welcome!</h1>
        <?php
                 print_r($_SESSION['email']);
                ?>
        <p class="mb-4">You have successfully logged in.</p>
        <a  href="./login.php" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-red-600 transition duration-200">
            Logout 
        </a>
               

    </div>
</body>
</html>
