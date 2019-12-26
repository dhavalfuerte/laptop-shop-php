<?php session_start(); ?>
<link rel="stylesheet" href="../CSS/style.css" />
<html>
	<head>
    	<title>Miracle Laptop Shop</title>
    </head>
<body>
    <table width="100%" height="20%" border="0" bgcolor="#ba4c32">
    	<tr>
        	<td align="left"><h1>MIRACLE <font size="+1">Laptop Shop</font>
            <?php if(isset($_SESSION['name'])) 
            {
			?>
            	<div id="user">
           	
            		<font size="+1" style="color:#FFFFFF;"> Welcome,<a style="color:#FFFFFF;" href="welcome.php?id=<?php echo $_SESSION['name']; ?>"><?php echo $_SESSION['name']; ?></a>
               		 &nbsp;
                	<a style="color:#FFFFFF;" href="logout.php" style="text-transform:capitalize">logout</a>
            	</div>
            
            </td>
        </tr>
     	
      	  	<td align="right">
        		<div id='mbtnavbar'>
        			<ul id='mbtnav'>
                 
            				<li><a href="welcome.php">Home</a>
                				<a href="admin.php">Admin</a>
                   				<a href="usermanagement.php">Register User</a>
                                <a href="company_list.php">Company</a>
                				<a href="product_list.php">Product</a>
                   				<a href="order.php">Order</a>
                				<a href="feedback.php">FeedBack</a>
              				 </li>
                         
          			</ul>
         		</div>
                <?php } ?>
        	 </td>
      
         
   	</table>
</body>
</html>
     
           
        