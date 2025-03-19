<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styles.css">

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
	<div><a href="home.html"><i class="fas fa-home"></i><span>Home</span></a></div>
	
	<h2>Trivia</h2>
		<div><a href="internet.php"><i class="fas fa-question"></i><span>Internet Works</span></a></div>
	<div><a href="binary.php"><i class="fas fa-question"></i><span>Binary Numbers</span></a></div>
	<div><a href="cyber.php"><i class="fas fa-question"></i><span>Cybersecurity Basics</span></a></div>
	<div><a href="wire.php"><i class="fas fa-question"></i><span>Wireless Communication </span></a></div>
      
      <div><a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a></div>
      <div><a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a></div>
	  </div>
	  
	</div>
   </nav>
        </ul>
  
	<a href="logout.php">Logout</a>
        </div>
    </div>
	<script src="script.js"></script>
<section class="contact">

   <div class="row">

      <div class="image">
         <img src="images/contact.png" alt="">
      </div>

      <form action="" method="post">
         <h3>Get in touch</h3>
         <input type="text" placeholder="enter your name" name="name" required maxlength="50" class="box">
         <input type="email" placeholder="enter your email" name="email" required maxlength="50" class="box">
         <input type="number" placeholder="enter your number" name="number" required maxlength="50" class="box">
         <textarea name="msg" class="box" placeholder="enter your message" required maxlength="1000" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" class="inline-btn" name="submit">
      </form>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>Phone number</h3>
         <a href="+639513878243">09513878243</a>
         <a href="+639930981306">09930981306</a>
      </div>
      
      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>Email address</h3>
         <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcRwPVsxwVNLdnxftTVqFsvKGmlJCFhsxBKFFPwdPnDTQfHpgMsmGLXxsFxfnldzRlzwdRjWN">madelochriastianjohn@gmail.com</a>
         <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJNvNBGblfpVhhtBCBtQDSvBLLNVMkRxqlQJZqJnBnSCsTfhbPHWFHpwWpgtkhFMcXKVxvV">laudekemp@gmail.com</a>
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>Office address</h3>
         <a href="#">521-A Silencio st, Sampaloc, Manila</a>
      </div>

   </div>

</section>
<script src="js/script.js"></script>

   
</body>
</html>