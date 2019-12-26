<?php
	$id=$_REQUEST['id'];
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db(miracle_shop,$con);
	$qry="delete from admin_login where a_id=$id";
	$res=mysql_query($qry);
	header('location:admin.php');
?>