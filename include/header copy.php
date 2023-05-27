<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
       
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <title>JobPortal</title>
      

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>
   
<header>
  <!--for responsive navbar -->
  <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav-right") {
    x.className += " responsive";
  } else {
    x.className = "topnav-right";
  }
}

</script>
        <!-- Header Start -->
        <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="seeker_signin.php">Find a Jobs </a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="#">Page</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-blog.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Elements</a></li>
                                                    <li><a href="job_details.html">job Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="my_applications.php" class="btn head-btn1">My APPLICATIONS</a>
                                    </div>
        <nobr>
                                    <div class="profile_dropdown">
                                    <?php
            $email = $_SESSION['email'];
            include("connection/db.php");
            $query = mysqli_query($conn, "select id,email,fname,profile_img from job_seeker where email='$email';");
            $row = mysqli_fetch_array($query)
            ?>
                                    <div class="dropdown">

                                        <a class="btn head-btn2 dropdown-toggle" onclick="myFunction()"
                                        type="button" id="profile-dropdown" data-toggle="dropdown" 
                                        aria-haspopup="true" aria-expanded="false">Profile</a>
                                        
                                    
                                           
                                          <!-- Example single danger button -->

  
  <div class="dropdown-menu">
    <a class="dropdown-item" href="seeker_update1.php?id=<?php echo $row['id'] ?>">Edit Profile</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="logout.php">Logout</a>
  </div>
</div> 





                            
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>
    
         <!-- slider Area Start-->
         <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-9 col-md-10">
                                <div class="hero__caption">
                                    <h1>Find the most <br>
                                        exciting startup 
                                        jobs</h1>
                                </div>
                            </div>
                        </div>
                        <!-- Search Box -->
                        <div class="row">
                            <div class="col-xl-8">
                                <!-- form -->
                                <form action="#" class="search-box">
                                    <div class="input-form">
                                    <input type="text" name="job_title" placeholder="Job Title or keyword">

                                    </div>
                                    <div class="select-form">
                                        <div class="select-itms">
                                        <select name="location" id="select1">
  <option value="BD">Location BD</option>
  <option value="PK">Location PK</option>
  <option value="US">Location US</option>
  <option value="UK">Location UK</option>
</select>

                                        </div>
                                    </div>
                                    <div class="search-form">
                                        <a href="#">Find job</a>
                                    </div>	
                                </form>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
    <script>
  // Get the "Profile" button and dropdown menu
  var profileBtn = document.getElementById("profile-btn");
  var profileDropdown = document.querySelector(".dropdown-menu");

  // When the "Profile" button is clicked, show/hide the dropdown menu
  profileBtn.addEventListener("click", function(event) {
    event.preventDefault(); // Prevent the default behavior of the link
    profileDropdown.classList.toggle("show");
  });

  // Hide the dropdown menu when the user clicks outside of it
  window.addEventListener("click", function(event) {
    if (!event.target.matches(".dropdown-toggle")) {
      var openDropdown = document.querySelector(".dropdown-menu.show");
      if (openDropdown) {
        openDropdown.classList.remove("show");
      }
    }
  });
</script>
