<h1>Search  Result</h1>
    <div class="wrap">
		 <?php 
     if(isset($_GET['val']))
     {
     $val=$_GET['val'];
     $con=$_GET['con'];
     }
     else
     {
           $val=$_POST['send'];
     $con=$_POST['send2'];
     }

     include 'connect.php' ;
		 $sql2="select * from subject where `name-sub` like '%$val%' and college_id='$con' ";
		 if(!$h=$conn->query($sql2))
		 	die($conn->error);

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
       <?php  }  ?> 
       </div>
