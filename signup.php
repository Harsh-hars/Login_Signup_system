
<?php
// it means if the button name submit is clicked then it will display the email..
include './config.php';

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   // password in hashed form 
   $password = md5($_POST['password']);
   $res = mysqli_query($conn,"INSERT INTO `user`(`email`, `password`) VALUES ('$email','$password')");

  
   echo "<script>alert('User is created');</script>";



}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
        <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>
        <!-- form to register -->
        <form action="./signup.php" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200 focus:border-indigo-300" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200 focus:border-indigo-300" required>
            </div>
            <div class="text-center">
                <button name="submit" type="submit" class="w-full bg-indigo-500 text-white p-2 rounded-md hover:bg-indigo-600 transition duration-200">Register</button>
            </div>
        </form>
        <a class="mt-4" href="./login.php">Already having account ? Login now</a>
    </div>
</body>
</html>
