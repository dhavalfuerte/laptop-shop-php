<?php session_start();
if(!isset($_SESSION['name']))
{
	$_SESSION['msg']="please login first.......";
	header('location:login.php');
}?>
<?php include('include/header.php'); ?>
<link rel="stylesheet" href="css/style.css" />
<div id="container">
<div id="content">
<div id="round_corner">
	
     <div class="box_head1">
     	Order
      </div>
      <div class="table">
      
      		<table width="100%" border="0" cellspacing="0" cellpadding="0">
            	<tr>
                		<th width="13"><input type="checkbox" class="checkbox" /></th>
                        <th>User_id</th>
                        <th>Product_id</th>
                        <th>Quantity</th>
                        <th>TotalAmount</th>
                        <th width="110" class="ac">Control</th>
                        
                 </tr>
                 <?php
							$con=mysql_connect("localhost","root","");
							$db=mysql_select_db(miracle_shop,$con);
							$qry="select *from orders";
							$res=mysql_query($qry);
							while($row=mysql_fetch_array($res))
							{
				?>
                 <tr>
                 		<th width="13"><input type="checkbox" class="checkbox" /></th>
                        <th><?php echo $row['user_id'] ?></th>
                        <th><?php echo $row['pro_id'] ?></th>
                        <th><?php echo $row['quantity'] ?></th>
                        <th><?php echo $row['total_amount'] ?></th>
                        <th width="70" class="ac"><a href="delorder.php?id=<?php echo $row['order_id'] ?>" class="ico del">delete</a></th>
                    
                 </tr>
                <?php
				 	}
				?>
             </table>
        </div>
</div>
</div>
</div>
<?php include('include/footer.php'); ?>