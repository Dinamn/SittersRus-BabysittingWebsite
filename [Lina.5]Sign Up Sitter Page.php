<!DOCTYPE html>
<html>
    <!-- Sign Up Sitter page -->
    <head>
        
            <meta charset="utf-8">
            
            <title>Sign Up Page</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="MainStyle.css">
	        <link rel="stylesheet" type="text/css" href="Lina Pages Style.css">
	        <link rel = "shortcut icon" type = "image/x-icon" href= "Images/icon.png">
        
        </head>
        <body>
            <!--Header-->
		<div>

			<img src="Images/Sitters R US (3).png" alt="LOGO" id="logo">

            <div class="top"><a href="[Lina.1]Home Page.html"  class="line"><h2>Home</h2></a></div>

			<div class="top"><a href="[Liina.1]Home Page.html#writetext2" class="line"><h2>Reviews</h2></a></div>

            <div class="top"><a href="#soc-icon"  class="line"><h2>Contact us</h2></a></div>


		</div><!--End of header-->

        <br>
        <br>

        <!--Page content-->

        <div class="container2">
            <div class="title">Sign Up</div>
            <form action="#" method="post">
                <div class="user-details2">
        
                    <div class="profile-pic2">
                        <img src="Images/user (1).png" alt="user photo" id="userphoto2">
                        <input type="file" id="file">
                        <label for="file" id="uploadBtn2">Choose a photo</label>
                    </div>
        
                    <div class="input-box2">
                        <span class="details2">First Name</span>
                        <input type="text" placeholder="Enter your first name" required>
                    </div>
        
                    <div class="input-box2">
                        <span class="details2">Last Name</span>
                        <input type="text" placeholder="Enter your last name" required>
                    </div>
        
                    <div class="input-box2">
                        <span class="details2">Email</span>
                        <input type="text" placeholder="Enter your email" required>
                    </div>
        
                    <div class="input-box2">
                        <span class="details2">Password</span>
                        <input type="Password" placeholder="Enter your password" required>
                    </div>
        
                    <div class="input-box2">
                        <span class="details2">ID</span>
                        <input type="text" placeholder="Enter your ID number" required>
                    </div>
        
                    <div class="input-box2">
                        <span class="details2">Phone Number</span>
                        <input type="text" placeholder="Enter your Phone number" required>
                    </div>

                    <div class="input-box2">
                        <span class="details2">age</span>
                        <input type="text" placeholder="Enter your age" required>
                    </div>
        
                    <div class="input-box2">
                        <span class="details2">City</span>
                        <input type="text" placeholder="Enter your city" required>
                    </div>

                    <div class = "input_field">

                        <label>  Gender : </label> <br>
            
                            <input type = "radio" name = "kidGender" value= "female" > female <br>
                            <input type = "radio" name = "kidGender" value = "male" > Male
                            
                        </div>
    
                    <div class="sitterBio">
                        <label>Bio</label><br>
                    <textarea id="bio" name="bio" rows="4" cols="35" placeholder="   Write your bio such as, years of experienceseducation, languages spoken, skills … etc"></textarea>
                </div>
            
                    <div class="button2">
                        <a href="[Reef]SitterMainPage.html">Sign up</a>
                    </div>
        
                </div>

               
        
            </form>
        </div>
      

       
<!--End of page content-->


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

        <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!( $database = mysqli_connect( "localhost", "root", "" )))
die( "<p>Could not connect to database</p>" );

if (!mysqli_select_db( $database, "webpro" ))
die( "<p>Could not open URL database</p>" );

$email=$_POST["email"];  
$passwor=$_POST["psw"];  
$phoneNo=$_POST["phn"];
$gender=$_POST["Gender"];
$fname=$_POST["fn"];  
$lname=$_POST['ln'];  
$filename = $_FILES['uploadfile']['name'];
$tempname = $_FILES['uploadfile']['tmp_name'];    

if($filename==null){
  $filename='images.png';
}

$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));



if(!preg_match('/^[0-9]{10}+$/', $phoneNo)){
  echo "<script>alert('phone number should be NUMBERS only!')</script>";  
  exit();

}

if (preg_match('/[0-9]+/', $fname)||preg_match('/[0-9]+/', $lname)) {
  echo "<script>alert('name should not have a number!')</script>";  
  exit();
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "<script>alert('Sorry, only JPG, JPEG & PNG files are allowed!')</script>";
exit();
}
move_uploaded_file($tempname, 'profile_img/'.$filename);

$query="select email from petowner WHERE email='$email'";  
$query2="select email from veterinary WHERE email='$email'"; 
$run=mysqli_query($database, $query); 
$run2=mysqli_query($database, $query2);  

$queryinsert="INSERT INTO petowner (email, password, profilePhoto,phoneNumber,gender,Fname,Lname) VALUES ('".$email."','".$passwor."','".$filename."','".$phoneNo."','".$gender."','".$fname."','".$lname."');";
if( ( $row=mysqli_fetch_row($run)==null ) && ( $row=mysqli_fetch_row($run2)==null)) {
  $_SESSION['email']=$email;
  mysqli_query($database,$queryinsert);  
    header("location: welcom.php");
  
}

else  
  echo "<script>alert('This email is used before!')</script>";  


  
  }




?>

        </body>
</html>
