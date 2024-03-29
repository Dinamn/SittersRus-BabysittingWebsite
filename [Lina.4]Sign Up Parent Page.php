<!DOCTYPE html>
<html>
    <!-- Sign Up Parent page -->
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

			<div class="top"><a href="[Lina.1]Home Page.html#writetext2" class="line"><h2>Reviews</h2></a></div>

            <div class="top"><a href="#soc-icon"  class="line"><h2>Contact us</h2></a></div>

		</div><!--End of header-->

        <br>
        <br>

        <!--Page content-->

        <div class="container1">
            <div class="title">Sign Up</div>
            <form action="#" method="post">
                <div class="user-details">

                    <div class="profile-pic">
                        <img src="Images/user (1).png" alt="user photo" id="userphoto">
                        <input type="file" id="file">
                        <label for="file" id="uploadBtn">Choose a photo</label>
                    </div>

                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" placeholder="Enter your first name" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" placeholder="Enter your last name" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="Password" placeholder="Enter your password" required>
                    </div>

                    <div class="input-box">
                        <span class="details">City</span>
                        <input type="text" placeholder="Enter your city" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Location</span>
                        <button id="get-loc"><img src="Images/location-dot-solid.svg" id="loc-icon">  Enter your location</button>
                    </div>

                </div>

                <div class="button">
                    <a href="[Reef]ParentMainPage.html">Sign up</a>
                </div>

            </form>
        </div><!--End of page content-->


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
