<?php
	$id=$_REQUEST['id'];
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db('miracle_shop',$con);
	if(isset($_POST['submit']))
	{
		$chk=$_POST['chk'];
		$mnm=$_POST['mnm'];
		$img=$_POST['pro_img'];
		$price=$_POST['price'];
		$processor=$_POST['processor'];
		$ram=$_POST['ram'];
		$hd=$_POST['harddisk'];
		$cam=$_POST['web_cam'];
		$os=$_POST['os'];
		$screen=$_POST['screen'];
		$graphics=$_POST['graphics'];
		$warr=$_POST['warranty'];
		$info=$_POST['information'];
	
		if($_POST['submit']=='submit')
		{
			if($chk)
			{
			$path="./images/pro_imgs/".basename($_FILES['pro_img']['name']);
			move_uploaded_file($_FILES['pro_img']['tmp_name'],$path);	
			$qry="update product set model_nm ='$mnm',pro_img='$path',`price` = '$price',`processor` = '$processor',`ram` = '$ram',`harddisk` = '$hd',`os` = '$os',`web_camera` = '$cam',`screen_size` = '$screen',`graphics` = '$graphics',`warranty` = '$warr',`information` = '$info' where pro_id =$id" ;
			}
			else
			{
				$qry="update product set model_nm ='$mnm',`price` = '$price',`processor` = '$processor',`ram` = '$ram',`harddisk` = '$hd',`os` = '$os',`web_camera` = '$cam',`screen_size` = '$screen',`graphics` = '$graphics',`warranty` = '$warr',`information` = '$info' where pro_id =$id" ;
			}					

			$res=mysql_query($qry);
		
			if($res)
			{
				header('location:product_list.php');
			}
			else
			{
				echo "not insert";
			}
			
		}
		else
		{
			echo "before value is submit";
		}
	}
	?>
<?php include('include/header.php'); ?>
<link rel="stylesheet" href="css/style.css" />
<div id="container">
<div class="shell">
<div id="content">
<div id="round_corner">

			<div class="box_head1">
            		Update Product
            </div>
            
            <form method="post" action="" enctype="multipart/form-data">
            									<?php
												
												$qry1="select * from product where pro_id=$id";
												$res1=mysql_query($qry1);
												$row=mysql_fetch_array($res1);
												
												$qry2="select c.cnm from company c RIGHT JOIN product p on c.cid=p.company_id where p.pro_id=$id";
												
												$res2=mysql_query($qry2);
												$row2=mysql_fetch_array($res2);
												?>
            		
                    		<div class="formrowgrey">
                            		<div class="formleft">Company Name*</div>
                                    <div class="formright">
                                    		<input type="text" name="mnm" class="textbox"  value="<?php echo $row2['cnm']?>" readonly="readonly" />
                                       </div>
                                 </div>
                                 
                                 <div class="formrow">
                            			<div class="formleft">Model Name*</div>
                                    	<div class="formright">
                                    		<input type="text" name="mnm" class="textbox"  value="<?php echo $row['model_nm']?>" required />
                                   		 </div>
                               	</div>
                                  <div class="formrowgrey">
                            			<div class="formleft">Product Image*</div>
                                    	<div class="formright">
                                        <input type="checkbox" id="chk" name="chk" value="1" onchange="fun()"/><?php echo "<img src='".$row['pro_img']."' height='40' width='50'></img>"; ?>
                                        <div id="d1"></div>
                            
                                   		 </div>
                               	</div>
                                
                                 <div class="formrow">
                            			<div class="formleft">Price*</div>
                                    	<div class="formright">
                                    		<input type="text" name="price" class="textbox"  value="<?php echo $row['price'] ?>" required />
                                   		 </div>
                               	</div>
                                 <div class="formrowgrey">
                            			<div class="formleft">Processor*</div>
                                    	<div class="formright">
                                    		<input type="text" name="processor" class="textbox"  value="<?php echo $row['processor'] ?>" required />
                                   		 </div>
                               	</div>
                                <div class="formrow">
                            			<div class="formleft">Ram*</div>
                                    	<div class="formright">
                                    		<input type="text" name="ram" class="textbox" value="<?php echo $row['ram'] ?>" required/>
                                   		 </div>
                               	</div>
                                <div class="formrowgrey">
                            			<div class="formleft">Hard Disk*</div>
                                    	<div class="formright">
                                    		<input type="text" name="harddisk" class="textbox"  value="<?php echo $row['harddisk'] ?>" required/>
                                   		 </div>
                               	</div>
                                <div class="formrow">
                            			<div class="formleft">Web Camera*</div>
                                    	<div class="formright">
                                        <input type="text" name="web_cam" class="textbox"  value="aaa" required/>
                                    	
                                   		 </div>
                               	</div>
                                 <div class="formrowgrey">
                            			<div class="formleft">Operating System*</div>
                                    	<div class="formright">
                                    	<input type="text" name="os" class="textbox"  value="<?php echo $row['os'] ?>" required/>
                                   		 </div>
                               	</div>
                                <div class="formrow">
                            			<div class="formleft">Screen Size*</div>
                                    	<div class="formright">
                                    		<input type="text" name="screen" class="textbox"  value="<?php echo $row['screen_size'] ?>" required />
                                   		 </div>
                               	</div>
                                  <div class="formrowgrey">
                            			<div class="formleft">Graphics*</div>
                                    	<div class="formright">
                                    		<input type="text" name="graphics" class="textbox"  value="<?php echo $row['graphics'] ?>" required/>
                                   		 </div>
                               	</div>
                                 <div class="formrow">
                            			<div class="formleft">Warranty*</div>
                                    	<div class="formright">
                                    		<input type="text" name="warranty" class="textbox"  value="<?php echo $row['warranty'] ?>" required />
                                   		 </div>
                               	</div>
                                 <div class="formrowgrey">
                            			<div class="formleft">Information*</div>
                                    	<div class="formright">
                                    		<input type="text" name="information" class="textbox"  value="<?php echo $row['information'] ?>" required/>
                                   		 </div>
                               	</div>
                                 <div class="buttons">
                    					<input type="submit" name="submit" class="button" value="submit"  onclick="return funval()" />
                       					 <input type="reset"  class="button" value="Reset" />
                     			</div>
                    
  
            </form>
</div>
</div>
</div>
</div>
<?php include('include/footer.php'); ?>
<script type="text/javascript">
	function fun()
	{
		var a=document.getElementById('d1');
		d1.innerHTML="<input type='file' id='f1' name='pro_img'>";
	}
	function funval()
	{
		var b=document.getElementById('f1');
		var c=document.getElementById('chk');
		if(b.value=="" && c.checked)
		{
			alert("Select Image");
			return false;
		}
		return true;
	}
</script>