<?php session_start();
	include('include/config.php');
	if(isset($_SESSION['user_nm'])=="")
	{
		$_SESSION['msg']="Please Login First...!!!";
		$_SESSION['pro_id']=$_REQUEST['id'];
		header('Location:user_login.php');
	}
	
	$pro_id=$_REQUEST['id'];
	$select_qry="select p.*,c.cnm from company c RIGHT JOIN product p on c.cid=p.company_id where p.pro_id=".$pro_id;
	$res_select_qry=mysql_query($select_qry);
	$_SESSION['pro_id']=$pro_id;
?>

<?php include('include/header.php'); ?>
<html>
<script type="text/javascript" language="javascript">

function buy_now_total(price,qty)
{

	var total=price*qty;
	document.getElementById('total').innerHTML=total;
}
function change_address()
{
	var check=document.getElementById('same').checked;
	if(check==true)
	{
		document.getElementById('d_address').style.display="none";
		document.getElementById('dn_address').style.display="block";
	}
	else
	{
		document.getElementById('d_address').style.display="block";
		document.getElementById('dn_address').style.display="none";
	}
}
</script>
<link rel="stylesheet" href="CSS/style1.css" />
	<body>
    
    	<div id="round_cornar">
        	<center>
            	<h2>Shopping Details</h2>
            </center>
        	<hr />
            <form id="buy_now" name="buy_now" action="bill.php" method="post"  enctype="multipart/form-data">
       			<div class="table">
                	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                    	<tr>
                        	<th width="13"><input type="checkbox" class="checkbox" /></th>
                            <th>Product Image</th>
                            <th>Product Details</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Total</th>
                        </tr>
                        
                        <?php 
							$sr=1;
							while($row=mysql_fetch_array($res_select_qry))
							{
								if($sr%2==0)
								{
									$odd="class='odd'";
								}
								else
								{
									$odd="";
								}	
						?>
                        	<tr <?php echo $odd; ?>>
                             	<td><input type="checkbox" class="checkbox" /></td>
                                <td>
                                	<a href="product_view.php?id=<?php echo $row['p.pro_id']; ?>">
                                	    <img src="admin/<?php echo $row['pro_img']; ?>" height="50" width="50" alt="No Picture" />
                                	</a>
                                </td>
                                <td> <?php echo $row['cnm']; ?><br />
                                	 <?php echo $row['model_nm']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                               	<td>
                                	<select id="qty" name="qty" >
                                    	<?php 
											$i=1;
											while($i<=10)
											{
										?>
                                        	<option value="<?php echo $i; ?>" onClick="return buy_now_total(<?php echo $row['price']; ?>,<?php echo $i; ?>);"><?php echo $i; ?></option>
                                     	<?php
									    	$i++;
											}
										?>
                                    </select>
                                </td>
                                <td><label id="total"><?php $row['price']; ?></label></td>
                            </tr>    
							<?php
								$sr++;
								}
							?>
					</table>	
                    <hr />
                    <div id="round_cornar_ud">
                    	<h2>User Details</h2>
                        <hr  />
                        <?php 
							$id=$_SESSION['user_id'];
							$select_user="select * from register_user where user_id=".$id;
							$res_select_user=mysql_query($select_user);
							$row_user=mysql_fetch_array($res_select_user);
						?>
                        
                        <div class="formrowgrey">
                        	<div class="formleft"><strong>Name</strong>:</div>
                            <div class="formright">
                            	<?php echo $row_user['user_nm']; ?>
                            </div>
                        </div>
                        
                        <div class="formrow">
                        	<div class="formleft"><strong>Email</strong>:</div>
                            <div class="formright">
                            	<?php echo $row_user['eid']; ?>
                            </div>
                        </div>
                        
                        <div class="formrowgrey">
                        	<div class="formleft"><strong>Contact No</strong>:</div>
                            <div class="formright">
                            	<?php echo $row_user['contect_no']; ?>
                            </div>
                        </div>
                        
                        <div class="formrow">
                        	<div class="formleft"><strong>Shipping Address</strong>:</div>
                            <div class="formright">
                            	<?php echo $row_user['address']; ?><br />
                                <?php echo $row_user['city']; ?><br />
                                <?php echo $row_user['pincode']; ?>
                            </div>
                        </div>
                        
                        <div class="formrow">
                        	<div class="formright">
                            	<input type="checkbox" name="same" id="same" onClick="return change_address();"  />
                                Delivery Address Is Different
                            </div>
                        </div>
                        
                         <div class="formrowgrey" id="d_address">
                        	<div class="formleft"><strong>Delivery Address</strong>:</div>
                            <div class="formright">
                            	<?php echo $row_user['address']; ?><br />
                                <?php echo $row_user['city']; ?><br />
                                <?php echo $row_user['pincode']; ?>
                            </div>
                        </div>
                        
                        <div class="formrowgrey" id="dn_address" style="display:none;">
                        	<div class="formleft"><strong>Delivery Address</strong>:</div>
                            <div class="formright">
                            	<textarea class="textarea" name="dn_address" id="dn_address"></textarea>
                         	</div>
                        </div>
                        
                        <div class="formrow">
                        	<div class="formleft">&nbsp;</div>
                            <div class="formright">
                            	<input type="submit" name="submit" value="Checkout" class="button_login"  />
                            </div>
                        </div>
             		</div>
				</div>
            </form>
        </div>
    </body>
</html>
<?php include('include/footer.php'); ?>
