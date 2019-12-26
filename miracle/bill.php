<?php include('include/config.php'); session_start();
	$pro_id=$_SESSION['pro_id'];
	$select_product="select p.*,c.cnm from company c RIGHT JOIN product p on c.cid=p.company_id where p.pro_id=".$pro_id;
	$res_select_product=mysql_query($select_product);
	$row_product=mysql_fetch_array($res_select_product);
	
	$user_id=$_SESSION['user_id'];
	$select_user="select * from register_user where user_id=".$user_id;
	$res_select_user=mysql_query($select_user);
	$row_user=mysql_fetch_array($res_select_user);
	
	$total=$_REQUEST['qty']*$row_product['price'];
	
	$insert_order="insert into orders(user_id,pro_id,quantity,total_amount) values ('$user_id','$pro_id','".$_REQUEST['qty']."','$total')";
	$res_insert_order=mysql_query($insert_order);
	
?>
<link rel="stylesheet" href="css/style1.css" />
<?php include("include/header.php"); ?>
<html>
	<body><br><br><br><br><br><br>
    	<table border="2" align="center">
        	<form action="index.php" method="post" enctype="multipart/form-data">
            	<tr>
                	<th colspan="2" style="color:#000000"><center> Generaited Bill </center></td>
                </tr>
				<tr>
                	<th>UserName:</th>
                    <td><input type="text" name="user_nm" value="<?php echo $row_user['user_nm']; ?>"></td>
                </tr>            
                <tr>
                	<th>Email-Id:</th>
                    <td><input type="text" name="e_id" value="<?php echo $row_user['eid']; ?>"></td>
                </tr>
                <tr>
                	<th>Address:</th>
                    <td><input type="text" name="address" value="<?php echo $row_user['address']; ?>"></td>
                </tr>
                <tr>
                	<th>Company Name:</th>
                    <td><input type="text" value="<?php echo $row_product['cnm']; ?>"></td>
                </tr>
                <tr>
                	<th>Model Name:</th>
                    <td><input type="text" name="model_name" value="<?php echo $row_product['model_nm']; ?>"></td>
                </tr>
                <tr>
                	<th>Quantity Of Laptop:</th>
                    <td><input type="text" name="qty" value="<?php echo $_REQUEST['qty']; ?>"></td>
                </tr>
                <tr>
                	<th>TotalCost:</th>
                    <td><input type="text" name="amount" value="<?php echo $total ?>"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="Back"></td>
                </tr>
            </form>
        </table>
    </body>
</html>
<br><br><br><br><br><br>
<?php include("include/footer.php"); ?>
