<!DOCTYPE html>
<?php
//if(isset($_POST['submit']))
//{
	session_start();
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
<title>Profile</title
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
</head>
<body>
<style>
body{ background-image: url("vardy.png");}
</style>
<div class="container">
			<header>
				<h1><span>Premier League</span><?php  echo $_SESSION["green"]; ?></h1>
            </header>       
     <!-- start header here-->
	<header>
<div id="fdw-pricing-table">

<?php

$user_name= $_SESSION["green"];
$query = mysqli_query($dbhandle,"SELECT * FROM users where user_name='".$user_name."'");

while($result = mysqli_fetch_array($query))
{
    $p1 =  $result['player1'];
	$p2 = $result['player2'];
    $p3 = $result['player3'];
	$p4 = $result['player4'];
//echo $result	["select user_name from users where "];

}

$query = mysqli_query($dbhandle,"SELECT * FROM users where user_name='".$user_name."'");
while($result = mysqli_fetch_array($query))
{
    $pt1 =  $result['point1'];
	$pt2 =  $result['point2'];
    $pt3 =  $result['point3'];
	$pt4 =  $result['point4'];
	
//echo $result	["select user_name from users where "];

}



?>


    <div class="plan plan1">
        <div class="header"><?php  echo $p1; ?> </div>
        <div class="price"><?php  echo $pt1; ?></div>  
        <div class="monthly"></div>      
    
        <a class="signup" href=""></a>         
    </div>

	
    <div class="plan plan2 popular-plan">
        <div class="header"><?php  echo $p2; ?></div>
        <div class="price"><?php  echo $pt2; ?></div>
        <div class="monthly"></div>  
     <!--   <ul>
            <li><b>5GB</b> Disk Space</li>
            <li><b>50GB</b> Monthly Bandwidth</li>
            <li><b>10</b> Email Accounts</li>
			<li><b>Unlimited</b> subdomains</li>			
        </ul> -->
        <a class="signup" href=""></a>            
    </div>
    <div class="plan plan3">
        <div class="header"><?php  echo $p3; ?></div>
        <div class="price"><?php  echo $pt3; ?></div>
        <div class="monthly"></div>
    <!--    <ul>
            <li><b>3GB</b> Disk Space</li>
            <li><b>25GB</b> Monthly Bandwidth</li>
            <li><b>5</b> Email Accounts</li>
			<li><b>Unlimited</b> subdomains</li>			
        </ul>  -->
        <a class="signup" href=""></a>        
    </div>
    <div class="plan plan4">
        <div class="header"><?php  echo $p4; ?></div>
        <div class="price"><?php  echo $pt4; ?></div>
        <div class="monthly"></div>
      <!--  <ul>
            <li><b>1GB</b> Disk Space</li>
            <li><b>10GB</b> Monthly Bandwidth</li>
            <li><b>2</b> Email Accounts</li>
			<li><b>Unlimited</b> subdomains</li>			
        </ul> -->
        <a class="signup" href=""></a>        
    </div> 	

	<div class="button1">
	<a href = "final_table.php"><center><input type = "submit" name = "button" value= "Points Table"></a>
	<a href = "newpage.php"><center><input type = "submit" name = "button" value= "Substitution">
	<a href = "logout.php"><center><input type = "submit" name = "button" value= "logout"></a>
	<div class="button1">
	
    </div>
	</div>
</div>
	</header><!-- end header -->
	

    
</div>
</body>
</html>
