<?php include('include/header.php'); ?>
<link rel="stylesheet" href="css/style.css" />
<div id="container">
<div id="round_corner_login">
<?php
	if(isset($_SESSION['msg']))
    {
    	echo $_SESSION['msg'];
		unset($_SESSION['msg']);
    }?>
<form method="post" action="login1.php">

				<div class="box_head1">
    						Login
   				 </div>
    
   				 <div class="formrow_login">
    						<div><strong>User Name*</strong></div>
            				<div class="formright">
           		 					<input type="text"	name="eid"  placeholder="Enter admin email!!!" class="size4" required/>
            				</div>
     			</div>
     
     			<div class="formrowgrey_login">
     						<div><strong>Password*</strong></div>
            				<div class="formright">
           			 				<input type="password"	name="pwd" class="size4" placeholder="Enter admin password!!!" required />
            				</div>
     			</div>
     			<div class="buttons">
    					 <input type="submit" name="submit" class="button" value="Login" />
    					 <input type="reset" class="button" value="reset" />
    			 </div>
</form>
</div>
</div>
<?php include('include/footer.php'); ?>