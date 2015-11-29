
<!DOCTYPE HTML>
<?php
session_start();
//if(isset($_POST['submit']))
//{
$username = "root";
$password = "";
$hostname = "localhost"; 
$database = "mac";

//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password , $database) 
 or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";

?>

<html>
<head>
<title>Premier League | Register </title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
 </head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="index.html"><img src="images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="shop.html">Fantasy</a></li>
						    	<li><a href="classes.html">Teams</a></li>
						    	<li><a href="shop.html">News</a></li>
						    	<li><a href="experiance.html">Fixtures</a></li>
						    	<li><a href="shop.html">Photos</a></li>
								<li><a href="contact.html">Standings</a></li>								
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
	    		  <!-- start search-->
				   <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
				     <ul class="icon1 sub-icon1 profile_img">
					 <li><a class="active-icon c1" href="#"> </a>
						<ul class="sub-icon1 list">
						  <div class="product_control_buttons">
						  	<a href="#"><img src="images/edit.png" alt=""/></a>
						  		<a href="#"><img src="images/close_edit.png" alt=""/></a>
						  </div>
						   <div class="clear"></div>
						  <li class="list_img"><img src="images/1.jpg" alt=""/></li>
						  <li class="list_desc"><h4><a href="#">Manager 1</a></h4></li>
						  <div class="login_buttons">
							 <div class="check_button"><a href="checkout.html">Sign out</a></div>
							 <div class="login_button"><a href="login.php">Login</a></div>
							 <div class="clear"></div>
						  </div>
						  <div class="clear"></div>
						</ul>
					 </li>
				   </ul>
		        <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	  </div>
     <div class="main">
      <div class="shop_top">
	     <div class="container">
		  <?php
 if(isset($_POST['save']))
   {
    // session_start();
    //$user_name = mysqli_real_escape_string(mysqli,$_POST['name']);
    $user_name = $_POST['name'];
	
	$sql = "select * from users where user_name= '".$user_name."'";
	$result = mysqli_query($dbhandle,$sql);
	if(mysqli_num_rows($result)>=1)
	{
		echo "<script> alert('username is already exists') </script>";
	}
	else
	{
	
	$_SESSION["purple"]= $user_name;
	
    //$user_pass = mysqli_real_escape_string(mysqli,$_POST['pass']);
    $user_pass = $_POST['pass'];
    //$user_email = mysqli_real_escape_string(mysqli,$_POST['email']);
    $user_email = $_POST['email'];
  //  echo $user_name.$user_pass.$user_email;
  
  $sql = "INSERT INTO users (user_name, user_pass, user_email) values ('".$user_name."', '".$user_pass."' , '".$user_email."')";
  // $dbhandle->query("INSERT INTO users (user_name, user_pass, user_email) values ('".$user_name."', '".$user_pass."' , '".$user_email."')");
  $dbhandle->query($sql);
	}
 
 //if(!(($dbhandle->query($sql))==TRUE))
 //{
	//echo "<script> alert('username is already in use') </script>";
	 
 //}
   }
   
   ?>
						<form action="" method="post"> 
								<div class="register-top-grid">
										<h3>PERSONAL INFORMATION</h3>
										<div>
											<span>First Name<label>*</label></span>
											<input type="text" name="name"> 
										</div>
										<div>
											<span>Last Name<label>*</label></span>
											<input type="text"> 
										</div>
										<div>
											<span>Email Address<label>*</label></span>
											<input type="text" name = "email"> 
										</div>
										<div class="clear"> </div>
											<a class="news-letter" href="#">
												<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
											</a>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										<h3>LOGIN INFORMATION</h3>
										<div>
											<span>Password<label>*</label></span>
											<input type="password" name = "pass">
										</div>
										<div>
											<span>Confirm Password<label>*</label></span>
											<input type="text">
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<div class="button1">
								<input type="submit" style="align:center" value="save" name="save" id="submit">
							   <!--<a href="one-1.php"><input type="submit" name="submit" value="submit"></a>-->
							   <a href="one-1.php"><button type="button" id="submit"> Next </button> 
							   </div>
						</form>
					</div>
		   </div>
	  </div>
	  <div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Features</h4>
							<li><a href="#">Fantasy League</a></li>
							<li><a href="#">Teams</a></li>
							<li><a href="#">Fixtures</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Photos</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>About</h4>
							<li><a href="#">Careers and internships</a></li>
							<li><a href="#">Sponsorships</a></li>
							<li><a href="#">Team</a></li>
							<li><a href="#">Catalog Request/Download</a></li>
						</ul>
					</div>
					<!--
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Customer Support</h4>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Shipping and Order Tracking</a></li>
							<li><a href="#">Easy Returns</a></li>
							<li><a href="#">Warranty</a></li>
							<li><a href="#">Replacement Binding Parts</a></li>
						</ul>
					</div>-->
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Newsletter</h4>
							<div class="footer_search">
				    		   <form>
				    			<input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
				    			<input type="submit" value="Go">
				    		   </form>
					        </div>
							<ul class="social">	
							  <li class="facebook"><a href="#"><span> </span></a></li>
							  <li class="twitter"><a href="#"><span> </span></a></li>
							  <li class="instagram"><a href="#"><span> </span></a></li>	
							  <li class="pinterest"><a href="#"><span> </span></a></li>	
							  <li class="youtube"><a href="#"><span> </span></a></li>										  				
						    </ul>
		   				</ul>
					</div>
				</div>
				<div class="row footer_bottom">
				      <dl id="sample" class="dropdown">
				        <dt><a href="#"><span>Change Region</span></a></dt>
				        <dd>
				            <ul>
				                <li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
				                <li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
				                <li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
				                <li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
				                <li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
				                <li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
				            </ul>
				         </dd>
	   				  </dl>
   				</div>
			</div>
		</div>
</body>	
</html>