<?php
ob_start();
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script type="text/javascript">
		window.addEventListener('load',function()
		{
			var y=document.getElementsByClassName('welcome')[0];
			
		     y.style.marginTop="100px";
		     y.style.transition="0.9s linear";
				
		});
	</script>
	
	
	<title>Srm Notes</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
</head>

<body>
	<?php
    include 'connect.php';
	?>
	<?php include "nav.php"  ?>
	<div class="back">
		
		<div class="welcome">
			Welcome To  Notes Gallery
		</div>
		<div class="search-main-container">
			<div class="float select">
				<select name="list" class="list" >
				<?php
				include 'connect.php';
				$sql="select * from college";
                  if(!$a=$conn->query($sql))
                  	die($conn->error);
                  while($row=$a->fetch_assoc())
                  	{
                    ?>
					<option value= "<?php echo $row['id']; ?>" >
						<?php echo $row['name'];  ?>
							
					</option>

                   <?php
                   }
				   ?>
				</select>
			</div>
			<div class="search-container float">
				<input type="search" name="search" placeholder="Search For Files" class="search">				
			</div>			
		</div>
	</div>
	<div class="middle">
		<div class="middle-content">
			<h1>Upload and Help Others</h1>

			Now you can upload your notes by <br> simply register yourself			
		</div>
	</div>
   <div class="search-result-container">
	 <div class="search-result">
		<h1>Some of our notes</h1>
		<div class="wrap">
		 <?php 
		 $sql2="select * from subject limit 6";
		 if(!$h=$conn->query($sql2))
		 	die($conn->error);
            $rc=0;
         while($no=$h->fetch_assoc()){   
         
         	
             ?>
           <a href="<?php echo $no['location'];  ?>">
           <div class="inner-col-33">
             
               <div class="rectangle">
                 <div class="name-sub"> Name:<?php echo $no['name-sub']; ?></div> 
                
               <?php 
               $col_id=$no['college_id'];
                 $sql3="select * from college where id='$col_id' ";
                 if(!$j=$conn->query($sql3))
                 	die($conn->error);
                 $no2=$j->fetch_assoc();?>
                 <div class="name-col"> College:<?php echo $no2['name']; ?> </div>
               </div>
            
           </div> 
            </a>  
             
          
       <?php $rc=$rc+1; }  ?> 
       </div>
	 </div>
	</div>
	
	<div class="footer">
      &copy; 2018 All Rights Are  Reserved 
    </div>
      

      <script type="text/javascript">
		
               $('.list').change(function() {
                  
                    var search = document.getElementsByClassName('search')[0];

                    var val = search.value;
                     var con=  document.getElementsByClassName('list')[0].value;                
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementsByClassName('search-result')[0].innerHTML=this.responseText;
    }
  };
  xmlhttp.open("GET", "search.php?val="+val+"&"+"con="+con, true);
  xmlhttp.send(null);




                });

                $('.search').keyup(function() {
                  
                    var search = document.getElementsByClassName('search')[0];

                    var val = search.value;
                     var con=  document.getElementsByClassName('list')[0].value;
                       

                    $('.search-result').load('search.php', {

                       send:val,
                       send2:con
                        

                        
                    });



                });

	</script>
</body>
</html>