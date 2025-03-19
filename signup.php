<?php
session_start();
include('includes/functions.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    
    if ($password === $confirm_password) {
        if (registerUser($username, $password)) {
            $_SESSION['message'] = "Registration successful!";
            header("Location: login.php");
            exit;
        } else {
            $error = "Username already exists!";
        }
    } else {
        $error = "Passwords do not match!";
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
	<img src="images/animaxly.png" class="image" alt>
        <h1>Sign Up</h1>
		<label for="themeSwitch">Dark Mode:</label>
            <input type="checkbox" id="themeSwitch" onchange="toggleTheme()">
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST" action="" style="
		width: 500px;
    background: #4c76f3;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 12px 9px 0px 0px rgba(0, 74, 255, 0.28);
">
            <input type="text" name="username" placeholder="Username" required="">
            <input type="password" name="password" placeholder="Password" required="">
            <input type="password" name="confirm_password" placeholder="Confirm Password" required="">
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
	<script src="script.js"></script>
</body>
</html>