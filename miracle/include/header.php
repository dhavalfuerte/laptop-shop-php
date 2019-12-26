<?php session_start(); ?>
<link rel="stylesheet" href="../CSS/style.css" />
<html>
	<head>
    	<title>Miracle Laptop Shop</title>
    </head>
<body>
    <table width="100%" height="20%" border="0" bgcolor="#FFCC00">
    	<tr>
        	<td align="left"><h1>MIRACLE <font size="+1">Laptop Shop</font>
            <?php if(isset($_SESSION['e_id'])) 
            {
			?>
            	<div id="user">
           	
            		<font size="+1">Welcome,<a href="user_profile.php?id=<?php echo $_SESSION['e_id']; ?>"><?php echo $_SESSION['user_nm']; ?></a>
               		 &nbsp;
                	<a href="logout.php" style="text-transform:capitalize">logout</a>
            	</div>
            
            <?php } ?>
            </td>
        </tr>
     
        <td align="right">
        <div id='mbtnavbar'>
        	<ul id='mbtnav'>
            	<li><a href="index.php">HOME</a>
                	<a href="product_disp.php">PRODUCT</a>
                	<a href="aboutus.php">ABOUT</a>
                	<a href="feedback.php">FEEDBACK</a>
                    <?php
						if(isset($_SESSION['e_id'])!='')
						{
					?>
                    	<a href="logout.php">LOGOUT</a>
                    <?php
						}
						else
						{
					?>
                    	<a href="user_login.php">LOGIN</a>
                    <?php
					 	}
					?>   
               		<a href="./admin/login.php">ADMIN</a>
               </li>
          </ul>
         </div>
         </td>
         
   	</table>
</body>
</html>
     
            
        