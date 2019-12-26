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
	<div id="add_new">
    		<a href="product.php">
            <input type="button" value="Add Product" class="button" />
            </a>
     </div>
     <div class="box_head1">
     	Current Product
      </div>
      <div class="table">
      
      		<table width="100%" border="0" cellspacing="0" cellpadding="0">
            	<tr>
                		<th width="13"><input type="checkbox" class="checkbox" /></th>
                        <th>Pro-Img</th>
                        <th>Company Name</th>
                        <th>Model Name</th>
                        <th>Price</th>
                        <th width="110" class="ac">Control</th>
                        
                 </tr>
                 <?php
							$con=mysql_connect("localhost","root","");
							$db=mysql_select_db(miracle_shop,$con);
							$qry="select p.pro_id,p.pro_img,c.cnm,p.model_nm,p.price from product p,company c where p.company_id=c.cid";
							$res=mysql_query($qry);
							while($row=mysql_fetch_array($res))
							{
				?>
                 <tr>
                 		<th width="13"><input type="checkbox" class="checkbox" /></th>
                        <th><?php echo "<img src='".$row['pro_img']."' height='40' width='60'></img>"; ?></th>
                        <th><?php echo $row['cnm'] ?></th>
                        <th><?php echo $row['model_nm'] ?></th>
                        <th><?php echo $row['price'] ?></th>
                        <th width="110" class="ac"><a href="delproduct.php?id=<?php echo $row['pro_id'] ?>" class="ico del">delete</a>
                        <a href="update_product.php?id=<?php echo $row['pro_id'] ?>" class="ico del">edit</a></th>
                       
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