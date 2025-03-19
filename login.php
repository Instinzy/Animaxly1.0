<?php
session_start();
include('includes/functions.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    $user = loginUser($username, $password);
    if ($user) {
        $_SESSION['user'] = $user;
        header("Location: index.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Animaxly</title>
	
</head>
<body>

    <div class="container">
	<img src="images/animaxly.png" class="image" alt>
        <h1>Login</h1>
		 <label for="themeSwitch">Dark Mode:</label>
            <input type="checkbox" id="themeSwitch" onchange="toggleTheme()">
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form class="login" method="POST" action="" style="
		width: 500px;
    background: #4c76f3;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 12px 9px 0px 0px rgba(0, 74, 255, 0.28);
">
            <input type="text" name="username" placeholder="Username" required="">
            <input type="password" name="password" placeholder="Password" required="">
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
		<script src="script.js"></script>
    </div>
</body>
</html>