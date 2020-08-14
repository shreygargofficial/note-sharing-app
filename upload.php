<?php
session_start();
ob_start();
if(!isset($_SESSION['user']))
  header('Location:login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="upload.css">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<title>
		<?php
          echo $_SESSION['user'].' Uploads';
   		?>
	</title>
</head>
<body>
	<?php
	$err="";

    include 'connect.php';
    $sql="select * from college ";
    if(!$a=$conn->query($sql))
    	die($conn->error);
     if(isset($_POST['submit']))
     {
     	extract($_POST);
     	$ext = pathinfo($_FILES['document']['name'], PATHINFO_EXTENSION);

     	$dir="notesupload/".strtoupper($subname).".".strtolower($ext);
     	$id=$_SESSION['id'];
     	$subname=strtoupper($subname);
     	$sql1="select * from subject where `name-sub`='$subname'";
     	if(!$b=$conn->query($sql1))
     		die($conn->error);
     	if($b->num_rows>0)
     		$err="Name Already Present";
     	if($err=="")
     	{
     	$sqli="insert into subject values('','$subname','$dir','$id','$college') ";
     	if(!$bo=$conn->query($sqli))
     		die($conn->error);
       	move_uploaded_file($_FILES['document']['tmp_name'],$dir);
       	$err="File Uploaded Successfully!!";
       }
       	echo '<script>alert("'.$err.'")</script>' ;
    
     }

	?>
	<?php include 'nav.php'; ?>

	<div class="container">
	    <form method="post" action="upload.php" class="form" enctype="multipart/form-data">
	    	<div class="input-container">
	    	  
	    	  <select name="college" class="input select">
	    	
	    		<?php
	    		while($row=$a->fetch_assoc())
	    			{?>

	    			<option value="<?php echo $row['id'];  ?>" ><?php echo $row['name'];  ?></option>
	    				<?php  }  		?>
	    	  </select>
	    	</div>
	    	<div class="input-container">
	    	  
               <input type="text"  name="subname" required class="input text" placeholder="Give Exact Name Of Subject">
	        </div>
	        <div class="input-container">
	         <label class="upload-butt" id="upload" for="upl" >Upload +</label>
	         	<input type="file" name="document" id="upl" class="hide-it" accept="application/msword,application/pdf, image/*" required>
	         
	        </div>

	        <div class="input-container">
	         <input type="submit" name="submit" class="input sub-butt">     
	        </div>
	        
	    </form>
    </div>
  <div class="footer">
      &copy; 2018 All Rights Are  Reserved 
    </div>
</body>
</html>
