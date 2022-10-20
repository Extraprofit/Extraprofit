<?php

// Starting the session, to use and
// store data in session variable
session_start();

// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You have to log in first";
	header('location: login.php');
}

// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);

	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rajesh</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
	
					
					
					
				
					
					
  <style type="text/css">
<!--
.style1 {color: #FF0099}
.style2 {
	color: #9900CC;
	font-style: italic;
}
-->
  </style>
</head>
<body background="images/bg4.jpg" >
<div class="container mt-3">
  <marquee><h2 class="style1">My Extra Profit</h2>
  </marquee>
  <div class="card" >
    <div class="card-header" style="background-image:url(images/bg.jpg)"><div>
		<h2 align="center" class="style2">MY MONEY</h2>	
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- information of the user logged in -->
		<!-- welcome message for the logged in user -->
		<?php if (isset($_SESSION['username'])) : ?>
		
			


<p>&nbsp;</p>



			


			<span class="float-end" ></span>
	  <p>Welcome <strong> <?php echo $_SESSION['username']; ?> </strong> <span class="float-end"><a href="index.php?logout='1'" style="color: red;">Click here to Logout
			  </a>
      </span></p>
		<?php endif ?>
			
		
	</div>
	
	
	
	
	
	</div>
	
	
	
    <div >
	<div class="container" style="background-image:url(images/bg.jpg)">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card mt-1">
                    
                    <div class="text-bg-light">
					<div class="container mt-3">
    <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#home"><h4>Home</h4></a>	  	  
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu1"><h4>About_us<h4></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu2"><h4>Income<h4></a>
    </li>
	
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
    
	  
	  
	  
	  <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">


  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\welcome.jpg" alt="Los Angeles" class="d-block" style="width:100%" height="300px">
	  
      
    </div>
    <div class="carousel-item">
      <img src="images\Slide3.jpg" alt="Chicago" class="d-block" style="width:100%"height="300px" >
      <div class="carousel-caption">
        <h3>More invest more profit</h3>
        <p>Thank you for visit our site</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="images\Slide4.jpg" alt="New York" class="d-block" style="width:100%" height="300px">
      <div class="carousel-caption">
        <h3>Share plan and profit more</h3>
        <p>Work less profit more</p>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="container-fluid mt-3">
 <center> <h3>OUR VISION & MISSION</h3></center>
  <p> VISION Is To Make Big Earnings, Bring The Change In The Quality  Of The Life Of Our Partners, And To Help The Millions Of People To  Become Free Entrepreneurs So That They Can Live Financially  Secure Life. MISSION Our Mission Is To Free People From The Unemployment With Giving  Them High Returns In Low Investment.</p>
</div>
	  
	  
      
	  
	  </div>
    <div id="menu1" class="container tab-pane fade" style="background-color:#FF9999", style="border-color:#33FF00"><br>
      <h3>WHY JOIN WITH US</h3>
      <p>1.Minimum joining.</p>
	  <p>2.Highest Matrix plan.</p>
	  <p>3.48 hours payout. </p>
	  <p>4.Power line carry forward for life time.</p>
	  <p>5.Easy to explain & share.</p>
	  </div> 
	  
  
    <div id="menu2" class="container tab-pane fade" style="background-image:url(images/bg.jpg)"><br>
         <form action="" method="GET">
                         
                                <div class="col-md-12">
								 <center><div class="row">
								
                                    <center><div class="col-sm-4 p-1 "><input type="text" name="username" placeholder="username" value="<?php if(isset($_GET['username'])){echo $_GET['username'];} ?>" class="form-control" ></div>
                                </div>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary">Search</button> 
                                </div>
								
								</div>
								</center></center>
                            
                    </form>
						<div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","registrationdb");

                                    if(isset($_GET['username']))
                                    {
                                        $username = $_GET['username'];

                                        $query = "SELECT * FROM user1 WHERE username='$username' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div class="form-group mb-3">
                                                    <center><div class="col-sm-6 p-1 "> <input type="text" value="<?= $row['email']; ?>" class="form-control" disabled="disabled"></div></center>
                                                </div>
                                                <div class="form-group mb-3">
                                                    
                                                    <center><div class="col-sm-6 p-1 "><input type="text" value="<?= $row['mobile']; ?>" class="form-control" disabled="disabled"></div></center>
                                                </div>
                                                <div class="form-group mb-3">
                                                    
                                                    <center><div class="col-sm-6 p-1 "><input type="text" value="<?= $row['date']; ?>" class="form-control" disabled="disabled"></div></center>
													
                                                </div>
												<div class="form-group mb-3">
                                                    
                                                    <center><div class="col-sm-6 p-1 "><input type="text" value="<?= $row['income']; ?>" class="form-control" disabled="disabled"></div></center>
													
                                                </div>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>
						
				  </div>
  </div>
</div>


                        
                        

                    
                </div>
				
				
					
     <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
 
  
 
</div>

<div class="container-fluid mt-3">
  
  </div>

	  
	  
	  
	  
	  
	  </div>

            </div>
		 
	  
  
        </div>
		
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	
	
	
	
	
	
	</div> 
    <div class="card-footer">
	
	<div class="cs-footer footer-v1 default-footer">
                    <div class="footer-top">
            <div class="container">
                <div class="row">
                     <div class="col-lg-4  col-md-4  col-sm-6 col-xs-12"><div class="widget widget-newsletter fancy"><div class="widget-title"><h5>Newsletter</h5></div>		<div class="fieldset">
		    <p> Other latest news stay updated.</p>
		   
		    <div id="newsletter_mess_2" style="display:none" class="cs-error-msg"></div>
		</div>

		</div> </div> <div class="col-lg-4  col-md-4  col-sm-6 col-xs-12"><div class="widget widget_nav_menu"><div class="widget-title"><h5>About_us</h5></div><div class="menu-jobcareer-frequently-asked-questions-menu-container"><ul id="menu-jobcareer-frequently-asked-questions-menu" class="menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10578"><a href="http://www.justeachers.com/about-us/">About Us</a></li>

<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10577"><a href="http://www.justeachers.com/contact-us/">Contact Us</a></li>
</ul></div></div> </div> <div class="col-lg-4  col-md-4  col-sm-6 col-xs-12"><div class="widget widget-text widget-contact-information">            <div class="contact-info">
                <div class="widget-title"><h5>Contact Us</h5></div>                <div class="widgettext">
                    
                        <address>
                            <span> 
                                +91 7301312523<br>
                                Rajarati013@gmail.com                            </span>
                        </address>
                                               
                                        </div>
            </div>
            </div> </div>                </div>
            </div>
        </div>
            </div>
	
	
	
	
	
	
	
	
	
	
	</div>
  </div>
</div>

</body>
</html>
