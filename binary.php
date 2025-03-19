<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Dashboard</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   

</head>

<body>  
<header class="header">
<section class="flex >

   <a href="home.html" class="logo">ANIMAXLY.</a>
   
   <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required="" placeholder="Search" maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>
      </form>
      <div class="icons">
		 <button id="menuButton" onclick="toggleSidebar()">Menu</button>
      </div>
	</div>
		
	</div></section>
</header>
    <div id="sidebar" class="sidebar">
	
        <div>
	    <button class="closebtn" onclick="toggleSidebar()">×</button>
		</div>
		<div>
		<img src="images/animaxly.png" class="image" alt>
        <h1>Binary Numbers!</h1>
        
		</div>
        <div class="theme-toggle">
            <div><label for="themeSwitch">Dark Mode:</label>
            <input type="checkbox" id="themeSwitch" onchange="toggleTheme()">
			<br>
			</div>
        
        <ul>
	<nav class="navbar">
	<div class="box-container">
	<div class="box">
	<div><a href="home.html"><i class="fas fa-home"></i><span>Home</span></a></div
	
	    <h1>Trivia</h1>
	<div><a href="internet.php"><i class="fas fa-question"></i><span>Internet Works</span></a></div>
	<div><a href="binary.php"><i class="fas fa-question"></i><span>Binary Numbers</span></a></div>
	<div><a href="cyber.php"><i class="fas fa-question"></i><span>Cybersecurity Basics</span></a></div>
	<div><a href="wire.php"><i class="fas fa-question"></i><span>Wireless Communication </span></a></div>
      
      <div><a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a></div>
      <div><a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a></div>
	  </div>
	  
   </nav>
        </ul>
  
	<a href="logout.php">Logout</a>
        </div>
    </div>
    <script src="script.js"></script>
	
	<section class="home-grid">

   <h1 class="heading">Trivia</h1>

   <div class="box-container">
   
      <div class="boxin">
         <h1 class="title">Binary Numbers</h1>
         <p class="tutor"> Did you know that all digital information text, images, and even videos is stored using only 0s and 1s? This simple system powers everything in computers and technology!
</p>
          <a href="internet.php" class="inline-btn">Previous</a> <a href="cyber.php" class="inline-btn">Next</a> 
      </div>

   </div>

</section>
</body>
</html>

