<?php
ob_start();
session_start();



?>
<!DOCTYPE html>
<html>
<head>
	<title>LogIn</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
</head>
<?php
$err="";
if($_SERVER['REQUEST_METHOD']=="POST")
{
	extract($_POST);
	include "connect.php";
	$sql="select * from register where username='$username' ";
	if(!$a=$conn->query($sql))
		die($conn->error);
	 $row=$a->fetch_assoc();
	if($a->num_rows==0)
	{
		$err="Invalid username";
	}
   
    elseif($row['password']!=$password)
    	$err="Invalid Password";
    if($err=="")
    {
    	$_SESSION['id']=$row['id'];
    	$_SESSION['user']=$username;
    	$_SESSION['email']=$row['email'];
        $_SESSION['mobile']=$row['mobile'];
        $_SESSION['name']=$row['name'];
        $_SESSION['pass']=$password;
        header('Location:index.php');
    		
    }
}


?>
<body>
	<div class="back">
		<form method="POST" action="login.php">
			<div class="red">
				<?php  echo $err;     ?>
			</div>
			<div class="input-container">
				<input type="text" name="username" placeholder="Username" class="input">
			</div>
			<div class="input-container">
				<input type="password" name="password" placeholder="Password" class="input">
			</div>
			<div class="input-container">
			<input type="submit" name="submit" class="input butt">
				
			</div>
		</form>
		<div class="register">
			<a href="register.php">
				Not a member? register here
			</a>			
		</div>
	</div>
	<?php include "nav.php"  ?>
</body>

</html>

