<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title>RESTAURANT ONLINE TABLE BOOKING WEBSITE</title>
<link rel="stylesheet" href="style1.css">

</head>
<body>
	<!ALL THE PART BELOW THIS IS FOR REGISTRATION PAGE>
<header>

<img src='Logo.jpg' class="logo">
<nav class="navigation">

<a href="login.html">Home</a>
<a href="#">About us</a>
<a href="#">Contact us</a>
<button class="btnLogin-popup">LOGIN</button>
</nav>
</header>

<div class="wrapper">
	<h1>REGISTER</h1>
	<div class="registration-box">

	<form action="#" method="POST">
		<label>FIRST NAME</label>
		<input type="text" name="fname">

		<label>LAST NAME</label>
		<input type="text" name="lname">

		<label>EMAIL</label>
		<input type="email" name="email">

		<label>SET PASSWORD</label>
		<input type="password" name="password">


		<input type="submit" value="SUBMIT" name="register">
		

	</form>
	<p>Already have an account?<a href="login1.php">login here</a></p> 
	</div>
</div>

</body>
</html>


<?php
	if(isset($_POST['register']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		if($fname !="" && $lname !="" && $email !="" && $password !="")
		{
			$query= "INSERT INTO form values('$fname','$lname','$email','$password')";
			$data=mysqli_query($conn,$query);
			if($data)
			{
				#echo "<p><font color=white>DATA SUCCESSFULLY INSERTED</p>";
			}
			else
			{
				echo "<script>alert('FAILED TO INSERT VALUE');</script>";
			}
		}
		else
		{
			echo "<script>alert('DONT LEAVE THE FORM EMPTY');</script>";
		}
		

	}
?>