<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="signup.css">
<title> Sign Up</title>

</head>
<body>
	<center>
	<div class="box">
		<h2>Sign Up</h2>
	<form id="frmsignup" action="registration.php" method="POST">
	
		<div class="inputbox">
			<input type="text" name="name" required=" ">
			<lable>Username</lable>
        </div>
        
        

        <div class="inputbox">
			<input type="number" name="contact" required=" ">
			<lable>Contact</lable>
		</div>

		<div class="inputbox">
			<input type="email" name="email" required=" ">
			<lable>Email</lable>
		</div>

		<div class="inputbox">
			<input type="password" name="password" required=" ">
			<lable>Password</lable>
        </div>
        
        <div class="inputbox">
			<input type="password" name="confirmpassword" required=" ">
			<lable>Confirm Password</lable>
		</div>
		<input type="submit" name="submit" value=" Sign Up">
		<lable><a href="login.php">Already User? Login Here..</a></lable>
	</center>
	
	</form>	

	<!-- <script src='script2.js'></script> -->
    <!-- <script src='mainbook.js'></script> -->
</body>
</html>