<?php include('include/header.php'); ?>
<?php include('include/config.php'); ?>
<div id="round_cornar">
<?php
	$page=1;
	$limit=12;
	if(isset($_REQUEST['page']))
	{
		$page=$_REQUEST['page'];
		$start=$limit*($page-1);
	}
	else
	{
		$start=0;
	}
	$qry="select * from product";
	$res=mysql_query($qry);
	
	//$qry1="select p.*,c.cnm from company c RIGHT JOIN product p on c.cid=p.cid where p.status='1' limit".$start.",".$limit;
	$qry1="select p.*,c.cnm from company c RIGHT JOIN product p on c.cid=p.company_id where p.status='1'";
	$res1=mysql_query($qry1);
	
	while($row=mysql_fetch_array($res1))
	{
?>
<link rel="stylesheet" href="CSS/style1.css" />
<div id="product_box">
	<div id="product_cm">
    	<h2><?php echo $row['cnm']; ?></h2>
			<?php echo $row['model_nm']; ?>
	</div>
   			<?php echo "<img src='admin/".$row['pro_img']."' height='150' width='190'></img>"; ?>
    <ul>
    	<li>Processor:-<?php echo $row['processor']; ?></li>
        <li>RAM:-<?php echo $row['ram']; ?></li>
        <li>HARDDISK:-<?php echo $row['harddisk']; ?></li>
        <li>O.S.:-<?php echo $row['os']; ?></li>
        <li>PRICE:-<?php echo $row['price']; ?> Rs</li>
    </ul>
      <p class="button"><a href="product.php?id=<?php echo $row['pro_id']; ?>">ReadMore</a></p>

</div>
<?php } ?>
</div>

<? include("include/footer.php"); ?>