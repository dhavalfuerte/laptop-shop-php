<?php include('include/config.php'); session_start();
	if(isset($_POST['submit'])=='Login')
	{
		$e_id=$_POST['eid'];
		$pwd=$_POST['pwd'];
		
		$select="select * from register_user where eid='$e_id' and pwd='$pwd'";
		$test_qry=mysql_query($select);
		if($test_qry)
		{
			$count=mysql_num_rows($test_qry);
			$row_user=mysql_fetch_array($test_qry);
			if($row_user['status']==1)
			{
				if($count>0)
				{
					$row=mysql_fetch_array($test_qry);
					$_SESSION['e_id']=$_REQUEST['e_id'];
					$_SESSION['user_id']=$row_user['user_id'];
					$_SESSION['user_nm']=$row_user['user_nm'];
					header('Location:index.php');
				}
				else
				{
					$_SESSION['msg']="Please Enter Valid Email Or Password...!!";
					header('Location:user_login.php');
				}
			}
			else
			{
				$_SESSION['msg']="User Deactivated Please Contact Administrator...!!";
				header('Location:user_login.php');
			}
		}
		else
		{
			$_SESSION['msg']="Please Enter Valid Email Or Password...!!";
			header('Location:user_login.php');
		}
	}
?>