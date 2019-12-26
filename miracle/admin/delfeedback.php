<?php
	$id=$_REQUEST['id'];
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db(miracle_shop,$con);
	$qry="delete from feedback where user_id=$id";
	$res=mysql_query($qry);
	header('location:feedback.php');
?>