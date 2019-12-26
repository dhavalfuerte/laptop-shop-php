<?php
	$id=$_REQUEST['id'];
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db(miracle_shop,$con);
	$qry="delete from company where cid=$id";
	$res=mysql_query($qry);
	header('location:company_list.php');
?>