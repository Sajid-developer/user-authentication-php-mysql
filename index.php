<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="style.css">

	<title> User Authentication....</title>
        <script src="app.js" defer></script>
</head>
<body>
	
   <header id="header" class="header">
   	  <div class="nav_logo">
   	  	 <img src="logo.png" alt="Logo image" />
   	  </div>

   	  <div class="nav_links">
   	  	<a class="link">explore lands</a>
   	  	<a class="link">search by state</a>
   	  	<a class="link">find an agent</a>
   	  	<a class="link">advertise</a>
   	  </div>
   	  <div class="nav_btns">
   	  	<button class="btn" id="register" onclick="show('register')">register</button>
   	  	<button class="btn" id="login" onclick="show('login')">log in</button>
   	  </div>
   </header>

   <div class="form_section">

   	  <!------ Register form ------>
   	  <form class="form" action="register.php" method="POST" autocomplete="off" id="reg-box">
   	  	<h1>Register Now</h1>
   	  	<span class="close" onclick="hide()">X</span>
  
   	  	<input type="email" name="email" placeholder="Email" autofocus required>
   	  	<input type="password" name="pass" placeholder="Password" required>
   	  	<label class="pass_note">Passwords must be at least 8 characters and a combination of letters, numbers, and symbols using both upper and lower-case letters.</label>

   	  	<div class="save_info">
   	  		<input type="checkbox" name="saveInfo" id="check">
   	  		<label class="content" for="check">Save my info for future</label>
   	  	</div>	

   	  	<input type="submit" class="submit" value="register" name="signUp">
   	  </form>
      
      <!------ Login form ------>
   	  <form class="form" action="login.php" method="POST" autocomplete="off" id="login-box">
   	  	<h1>Log In</h1>
   	  	<span class="close" onclick="hide()">X</span>
   	  	<input type="email" name="email" placeholder="Email" autofocus required>
   	  	<input type="password" name="pass" placeholder="Password" required>

   	  	<div class="forgot_pass"><a href="#">forgot password ?</a></div>	

   	  	<div class="save_info">
   	  		<input type="checkbox" name="remember" id="checkR">
   	  		<label class="content" for="checkR">Remember me</label>
   	  	</div>	

   	  	<input type="submit" class="submit" value="login" name="logIn">
   	  </form>

   </div>

</body>
</html>
