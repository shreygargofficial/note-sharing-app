<?php
if(!isset($_SESSION))
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title>NAV</title>
	<link rel="stylesheet" type="text/css" href="nav.css">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script type="text/javascript" src="nav.js"></script>

</head>
<body>

		
	
  <div class="navigation">
	<div class="logo navbar">
		BookStore
	</div>
	<div class="navbar down">
		<nav>
			<ul>
				<a href="index.php">

					<li>
					Home
				</li>
				</a>

				<a href="#"><li>
					Contact
				</li>
				</a>
				
				<a href="#"><li>
					About
				</li>
				</a>

				<a <?php
                if(!isset($_SESSION['user']))
				echo 'href="register.php" ';
                else
                echo 'href="user.php" ';

				?> >
				<li >
					<?php 
					 if(!isset($_SESSION['user']))
					echo "Register/Login";
					else
						echo $_SESSION['user'];

					?>
				</li>
				</a>

				
			</ul>
		</nav>
	</div>
  </div>
<div class="ham">
	<div class="line" style="margin-top: 0px;"></div>
<div class="line"></div>
<div class="line"></div>

</div>



</body>

</html>