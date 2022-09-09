<html>
  <head>
	<link rel="stylesheet" href="reg_styles.css"> </link>
  </head>
  <body>
  <header>
			<nav>
				<h1>HERBAL</h1>
				<h1>MEDICINES</h1>
					<ul id="nav">
						<li><a class="homered"href="index.html">HOME</a></li>
						<li><a class="homeblack"href="#">PRODUCT</a></li>
						
						
						<li><a class="homeblack"href="registration_form.html">REGISTRATION</a></li>
						<li><a class="homeblack"href="#">ADD TO CART</a></li>
						<li><a class="homeblack"href="aboutus.html">ABOUT US</a></li>
						<li><a class="homeblack"href="contactus.html">CONACT US</a></li>
						<li><a class="homeblack"href="feedback.html">FEEDBACK</a></li>
						<li><a class="homeblack"href="Login_form.html">LOGIN</a></li>
						

					</ul>
			</nav>
		</header>
		<div class="divider">
		</div>
	<form action="registration_form.php" method="POST">
	
		<div class="class1">
		<h1><center> REGISTER </center></h1>
		<p> <h3>FILL THE DETAILS TO CREATE ACCOUNT </h3></P>
			<hr>
		
		
		
		<label for="name"><b>Name</b></label><br>
	    <input type="text" placeholder="Enter user name" name="name" required>
		<br><br>
		
		
		<label for="E-mail"><b>E-mail</b></label><br>
	    <input type="email"  placeholder="Enter your e-mail" name="Email" required >
		<br><br>
				
		<label for="Password"><b>Password</b></label><br>
	    <input type="password"  name="password" required>
		<br><br>
		
		<label for="Password"><b>Confirm password</b></label><br>
	    <input type="password"  name="confirm password" required>
		<br><br>
		
		<hr>
		
				
		<button type="submit">CREATE MY ACCOUNT</button>
		<b>
			<font size="3px" color="brown">
				<?php 
					if(isset($_REQUEST['auth']))
					{
						echo"your account is already exists.please create new account";
					}
				?>
			</font>
			</b>
		</div>
		
		<p> <h2> <center>
		By clicking "CREATE MY ACCOUNT" you agree to our 
		<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="#">terms and services</a> and <a href="#">privacy policy.</a>
	    </center></h2></p>

		
		
			<center><p> already have an account?<a href="Login_form.html">login</a>
		</p>
		</center>
	</form>
  </body>
</html>