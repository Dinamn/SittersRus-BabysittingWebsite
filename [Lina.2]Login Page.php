<?php  
    session_start();
?> 
<!DOCTYPE html>
<html>
    <!-- Log in page -->
    <head>
        
            <meta charset="utf-8">
            
            <title>Login Page</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="MainStyle.css">
	        <link rel="stylesheet" type="text/css" href="Lina Pages Style.css">
	        <link rel = "shortcut icon" type = "image/x-icon" href= "Images/icon.png">
            <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"><!---->
        
        </head>
        <body>
            <!--Header-->
		<div>

			<img src="Images/Sitters R US (3).png" alt="LOGO" id="logo">

            <div class="top"><a href="[Lina.1]Home Page.html"  class="line"><h2>Home</h2></a></div>

			<div class="top"><a href="[Lina.1]Home Page.html#writetext2" class="line"><h2>Reviews</h2></a></div>

            <div class="top"><a href="#soc-icon"  class="line"><h2>Contact us</h2></a></div>

		</div><!--End of header-->

        <br>
        <br>

        <!--Page content-->
        <div class="container0">

            <h1>Log in</h1>
        <form class="loginfom" method="post" action="" name="loginfom" onsubmit = "return validated()">
        <div class="user-details0">
            <div class="input-box0">
                <span class="details0">Email<sup class="redStars"> *</sup></span>
                <input type="email" name="email" placeholder="Enter your email" required autocomplete="off">
                <div class="emailError">Please fill up your email</div>
            </div>

            <div class="input-box0">
                <span class="details0">Password<sup class="redStars"> *</sup></span>
                <input type="Password" name="password" placeholder="Enter your password" required>
                <div class="passError">Please fill up your password</div>
            </div>
            <br>
            <br>
            <div>
                <label> <b>Log in as:</b> 
        
                    <input name="loginAs" type="radio" value="Parent" checked >Parent
               
                    <input name="loginAs" type="radio" value="Babysitter" >Babysitter
               </label>
            </div>
        </div>
            <br>
            <br>
           <!-- <input type="submit" value="Login" id="logbut">--><button type="submit" id="logbut" name="login">Login</button>
           <br>
            <br>
           <p><a h href="">Forget password?</a></p>
            <br>
            <br>
           <a href="[Lina.3] Are You S or P Page.html" class="linegreen">Don't have an account?</a>

</form></div><!--End of page content-->

<script src="Lina.js"></script>


        <!--Footer-->
		<footer id="footer">

            <div id="Ctext">Contact us</div>

			<div class="social-icon" id="soc-icon">
			<div class="bottom">
			<a href="tel:92000003" class="line"><i class="fa fa-phone"></i> 92000003</a> </div>

			<div class="bottom">
			<a href="mailto:info@sittersRUS.com" class="line"><i class="fa fa-envelope"></i> info@sittersRUS.com</a> </div>

			<div class="bottom">
			<a href="https://instagram.com/sitters.r.us.sa?igshid=Y2ZmNzg0YzQ=" class="line"><i class="fa fa-instagram"></i> @Sitters.R.US</a></div>
			<br><br>
			<div class = "bottom"><div class = "copyright"><center>Copyright&copy; </center></div></div>
		
		    </div>
			

		</footer><!--End of footer-->

        </body>
</html>

<?php

if (!( $database = mysqli_connect( "localhost", "root", "" )))
die( "<p>Could not connect to database</p>" );

if (!mysqli_select_db( $database, "webProject381-2" ))
die( "<p>Could not open URL database</p>" );

if(isset($_POST['login'])) {  
$email=$_POST['email'];  
$password=$_POST['password'];  
$type=$_POST["loginAs"];


if($type=="Parent") 
    $query="SELECT * FROM `Parent` WHERE `Parent`.`email`='$email' AND `Parent`.`password`='$password';";   
  

  else
$query="select * from Babysitter WHERE email='$email'AND password='$password'";  
  
$run=mysqli_query($database, $query);  

if($row=mysqli_fetch_row($run) ) {
  if( $type=="Parent" ) {  
    header("location: [Reef]ParentMainPage.php");
    $_SESSION['name']=$row[3];
    $_SESSION['email']=$email;
    }

   else{
     header("location: [Reef]SitterMainPage.php");
     $_SESSION['name']=$row[3];
      $_SESSION['email']=$email;
        }
}

else  {
  echo "<script>alert('Email or password is incorrect!')</script>";  
}
  }

  

?>
