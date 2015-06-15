<?php
session_start(); 
if ($_SESSION['color'] == "true") {
	//do nothing :)
}
else {
	echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<title>Administration Console</title>
		
		<!--                       CSS                       -->
	  
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
	  
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
		
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />	
		
		<!-- Colour Schemes
	  
		Default colour scheme is green. Uncomment prefered stylesheet to use it.
		
		<link rel="stylesheet" href="resources/css/blue.css" type="text/css" media="screen" />
		
		<link rel="stylesheet" href="resources/css/red.css" type="text/css" media="screen" />  
	 
		-->
<link rel="stylesheet" href="resources/css/orange.css" type="text/css" media="screen" />  
		
		<!-- Internet Explorer Fixes Stylesheet -->
		
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="resources/css/ie.css" type="text/css" media="screen" />
		<![endif]-->
		
		<!--                       Javascripts                       -->
  
		<!-- jQuery -->
		<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
		
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="resources/scripts/facebox.js"></script>
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>
		
		<!-- Internet Explorer .png-fix -->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->
		


    <script type="text/javascript" src="jquery-1.7.1.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $("#postme").click(function(){
	var cid = $("#CID").val();
    // var email = $("#email").val();
     var status = $("#status").val();
     var pwd = $("#pwd").val();
    var descrip = $("#descrip").val();
   // var url = $("#url").val();

    $.ajax({
    type: "POST",
    url : "update.php",
    data: "cid=" + cid +  "&status=" + status  + "&pwd=" + pwd  + "&descrip=" + descrip,
    success: function(){
          alert("success");
           $("#update").slideDown();
      },
      error:function(){
          alert("failure");
         $("#update1").slideDown();
      }   
    });
    });
    });
    </script>


	</head>
  
	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#">Administration Console</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="resources/images/logo.png" alt="Administration Console logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Hello, Admin, <br />
				<br />
				<!--a href="#" title="View the Site">View the Site</a--> <a href="logout.php" title="Sign Out">Sign Out</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
	
				
				<li> 
					<a href="#" class="nav-top-item current"> <!-- Add the class "current" to current menu item -->
Accounts
					</a>
					<ul>
					
						<li><a href="admin.php">Manage Accounts</a></li> <!-- Add class "current" to sub menu items also -->
						<li><a class="current" href="create.php">Create New Account</a></li>
				
					</ul>
				</li>
				
				
			
				
			</ul> <!-- End #main-nav -->
			
			<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
				
				<h3>3 Messages</h3>
			 
				<p>
					<strong>17th May 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>2nd May 2009</strong> by Jane Doe<br />
					Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>25th April 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
				
				
			</div> <!-- End #messages -->
			
		</div></div> <!-- End #sidebar -->
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<!--h2>Welcome, Admin</h2-->
						
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Edit Account---ADMIN</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Edit Account</a></li> <!-- href must be unique and match the id of target div -->
						
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					

					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
					
						<form action="" method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								    <div class="notification success png_bg" id="update" style="display:none;">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Account Edited Succesfully!
				</div>
			</div>
			
			  <div class="notification success png_bg" id="update1" style="display:none;">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					WARNING!
				</div>
			</div>
			
			 <div class="notification success png_bg" id="wrong" style="display:none;">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Account not Edited Sorry!
				</div>
			</div>
			
			<?php
						$con=mysqli_connect("localhost","militiat_chadmin","Temp0114!","militiat_brandcoder");
						//$con=mysqli_connect("localhost","root","","test");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }


						  
						  
						  
						$result = mysqli_query($con,"SELECT * FROM channels where channelID='".$_GET['cid']."'");
						$row = mysqli_fetch_array($result)
			?>
								<p>
								<label>Account ID:</label>
										<input class="text-input medium-input" type="text" id="CID" readonly="readonly" name="CID" value="<?php echo $row['channelID']; ?>" /> 
										<br /><small>Create a unique ID for the account. Should start with ext_ prefix</small>
								</p>
								<p>
									<label>Reset Password:</label>
									<input class="text-input medium-input" type="text" id="pwd" name="pwd" />
									<br /><small>Create a New Password</small>
								</p>
								
								<p>
									<label>Account Description:</label>
									<input class="text-input medium-input" type="text" id="descrip" name="descrip" />
									<br /><small>Brief course description</small>
								</p>
								
								
								
								<p>
							<label>Account Status:</label>              
							<select name="status" id="status" class="small-input">
							<option value="active">Active</option>
							<option value="pending">Pending</option>
							<option value="blocked">Blocked</option>
							
						</select>
								</p>					
								
								
								
								<p>
									<!--input class="button" type="submit" value="Submit" /-->
									<input class="button" name="submit" value="Save Account" id="postme" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form-->
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			

			

			
			
			
			
			<div id="footer">
				<small>
						&#169; Copyright 2015 | Powered by <a href="http://brandcoder.com" target="_blank">BrandCoder</a> | <a href="#">Top</a>
				</small>
			</div><!-- End #footer -->
			
		</div> <!-- End #main-content -->
		
	</div></body>
  
</html>
