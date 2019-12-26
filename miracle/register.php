<?php
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db('miracle_shop',$con);
	if(isset($_POST['submit']))
	{
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
			$path="images/profile_pic/".basename($_FILES['profile_pic']['name']);
			move_uploaded_file($_FILES['profile_pic']['tmp_name'],$path);	
			$qry="insert into register_user(user_nm,user_fnm,user_lnm,eid,pwd,contect_no,address,city,pincode,profile_picture,status) values ('$unm', '$ufnm', '$ulnm', '$eid', '$pwd', '$con', '$add', '$ct', '$pin', '$path','1')";
			$res=mysql_query($qry);
			if($res)
			{
				header('location:user_login.php');
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
<link rel="stylesheet" href="CSS/style1.css" />
<html>
	<body>
		<div id="round_cornar">
			<div class="page_title" style="">Register Form</div>
            <form method="post" action="register.php" enctype="multipart/form-data">
            <div class="formrowgrey">
        		<div class="formleft"><strong>User Name</strong><span id="">*</span></div>
           		<div class="formright">
                	<input class="textbox" type="text" id="user_nm" name="user_nm" required />
            	 </div>
       		</div>
            <div class="formrowgrey">
        		<div class="formleft"><strong>First Name</strong><span id="">*</span></div>
           		<div class="formright">
                	<input class="textbox" type="text" id="user_fnm" name="user_fnm" required />
            	</div>
       		</div>
            <div class="formrowgrey">
        		<div class="formleft"><strong>Last Name</strong><span id="">*</span></div>
           		<div class="formright">
                	<input class="textbox" type="text" id="user_lnm" name="user_lnm" required />
            	</div>
       		</div>
            
            <div class="formrow">
        		<div class="formleft"><strong>Email Id</strong><span id="es">*</span></div>
            	<div class="formright">
               		<input class="textbox" type="text" id="email" name="eid" required />
            	</div>
       		</div>
            <div class="formrow">
        		<div class="formleft"><strong>Password</strong><span id="ps">*</span></div>
            	<div class="formright">
               		<input class="textbox" type="password" id="pwd" name="pwd" required />
            	</div>
       		</div>
            <div class="formrowgrey">
        		<div class="formleft"><strong>Contact No</strong><span id="">*</span></div>
           		<div class="formright">
                	<input class="textbox" type="text" id="con" name="contect_no" required />
            	</div>
       		</div>
            <div class="formrow">
        		<div class="formleft"><strong>Address</strong><span id="es">*</span></div>
            	<div class="formright">
               		<textarea class="textarea" id="add" name="address" rows="5" cols="3" required > </textarea>
            	</div>
       		</div>
            <div class="formrowgrey">
                 <div class="formleft"><strong>City</strong><span id="">*</span></div>
                 <div class="formright">
                     <input class="textbox" type="text" id="ct" name="city" required />
                 </div>
            </div>
            <div class="formrow">
        		<div class="formleft"><strong>Pincode</strong><span id="">*</span></div>
            	<div class="formright">
               		<input class="textbox" type="text" id="pincode" name="pincode" required />
            	</div>
       		</div>
            <div class="formrowgrey">
        		<div class="formleft"><strong>Profile Picture</strong><span id="">*</span></div>
           		<div class="formright">
                	<input class="textbox" type="file" id="propic" name="profile_pic" required />
            	</div>
       		</div>
            
          	<div class="formrow">
        		 <div class="buttons">
        			<center><input class="button_login" type="submit" name="submit" value="submit" />
            				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    		<input  class="button_login" type="reset" name="reset" value="reset" />
            		</center>
        		 </div>
        	</div>
        </div>
        </form>
    </body>
</html>
<?php include('include/footer.php'); ?> 