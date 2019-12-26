<?php session_start();
if(!isset($_SESSION['name']))
{
	$_SESSION['msg']="please login first.......";
	header('location:login.php');
}?>
<?php include('include/header.php'); ?>
<link rel="stylesheet" href="css/style.css" />
<div id="container">
<div class="shell">
	<center><h1>Welcome Admin</h1></center>
    	<div id="content">
        		<div id="round_corner_welcome">
                		<div id="round_corner_icon">
                        		<a href="welcome.php">
                                <img src="images/home.png" height="100" width="100" />
                                </a>
                         </div>
                         <div id="round_corner_icon">
                        		<a href="admin.php">
                                <img src="images/admin.png" height="100" width="100" />
                                </a>
                         </div>
                         <div id="round_corner_icon">
                        		<a href="usermanagement.php">
                                <img src="images/user.GIF" height="100" width="100" />
                                </a>
                         </div>
                         <div id="round_corner_icon">
                        		<a href="product_list.php">
                                <img src="images/pro1.jpg" height="100" width="100" />
                                </a>
                         </div>
                           <div id="round_corner_icon">
                        		<a href="order.php">
                                <img src="images/order.jpg" height="100" width="100" />
                                </a>
                         </div>
                           <div id="round_corner_icon">
                        		<a href="feedback.php">
                                <img src="images/feedback.jpg" height="100" width="100" />
                                </a>
                         </div>
                 </div>
          </div>
</div>
</div>
<?php include('include/footer.php'); ?>