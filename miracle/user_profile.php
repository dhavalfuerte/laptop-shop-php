<?php session_start(); ?>
<?php include('include/header.php'); ?>
<?php include('include/config.php'); ?>
<link rel="stylesheet" href="CSS/style1.css" />

<html
	<body>
		<div id="round_cornar">
<?php 
	$email=$_SESSION['e_id'];
	$select_qry="select * from register_user where eid='$email'";
	$test=mysql_query($select_qry);
	$row=mysql_fetch_array($test);
?>
					<div class="page_title" style="">User Profile</div>
           			<form method="post" action="update_profile.php" enctype="multipart/form-data">
           				 <div class="formrowgrey">
        						<div class="formleft"><strong>User Name</strong><span id="">*</span></div>
           						<div class="formright">
                					<input class="textbox" value="<?php echo $row['user_nm'] ?>" readonly >
            	 				</div>
       					</div>
                        
                        <div class="formrowgrey">
                            <div class="formleft"><strong>First Name</strong><span id="">*</span></div>
                            <div class="formright">
                                <input class="textbox" value="<?php echo $row['user_fnm'] ?>" readonly >
                            </div>
                        </div>
                        
                        <div class="formrowgrey">
                            <div class="formleft"><strong>Last Name</strong><span id="">*</span></div>
                            <div class="formright">
                                <input class="textbox" value="<?php echo $row['user_lnm'] ?>"readonly >
                            </div>
                        </div>
            
                        <div class="formrow">
                            <div class="formleft"><strong>Email Id</strong><span id="es">*</span></div>
                            <div class="formright">
                                <input class="textbox" value="<?php echo $row['eid'] ?>"readonly >
                            </div>
                        </div>
                        
                        <div class="formrow">
                            <div class="formleft"><strong>Password</strong><span id="ps">*</span></div>
                            <div class="formright">
                                <input class="textbox" value="<?php echo $row['pwd'] ?>"readonly >
                            </div>
                        </div>
                        
                        <div class="formrowgrey">
                            <div class="formleft"><strong>Contact No</strong><span id="">*</span></div>
                            <div class="formright">
                                <input class="textbox" value="<?php echo $row['contect_no'] ?>" readonly >
                            </div>
                        </div>
            
                        <div class="formrow">
                            <div class="formleft"><strong>Address</strong><span id="es">*</span></div>
                            <div class="formright">
                                <input class="textbox"  value="<?php echo $row['address'] ?>" readonly >
                            </div>
                        </div>
            
                        <div class="formrowgrey">
                             <div class="formleft"><strong>City</strong><span id="">*</span></div>
                             <div class="formright">
                                 <input class="textbox" value="<?php echo $row['city'] ?>" readonly >
                             </div>
                        </div>
            
                        <div class="formrow">
                            <div class="formleft"><strong>Pincode</strong><span id="">*</span></div>
                            <div class="formright">
                                <input class="textbox" value="<?php echo $row['pincode'] ?>" readonly >
                            </div>
                        </div>
            
                        <div class="formrowgrey">
                            <div class="formleft"><strong>Profile Picture</strong><span id="">*</span></div>
                            <div class="formright">
                               <?php echo "<img src='".$row['profile_picture']."' height='80' width='90'/>"  ?>                        
							   </div>
                        </div>
            
                        <div class="formrow">
                             <div class="buttons">
                                <center><input class="button_login" type="submit" name="submit" value="Edit Profile" />
                                        
                                </center>
                             </div>
                        </div>	
                        </form>		
       
       
       	</div>
    </body>
</html>

<?php include('include/footer.php'); ?> 