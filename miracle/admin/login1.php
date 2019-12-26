<?php session_start();
	
		$unm=$_POST['eid'];
		$pwd=$_POST['pwd'];
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db(miracle_shop,$con);
		$qry="select * from admin_login where eid='$unm' and pwd='$pwd'";
		$res=mysql_query($qry);
		$row=mysql_fetch_array($res);
		if(mysql_num_rows($res)>0)
		{
			$_SESSION['name']=$row['name'];
			header('location:welcome.php');
			
		}
		else
		{
			$_SESSION['msg']="Please Enter Valid Email Or Password....!!!!";
			header('location:login.php');
			
		
		}
		
?>