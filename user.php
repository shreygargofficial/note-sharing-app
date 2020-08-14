<?php
session_start();
ob_start();
if(!isset($_SESSION['user']))
  header('Location:login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="user.css">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>
		<?php
    echo $_SESSION['user'];

		?>
	</title>
</head>
<body>
    <?php
include 'nav.php';
?>


	<?php
     include 'connect.php';
     $name=$_SESSION['user'];
     $sql="select photo from register where username='$name'";
     if(!$a=$conn->query($sql))
     	die($conn->error);
     $row=$a->fetch_assoc();


     if(isset($_FILES['pic']))
     {
     	$photo_name="upload/".$_FILES['pic']['name'];
     	$sql="update register set photo='$photo_name' where username='$name'";
     	if(!$b=$conn->query($sql))
     		die($conn->error);
     	move_uploaded_file($_FILES['pic']['tmp_name'],$photo_name);

            header('Location:user.php');

     }
     if(isset($_POST['update']))
     {
     	$id=$_SESSION['id'];
     	extract($_POST);
     	if(empty($name))
     		$name=$_SESSION['name'];

     	if(empty($email))
     		$email=$_SESSION['email'];
     	if(empty($call))
     		$call=$_SESSION['mobile'];
     	if(empty($user))
     		$user=$_SESSION['user'];
     	if(empty($pass))
     		$pass=$_SESSION['pass'];
        $sql="update register set name='$name',username='$user',email='$email',mobile='$call',password='$pass' where id='$id' ";
        if(!$s=$conn->query($sql))
        	die($conn->error);
        $_SESSION['name']=$name;
     	$_SESSION['email']=	$email;
     	$_SESSION['mobile']=$call;
     	$_SESSION['user']=$user;
     	$_SESSION['pass']=$pass;
     	header('Location:user.php');
     	

     }


	?>
	<div class="upper">
	 <form method="post" action="user.php" enctype="multipart/form-data">
		<div class="photo float" style="background-image:url(<?php echo $row['photo']; ?>);background-size: cover;background-position: center;">
			<div class="overlay-photo">
				<label for="cam">
					<img src="cam.png" class="camera-img">
				</label>
				<input type="file" name="pic" id="cam" class="cam" onchange="this.form.submit();" accept="image/*">
			</div>
		</div>
	  </form>
		<div class="float content-container">
			<div>Name: <?php echo $_SESSION['name'];  ?></div>
			<div>Email: <?php echo $_SESSION['email'];  ?></div>
			<div>Contact: <?php echo $_SESSION['mobile'];  ?></div>
			<div>UserName: <?php echo $_SESSION['user'];  ?></div>
			<div onclick="update();" class="update-butt">Update</div>
			<a href="logout.php"><div class="change-color">Log Out??</div></a>
		</div>
		<div class="float  upload">
			<a href="upload.php"><input type="button" name="" value="Upload +" class="upload-butt"></a>
			
		</div>

		<div class="update-box">
		  <form method="post" action="user.php">
			<input type="text" name="name" maxlength="50" class="input first-input" placeholder="Name" >
            <input type="Email" name="email" maxlength="100" class="input" placeholder="Email" >
            <input type="text" name="call" maxlength="10" class="input" placeholder="Contact" pattern="[7-9]{1}[0-9]{9}" >
			<input type="text" name="user" maxlength="30" class="input" placeholder="UserName"  >
			<input type="password" name="pass" maxlength="30" class="input" placeholder="Password"  >
   		    <input type="submit" name="update" class="input butt" name="update">
   		    <img src="cross.png" class="cross" onclick="disappear();">
          </form>
		</div>
	</div>

   <?php
  $count=1;
   ?>
    <div class="myactivity">
      <div class="head-myactivity">
          MY ACTIVITY
      </div>
      <?php 
         $id=$_SESSION['id'];
      $sqlsec="select * from subject where id='$id' ";
      if(!$h=$conn->query($sqlsec))
        die($conn->error);
    ?>
    <div class="body-myactivity">
        <?php
         while($no=$h->fetch_assoc()){   
         ?>
           <div class="inner-col-33">
             <a href="<?php echo $no['location'];  ?>">
               <div class="round">
                 <?php echo $no['name-sub'];  ?>
               </div>
             </a>
           </div>       
       <?php  }  ?>   

    </div>
  </div>

    <div class="footer">
      &copy; 2018 All Rights Are  Reserved 
    </div>
<script type="text/javascript">
	function update()
	{
         var a=document.getElementsByClassName('update-box')[0];
         if(a.style.marginTop=="0px")
         	{
         		a.style.marginTop="-1000px";
                a.style.transition="0.1s ease";


         	}
         	else{
         		a.style.marginTop="0px";
                a.style.transition="0.1s ease";
         	}
	}
	function disappear()
	{
         var a=document.getElementsByClassName('update-box')[0];
         
         		a.style.marginTop="-1000px";
                a.style.transition="0.1s ease";
         
	}
</script>

</body>
</html>