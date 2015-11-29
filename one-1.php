
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
<title>
	Fantasy Football League
</title>
<head>
	<link href="./css/bootstrap.css" rel="stylesheet">
</head>
<style>
body{ background-image: url("premier-league-slide1-1.png");}
</style>
<body>
	<!-- Navbar -->
<!--	
	<div class="navbar-wrapper">
      	<div class="container">
        	<nav class="navbar navbar-default navbar-fixed-top">
          		<div class="container">
            		<div class="navbar-header">
			            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </button>
              			<a class="navbar-brand" href="#" style="color: black">M3 Services</a>
            		</div>
            		<div id="navbar" class="navbar-collapse collapse">
		             	<ul class="nav navbar-nav">
		                	
					  	</ul>
					  	<ul class="nav navbar-nav navbar-right">

				        </ul>
				    </div>
        		</div>
        	</nav>
      	</div>
    </div>
-->
    <!-- Navbar -->

	<div class="container">
		<div class="navbar navbar-fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#" alt="Fantasy Football League">Home</a>
				<div class="nav-collapse collapse navbar-responsive-collapse">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#"></a>
						</li>
						<li>
							<a href="#"></a>
						</li>


					</ul>
				</div>	
			</div>
		</div><!-- end of navbar -->	

		<center>
			<font color = "white"><h2>FANTASY FOOTBALL LEAGUE</h2></font>
			<br><font color = "white"><h3>REGISTER</h3></font>
		</center>
		<br><br>
		<div class="row">
	        <form class="form-horizontal" role="form" method="post" action="" id="register-form">
			
			 <?php
 if(isset($_POST['submit']))
   {
    // session_start();
    //$user_name = mysqli_real_escape_string(mysqli,$_POST['name']);
	$user_name= $_SESSION["purple"];
    $team_name = $_POST['teamname'];
    //$user_pass = mysqli_real_escape_string(mysqli,$_POST['pass']);
    $player1 = $_POST['player1'];
    //$user_email = mysqli_real_escape_string(mysqli,$_POST['email']);
    $player2 = $_POST['player2'];
  //  echo $user_name.$user_pass.$user_email;
  $player3 = $_POST['player3'];
  $player4 = $_POST['player4'];
  $player5 = $_POST['player5'];
  $player6 = $_POST['player6'];
  $league_name = $_POST['leaguename'];
  
   if($player1==$player2 || $player3==$player4 || $player5==$player6)
  {
	  echo "<script> alert('please verify if all the selected players are different') </script>";
  }
  elseif($player1==$player3 || $player1==$player4 || $player1==$player5 || $player1==$player6)
  {
	  echo "<script> alert('please verify if all the selected players are different') </script>";
  }
  elseif($player2==$player3 || $player2==$player4 || $player2==$player5 || $player2==$player6)
  {
	  echo "<script> alert('please verify if all the selected players are different') </script>";
  }
  elseif($player3==$player1 || $player3==$player2 || $player3==$player5 || $player3==$player6)
  {
	  echo "<script> alert('please verify if all the selected players are different') </script>";
  }
  elseif($player4==$player1 || $player4==$player2 || $player4==$player5 || $player4==$player6)
  {
	  echo "<script> alert('please verify if all the selected players are different') </script>";
  }
  elseif($player5==$player1 || $player5==$player2 || $player5==$player3 || $player5==$player4)
  {
	  echo "<script> alert('please verify if all the selected players are different') </script>";
  }
  elseif($player6==$player1 || $player6==$player2 || $player6==$player3 || $player6==$player4)
  {
	  echo "<script> alert('please verify if all the selected players are different') </script>";
  }
  else{
  
   $dbhandle->query("UPDATE users set team_name='".$team_name."', player1='".$player1."', player2='".$player2."', player3='".$player3."', player4='".$player4."', player5='".$player5."', player6='".$player6."', league_name='".$league_name."' where user_name='".$user_name."'"); 
  //$dbhandle->query("UPDATE users SET team name='gooood' where user_name='murugan1'");
  }
   }
   ?>
   
	          	<div class="row">
	          		<div class="form-group">
	          			<label for="Name" class="col-sm-4 control-label"><font color = "white">Name:<font color = "red" size = "3">*</font></label>
	            		<div class="col-sm-4">
	              			<input type="text" name="username" class="form-control" id="username" placeholder="Full name" data-validation-engine="validate[required]" data-errormessage-value-missing="Name is required!">
	            		</div>
	          		</div>
	           	</div>

	           	<div class="row">
	           		<div class="form-group">
		              	<label for="MobileNo" class="col-sm-4 control-label">Email:<font color = "red" size = "3">*</font></label>
		            	<div class="col-sm-4">
		              		<input type="text" name="email" class="form-control" id="email" placeholder="Email address" data-validation-engine="validate[required]" data-errormessage-value-missing="Email address is required!">
		            	</div>
	          		</div>                
				</div>  

				<div class="row">
					<div class="form-group">
	              		<label for="contact" class="col-sm-4 control-label">Team Name:<font color = "red" size = "3">*</font></label>
			            <div class="col-sm-4">
			              	<input type="text" name="teamname" class="form-control" id="probIdentified" placeholder="Name of your team" data-validation-engine="validate[required]" data-errormessage-value-missing="Problem identified is required!">
			            </div>
	          		</div>
			    </div>
				
			    <div class="row">
			    	<div class="form-group">
		             	<label for="email" class="col-sm-4 control-label">Player 1:<font color = "red" size = "3">*</font></label>
			            <div class="col-sm-4">
				            <select class="form-control" name="player1" id="services" data-validation-engine="validate[required]" data-errormessage-value-missing="Required services is required!">
				            	<option value="0">Select a player</option>
				            	<option value="100" disabled>-----------------------------</option>
				                <option value="Wayne Rooney">Wayne Rooney</option>
				                <option value="Cesc Fabregas">Cesc Fabregas</option>         
				               	<option value="Eden Hazard">Eden Hazard</option>     
				               	<option value="Alexis Sanchez">Alexis Sanchez</option>     
				               	<option value="Mesut Ozil">Mesut Ozil</option>     
				               	<option value="Coutinho">Coutinho</option>     
				               	<option value="Memphis Depay">Memphis Depay</option>     
				               	<option value="Kun Aguero">Kun Aguero</option>     
				               	<option value="John Terry">John Terry</option>     
				               	<option value="Koscielny">Koscielny</option>     
				               	<option value="Chris Smalling">Chris Smalling</option>     
				               	<option value="Vincent Kompany">Vincent Kompany</option>     
				               	<option value="Matteo Darmian">Matteo Darmian</option>     
				               	<option value="Nicholas Otamendi">Nicholas Otamendi</option>     
				               	<option value="David Silva">David Silva</option>     
				               	<option value="Raheem Sterling">Raheem Sterling</option>     
				               	<option value="Anthony Martial">Anthony Martial</option>  
				            </select>
			            </div>
	          		</div>
				</div>

				

			    <div class="row">
			    	<div class="form-group">
		             	<label for="email" class="col-sm-4 control-label">Player 2:<font color = "red" size = "3">*</font></label>
			            <div class="col-sm-4">
				            <select class="form-control" name="player2" id="model" data-validation-engine="validate[required]" data-errormessage-value-missing="Vehicle Model is required!">
				            	<option value="0">Select a player</option>
				            	<option value="100" disabled>-----------------------------</option>
				                <option value="Wayne Rooney">Wayne Rooney</option>
				                <option value="Cesc Fabregas">Cesc Fabregas</option>         
				               	<option value="Eden Hazard">Eden Hazard</option>     
				               	<option value="Alexis Sanchez">Alexis Sanchez</option>     
				               	<option value="Mesut Ozil">Mesut Ozil</option>     
				               	<option value="Coutinho">Coutinho</option>     
				               	<option value="Memphis Depay">Memphis Depay</option>     
				               	<option value="Kun Aguero">Kun Aguero</option>     
				               	<option value="John Terry">John Terry</option>     
				               	<option value="Koscielny">Koscielny</option>     
				               	<option value="Chris Smalling">Chris Smalling</option>     
				               	<option value="Vincent Kompany">Vincent Kompany</option>     
				               	<option value="Matteo Darmian">Matteo Darmian</option>     
				               	<option value="Nicholas Otamendi">Nicholas Otamendi</option>     
				               	<option value="David Silva">David Silva</option>     
				               	<option value="Raheem Sterling">Raheem Sterling</option>     
				               	<option value="Anthony Martial">Anthony Martial</option>     
				            </select>
			            </div>
	          		</div>
				</div>

			    <div class="row">
			    	<div class="form-group">
		             	<label for="email" class="col-sm-4 control-label">Player 3:<font color = "red" size = "3">*</font></label>
			            <div class="col-sm-4">
				            <select class="form-control" name="player3" id="model2" data-validation-engine="validate[required]" data-errormessage-value-missing="Vehicle Make is required!">
				            	<option value="0">Select a player</option>
				            	<option value="100" disabled>-----------------------------</option>
				                <option value="Wayne Rooney">Wayne Rooney</option>
				                <option value="Cesc Fabregas">Cesc Fabregas</option>         
				               	<option value="Eden Hazard">Eden Hazard</option>     
				               	<option value="Alexis Sanchez">Alexis Sanchez</option>     
				               	<option value="Mesut Ozil">Mesut Ozil</option>     
				               	<option value="Coutinho">Coutinho</option>     
				               	<option value="Memphis Depay">Memphis Depay</option>     
				               	<option value="Kun Aguero">Kun Aguero</option>     
				               	<option value="John Terry">John Terry</option>     
				               	<option value="Koscielny">Koscielny</option>     
				               	<option value="Chris Smalling">Chris Smalling</option>     
				               	<option value="Vincent Kompany">Vincent Kompany</option>     
				               	<option value="Matteo Darmian">Matteo Darmian</option>     
				               	<option value="Nicholas Otamendi">Nicholas Otamendi</option>     
				               	<option value="David Silva">David Silva</option>     
				               	<option value="Raheem Sterling">Raheem Sterling</option>     
				               	<option value="Anthony Martial">Anthony Martial</option> 
				            </select>
			            </div>
	          		</div>
				</div>
				
				
				<div class="row">
			    	<div class="form-group">
		             	<label for="email" class="col-sm-4 control-label">Player 4:<font color = "red" size = "3">*</font></label>
			            <div class="col-sm-4">
				            <select class="form-control" name="player4" id="model3" data-validation-engine="validate[required]" data-errormessage-value-missing="Vehicle Model is required!">
				            	<option value="0">Select a player</option>
				            	<option value="100" disabled>-----------------------------</option>
				            	<option value="Wayne Rooney">Wayne Rooney</option>
				                <option value="Cesc Fabregas">Cesc Fabregas</option>         
				               	<option value="Eden Hazard">Eden Hazard</option>     
				               	<option value="Alexis Sanchez">Alexis Sanchez</option>     
				               	<option value="Mesut Ozil">Mesut Ozil</option>     
				               	<option value="Coutinho">Coutinho</option>     
				               	<option value="Memphis Depay">Memphis Depay</option>     
				               	<option value="Kun Aguero">Kun Aguero</option>     
				               	<option value="John Terry">John Terry</option>     
				               	<option value="Koscielny">Koscielny</option>     
				               	<option value="Chris Smalling">Chris Smalling</option>     
				               	<option value="Vincent Kompany">Vincent Kompany</option>     
				               	<option value="Matteo Darmian">Matteo Darmian</option>     
				               	<option value="Nicholas Otamendi">Nicholas Otamendi</option>     
				               	<option value="David Silva">David Silva</option>     
				               	<option value="Raheem Sterling">Raheem Sterling</option>     
				               	<option value="Anthony Martial">Anthony Martial</option>  
				            </select>
			            </div>
	          		</div>
				</div>
				
				<div class="row">
			    	<div class="form-group">
		             	<label for="email" class="col-sm-4 control-label">Player 5:<font color = "red" size = "3">*</font></label>
			            <div class="col-sm-4">
				            <select class="form-control" name="player5" id="model4" data-validation-engine="validate[required]" data-errormessage-value-missing="Vehicle Model is required!">
				            	<option value="0">Select a player</option>
				            	<option value="100" disabled>-----------------------------</option>
				            	<option value="Wayne Rooney">Wayne Rooney</option>
				                <option value="Cesc Fabregas">Cesc Fabregas</option>         
				               	<option value="Eden Hazard">Eden Hazard</option>     
				               	<option value="Alexis Sanchez">Alexis Sanchez</option>     
				               	<option value="Mesut Ozil">Mesut Ozil</option>     
				               	<option value="Coutinho">Coutinho</option>     
				               	<option value="Memphis Depay">Memphis Depay</option>     
				               	<option value="Kun Aguero">Kun Aguero</option>     
				               	<option value="John Terry">John Terry</option>     
				               	<option value="Koscielny">Koscielny</option>     
				               	<option value="Chris Smalling">Chris Smalling</option>     
				               	<option value="Vincent Kompany">Vincent Kompany</option>     
				               	<option value="Matteo Darmian">Matteo Darmian</option>     
				               	<option value="Nicholas Otamendi">Nicholas Otamendi</option>     
				               	<option value="David Silva">David Silva</option>     
				               	<option value="Raheem Sterling">Raheem Sterling</option>     
				               	<option value="Anthony Martial">Anthony Martial</option>      
				            </select>
			            </div>
	          		</div>
				</div>
				<div class="row">
			    	<div class="form-group">
		             	<label for="email" class="col-sm-4 control-label">Player 6:<font color = "red" size = "3">*</font></label>
			            <div class="col-sm-4">
				            <select class="form-control" name="player6" id="model5" data-validation-engine="validate[required]" data-errormessage-value-missing="Vehicle Model is required!">
				            	<option value="0">Select a player</option>
				            	<option value="100" disabled>-----------------------------</option>
				                <option value="Wayne Rooney">Wayne Rooney</option>
				                <option value="Cesc Fabregas">Cesc Fabregas</option>         
				               	<option value="Eden Hazard">Eden Hazard</option>     
				               	<option value="Alexis Sanchez">Alexis Sanchez</option>     
				               	<option value="Mesut Ozil">Mesut Ozil</option>     
				               	<option value="Coutinho">Coutinho</option>     
				               	<option value="Memphis Depay">Memphis Depay</option>     
				               	<option value="Kun Aguero">Kun Aguero</option>     
				               	<option value="John Terry">John Terry</option>     
				               	<option value="Koscielny">Koscielny</option>     
				               	<option value="Chris Smalling">Chris Smalling</option>     
				               	<option value="Vincent Kompany">Vincent Kompany</option>     
				               	<option value="Matteo Darmian">Matteo Darmian</option>     
				               	<option value="Nicholas Otamendi">Nicholas Otamendi</option>     
				               	<option value="David Silva">David Silva</option>     
				               	<option value="Raheem Sterling">Raheem Sterling</option>     
				               	<option value="Anthony Martial">Anthony Martial</option>  
				            </select>
			            </div>
	          		</div>
				</div>

				<div class="row">
					<div class="form-group">
	              		<label for="contact" class="col-sm-4 control-label">League Name:<font color = "red" size = "3">*</font></label>
			            <div class="col-sm-4">
			              	<input type="text" name="leaguename" class="form-control" id="plateNo" placeholder="Name of a league to join" data-validation-engine="validate[required]" data-errormessage-value-missing="Car plate number is required!">
			            </div>
	          		</div>
			    </div>
			    <br><br>

		        <div class="row">
		        	<div class="form-group">
			          	<!-- <div class="col-sm-offset-2 col-sm-10"> -->
			          	<div align="center">
			            	<button type="submit" class="btn btn-primary" id="register" name="submit">Register</button>&nbsp;&nbsp;&nbsp;
			          		<!--<button type="submit" class="btn btn-primary" id="reset" name="reset">Log In</button><a href="login.php"></a-->
			          	    <a href="login.php">Continue to Login</a>
						</div>
		       		</div>
		       	</div>
	     	</form>
	    </div><!-- end of div row -->
    </div><!-- end of div container -->
</body>
</html>




