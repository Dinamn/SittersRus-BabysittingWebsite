<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Previous Bookings</title>
        <link rel="stylesheet" type="text/css" href="MainStyle.css">
        <link rel="stylesheet" type="text/css" href="Ahad Style-2.CSS">
        <link rel = "shortcut icon" type = "image/x-icon" href= "Images/icon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>

    <body>

        <div id="body1">

           					<?php
		include("connection.php");
include("parent_menu.php");
	

?>
			
			
			
			
        </div>




        <div class="List-1">
            <div class="List-2">
                <div class="lable-b">
                    <h4>Current Bookings</h4> 
                </div>
                <div class="container">
                        <ul class="offer-list">
						
						<?php
						$sit_id=$_SESSION["uid"];
						$std=0;
$query="select * from booking where parent_id='$sit_id' AND task_status='$std'";
$view=mysqli_query($connection,$query);
while($rows=mysqli_fetch_array($view)){
$booking_id=$rows['booking_id'];
$sitter_id=$rows['sitter_id'];

$booking_date=$rows['booking_date'];
$booking_time=$rows['booking_time'];


$query1="select * from users where id='$sitter_id'";
$view1=mysqli_query($connection,$query1);
$rows1=mysqli_fetch_array($view1);
$first_name=$rows1['first_name'];
$last_name=$rows1['last_name'];
$phone_number=$rows1['phone_number'];
$image=$rows1['image'];

						
						?>

						
                        <div class="card2">

                        <div class="Sitter-data">
                            <li>
                                           
									<?php
									if($image==''){
									?>
							
                               <img src="Images/female.jpeg" alt="Sitter picture" class="Sitter-pic">
								
								<?php
								}
									else {
									?>
									<img src="<?php echo $image; ?>" alt="Sitter picture" class="Sitter-pic">
									
									<?php
								}
									
									?>
                            </li>

                            <li id = "Sitter-info2">
                                <p id="name"><?php echo $first_name." ".$last_name; ?> </p>
								<form method="post" action="Review_published.php" class="form"> 
								
                                <div class="rate">
								<p>Phone: <?php echo $phone_number; ?> </p>
                                    <p>Date: <?php echo $booking_date; ?> </p>
									 <p>Time: <?php echo $booking_time; ?> </p>
                                    
									
                      
                    
                               </div>                             </li>

                            <li>
                                

   
                              
                            </form> 
                            </li>
                                                        
                        </div></div>



                      <?php

}

?>

                        
                </ul>
                </div>
            </div>



            
        </div>
          



            

    



		<footer id="footer">

			
            <div id="Ctext">Contact us</div>

			<div class="social-icon">
			<div class="bottom">
			<a href="tel:92000003" class="line"><i class="fa fa-phone"></i> 92000003</a> </div>

			<div class="bottom">
			<a href="mailto:info@sittersRUS.com" class="line"><i class="fa fa-envelope"></i> info@sittersRUS.com</a> </div>

			<div class="bottom">
			<a href="https://instagram.com/sitters.r.us.sa?igshid=Y2ZmNzg0YzQ" class="line"><i class="fa fa-instagram"></i> @Sitters.R.US</a></div>
			<br><br>
			<div class = "bottom"><div class = "copyright"><center>Copyright&copy; </center></div></div>
		
		    </div>
			

		</footer>


    </body>

</html>
