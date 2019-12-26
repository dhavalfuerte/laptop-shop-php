<?php include("include/header.php"); session_start(); ?>
<link rel="stylesheet" href="css/style1.css" />

<html>
	<head>
    	<title>Miracle Laptop Shop</title>
    </head>
<body>
	<div id="round_corner_login">
    	<div class="page_title">Login</div>
    	<form action="login1.php" enctype="multipart/form-data" method="post">
        <?php
			if(isset($_SESSION['msg']))
			{
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
        
        <div class="formrowgrey">
        	<div class="formleft_login"><strong>Email id</strong><span id="es">*</span></div>
            <div class="formright">
            	<input class="textbox" type="text" id="email" name="eid" placeholder="Enter Your Email..." required />
            </div>
        </div>
        
        <div class="formrow">
        	<div class="formleft_login"><strong>Password</strong><span id="ps">*</span></div>
            <div class="formright">
            	<input class="textbox" type="password" id="password" name="pwd" placeholder="Enter Your Password..." required />
            </div>
        </div>
        
        <div class="formrow">
        	<div class="formleft_login">&nbsp;</div>
            <div class="formright">
            	<div class="buttons">
            		<input class="button_login" type="submit" id="password" name="submit" value="Login" style="background-color:#33CC00" />
                    <input type="reset" class="button_login" value="reset" />
                </div>
            </div>
       </div>
       
       <div class="formrowgrey">
        	<div class="formleft_login"><samp>&nbsp;</samp></div>
            <div class="formright">
            	<a href="register.php" style="color:#666666">Create New Account</a>
            </div>
        </div>
     </form>
   </div>
</body>    
</html>
<br><br><br><br><br><br><br><br><br><br>

<? include("include/footer.php"); ?>