<?php session_start();
		$con=mysql_connect("localhost","root","");
	$db=mysql_select_db('miracle_shop',$con);
	if(isset($_POST['submit']))
	{
		$chk=$_POST['chk'];
		$email=$_SESSION['e_id'];
		$unm=$_POST['user_nm'];
		$ufnm=$_POST['user_fnm'];
		$ulnm=$_POST['user_lnm'];
		$eid=$_POST['eid'];
		$pwd=$_POST['pwd'];
		$con=$_POST['contect_no'];
		$add=$_POST['address'];
		$ct=$_POST['city'];
		$pin=$_POST['pincode'];
		$pro_img=$_POST['profile_picture'];
		if($_POST['submit']=='submit')
		{
			if($chk)
			{
			$path="images/profile_pic/".basename($_FILES['profile_pic']['name']);
			move_uploaded_file($_FILES['profile_pic']['tmp_name'],$path);	
			$qry="update register_user set user_nm ='$unm',user_fnm='$ufnm',`user_lnm` = '$ulnm',`eid` = '$eid',`pwd` = '$pwd',`contect_no` = '$con',`address` = '$add',`city` = '$ct',`pincode` = '$pin',`profile_picture` = '$path',`status` = '1' where eid='$email'" ;
			}
			else
			{
				$qry="update register_user set user_nm ='$unm',user_fnm='$ufnm',`user_lnm` = '$ulnm',`eid` = '$eid',`pwd` = '$pwd',`contect_no` = '$con',`address` = '$add',`city` = '$ct',`pincode` = '$pin',`status` = '1' where eid='$email'" ;
			}
			$res=mysql_query($qry);
			if($res)
			{
				header('location:user_profile.php');
			}
			else
			{
				echo "not insert";
			}	
		}
		else
		{
			echo "before value is submit";
		}
	}
	

 ?>
<?php include('include/header.php'); ?>
<?php include('include/config.php'); ?>
<link rel="stylesheet" href="CSS/style1.css" />

<html>
	<body>
		<div id="round_cornar">
<?php 
	
	$select_qry="select * from register_user where eid='$email'";
	$test=mysql_query($select_qry);
	$row=mysql_fetch_array($test);
?>
					<div class="page_title" style="">Update Profile</div>
           			<form method="post" action="" enctype="multipart/form-data">
           				 <div class="formrowgrey">
        						<div class="formleft"><strong>User Name</strong><span id="">*</span></div>
           						<div class="formright">
                					<input class="textbox" name="user_nm" value="<?php echo $row['user_nm'] ?>" >
            	 				</div>
       					</div>
                        
                        <div class="formrowgrey">
                            <div class="formleft"><strong>First Name</strong><span id="">*</span></div>
                            <div class="formright">
                                <input class="textbox" name="user_fnm" value="<?php echo $row['user_fnm'] ?>" >
                            </div>
                        </div>
                        
                        <div class="formrowgrey">
                            <div class="formleft"><strong>Last Name</strong><span id="">*</span></div>
                            <div class="formright">
                                <input class="textbox" name="user_lnm" value="<?php echo $row['user_lnm'] ?>" >
                            </div>
                        </div>
            
                        <div class="formrow">
                            <div class="formleft"><strong>Email Id</strong><span id="es">*</span></div>
                            <div class="formright">
                                <input class="textbox" name="eid" value="<?php echo $row['eid'] ?>" >
                            </div>
                        </div>
                        
                        <div class="formrow">
                            <div class="formleft"><strong>Password</strong><span id="ps">*</span></div>
                            <div class="formright">
                                <input class="textbox" name="pwd" value="<?php echo $row['pwd'] ?>">
                            </div>
                        </div>
                        
                        <div class="formrowgrey">
                            <div class="formleft"><strong>Contact No</strong><span id="">*</span></div>
                            <div class="formright">
                                <input class="textbox" name="contect_no"  value="<?php echo $row['contect_no'] ?>"  >
                            </div>
                        </div>
            
                        <div class="formrow">
                            <div class="formleft"><strong>Address</strong><span id="es">*</span></div>
                            <div class="formright">
                                <input class="textbox" name="address"  value="<?php echo $row['address'] ?>"  >
                            </div>
                        </div>
            
                        <div class="formrowgrey">
                             <div class="formleft"><strong>City</strong><span id="">*</span></div>
                             <div class="formright">
                                 <input class="textbox" name="city" value="<?php echo $row['city'] ?>"  >
                             </div>
                        </div>
            
                       <div class="formrowgrey">
                             <div class="formleft"><strong>PinCode</strong><span id="">*</span></div>
                             <div class="formright">
                                 <input class="textbox" name="pincode" value="<?php echo $row['pincode'] ?>"  >
                             </div>
                        </div>
            
                        <div class="formrowgrey">
                            <div class="formleft"><strong>Profile Picture</strong><span id="">*</span></div>
                            <div class="formright">
                            	 <input type="checkbox" id="chk" name="chk" value="1" onchange="fun()"/>
								 <?php echo "<img src='".$row['profile_picture']."' height='80' width='90'></img>"; ?>                        		<div id="d1"></div>
							   </div>
                        </div>
            
                        <div class="formrow">
                             <div class="buttons">
                                <center><input class="button_login" type="submit" name="submit" value="submit"  onclick="return funval()" />
                                        
                                </center>
                             </div>
                        </div>	
                        </form>		
       
       
       	</div>
    </body>
</html>

<?php include('include/footer.php'); ?> 
<script type="text/javascript">
	function fun()
	{
		var a=document.getElementById('d1');
		d1.innerHTML="<input type='file' id='f1' name='profile_pic'>";
	}
	function funval()
	{
		var b=document.getElementById('f1');
		var c=document.getElementById('chk');
		if(b.value=="" && c.checked)
		{
			alert("Select Image");
			return false;
		}
		return true;
	}
</script>