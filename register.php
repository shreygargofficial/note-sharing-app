<?php
ob_start();
 if(!isset($_SESSION['user'])) 
    { 
        session_start(); 
    } 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="register.css">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
</head>
<?php
$err="";
include "connect.php";
if($_SERVER['REQUEST_METHOD']=="POST")
{

	extract($_POST);
	$sql="select * from register where username='$username'";
	if(!$a=$conn->query($sql))
		die($conn->error);
	if($a->num_rows>0)
     $err="Username Already Exists";
 if($err=="")
 {
	$sql="insert into register values('','$name','$username','$password','$email','$call','upload/people.png')";
	if(!$conn->query($sql))
		die($conn->error);

	header('Location:login.php');
}
else
{
	echo '<script>alert("'.$err.'")</script>';
}

}


?>
<body>
	<?php include "nav.php"  ?>
	<div class="back">
	 <div class="container">
	 	<div class="heading">Student Registration Form</div>
		<form method="POST" action="register.php" class="align">
			<div class="input-container">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" placeholder="Name" class="input" required>
			</div>

			<div class="input-container">
				<label for="user">Username</label>
				<input type="text" name="username" placeholder="Username" class="input" id="user" maxlength="20" required>
			</div>
			<div class="input-container">
				<label for="pass">Password</label>
				<input type="password" name="password" placeholder="Password" class="input" id="pass" maxlength="30" required>
			</div>
			<div class="input-container">
				<label for="mail">Email</label>
				<input type="email" name="email" placeholder="Email" class="input" id="mail" required>
			</div>
			<div class="input-container">
				<label for="mob">Mobile</label>
				<input type="text" name="call" placeholder="10 Digit Number" class="input" id="mob" pattern="[7-9]{1}[0-9]{9}"  required>
			</div>
			<div class="input-container">
			<input type="submit" name="submit" class="input butt">
				
			</div>
		</form><div class="bg1 align"></div>
     </div>
		<div class="register">
			<a href="login.php">
				Already a member? login here
			</a>			
		</div>
	</div>
	
	