<?php
session_start();
if(isset($_SESSION['name'])){
 echo "<script>window.location='index.php';</script>";
	
}
?><!DOCTYPE HTML>
<html>
<head>
<title>Election a Society and People Category Flat Bootstrap Responsive Website Template | Contact :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Election Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="1/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="1/css/style.css">
<!---strat-slider---->
<script type="text/javascript" src="1/js/jquery-1.11.1.min.js"></script>
<!---//-slider---->
</head>
<body>
<!-- header -->
	<?php include "1/include/header.php"; ?>
	<div class="header_bottom">
	</div>
<!-- //end-header -->
<!-- banner1 -->
	
<?php
include 'Application/DB_Functions.php';  // Include Db_function file for asseccing the function
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function


 if(isset($_POST['username']) && isset($_POST['password']))
            {
        $name=$_POST['username'];
        $password=$_POST['password']; 

        if ($obj->minCheckLogin($name,$password)==TRUE) // Here we call the CheckLogin function for admin login through the object        
        {
            $_SESSION['minemail']=$name;
		
    
  	$obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
	$sql = $obj->db->prepare("select * from miners where email='$name'");
	$sql->execute();
	while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
		 $_SESSION['minname']=$row['name'];
		 $_SESSION['minid']=$row['ID'];
	
	}
	echo "<script>window.location='miners/dashboard.php';</script>";
	}
        else
        {
        echo "<script>alert('Incorrect Username and Password');</script>";
        }

} ?>
<!-- //banner1 -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<h3>Miner Login</h3>
			
			<div class="contact-grid">
				
				<div class="col-md-7 contact-right">
					  <form method="post" action="">
					    	
<span>Email</span><br>
<span><input type="text" name="username" required class="form-control" style="width:50%;"></span>
						    <br><br>
						    	<span>Password</span>
<span><input type="password" name="password" required class="form-control" style="width:50%;"></span>
						   
						   
						  
					<input type="submit" value="submit us"></label>
						 
					    </form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
<!-- //contact -->
<!-- footer-top -->
	<div class="footer-top">
		<div class="container">
			
		</div>
	</div>
<!-- //footer-top -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			
			<div class="footer-copy">
				<p>&copy 2023 Electronic Voting System using Blockchain</p>
			</div>
		</div>
	</div>
<!-- //footer -->
		<!-- scroll_top_btn -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
<!-- for bootstrap working -->
	 <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
</body>
</html>