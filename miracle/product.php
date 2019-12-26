<?php 
	include('include/config.php');
	$pro_id=$_REQUEST['id'];
	$select_qry='select * from product where pro_id='.$pro_id;
	$test=mysql_query($select_qry);
	$row=mysql_fetch_array($test);
	
	$sel_company="select cnm from company c LEFT JOIN product p on c.cid=p.company_id where p.company_id=".$row['company_id'];
	$res_sel_company=mysql_query($sel_company);
	$row1=mysql_fetch_array($res_sel_company);
?>
<?php include('include/header.php'); ?>
<link rel="stylesheet" href="CSS/style1.css" />
<html>
<body>
	<div id="round_cornar">
    	<div id="product_desc_box">
        	<div class="product_img"><?php echo "<img src='admin/".$row['pro_img']."' height='400' width='400'></img>"; ?>
         </div>
         <div class="feature_left">Company Name:</div>
         <div class="feature_right"><?php echo $row1['cnm']; ?></div>
         
         <hr />
         <div class="feature_left">Model Name:</div>
         <div class="feature_right"><?php echo $row['model_nm']; ?></div>
         
         <hr />
         <div class="feature_left">RAM:</div>
         <div class="feature_right"><?php echo $row['ram']; ?></div>
         
         <hr />
         <div class="feature_left">Harddisk:</div>
         <div class="feature_right"><?php echo $row['harddisk']; ?></div>
         
         <hr />
         <div class="feature_left">OS:</div>
         <div class="feature_right"><?php echo $row['os']; ?></div>
         
         <hr />
         <div class="feature_left">Graphic Card:</div>
         <div class="feature_right"><?php echo $row['graphics']; ?></div>
         
         <hr />
         <div class="feature_left">Screen Size:</div>
         <div class="feature_right"><?php echo $row['screen_size']; ?></div>
         

         
         <hr />
         <div class="feature_left">Web Camera:</div>
         <div class="feature_right"><?php echo $row['web_camera']; ?></div>
         
         <hr />
         <div class="feature_left">Warranty:</div>
         <div class="feature_right"><?php echo $row['warranty']; ?></div>
         
         <hr />
         <div class="feature_left">Price:</div>
         <div class="feature_right"><?php echo $row['price']; ?></div>
         
         <hr />
     	 <p class="button left"><a href="buy_now.php?id=<?php echo $row['pro_id']; ?>">Buy</a></p>
       </div>
     <div class="clear"></div>
     <div class="product_desc">
     <h2>Information</h2>
     <hr />
     <p>
     	<?php echo $row['information']; ?>
	 </p>
     </div>
    </div>
   </div>
  </div>
</body>
</html>
<?php include('include/footer.php'); ?> 