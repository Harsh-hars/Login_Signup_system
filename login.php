<?php
session_start();
?>

<?php
include './config.php';
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $res = mysqli_query($conn , "SELECT `email`, `password` FROM `user` WHERE email = '$email' and password = '$password'");
    $count = mysqli_num_rows($res);
    
    if($count>0){
        session_start();
        $row = $res->fetch_assoc();
        $_SESSION['email']=$row['email'];
        print_r($_SESSION['email']);

        echo "
        <script>
        alert('Logged in successfully');
         window.location.href='./home.php';
        </script>";
        
    }else{
        echo "<script>alert('User not exist')</script>";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
        <form action="./login.php" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200 focus:border-indigo-300" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200 focus:border-indigo-300" required>
            </div>
            <div class="text-center">
                <button name="login" type="submit" class="w-full bg-indigo-500 text-white p-2 rounded-md hover:bg-indigo-600 transition duration-200">Login</button>
            </div>
        </form>
        <a class="mt-4" href="./signup.php">Not having account ? Signup now</a>
    </div>
</body>
</html>
