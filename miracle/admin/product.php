<?php
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db('miracle_shop',$con);
	if(isset($_POST['submit']))
	{
		$cid=$_POST['company_id'];
		$mnm=$_POST['mnm'];
		$price=$_POST['price'];
		$processor=$_POST['processor'];
		$ram=$_POST['ram'];
		$hd=$_POST['harddisk'];
		$cam=$_POST['web_cam'];
		$os=$_POST['os_id'];
		$screen=$_POST['screen'];
		$graphics=$_POST['graphics'];
		$warr=$_POST['warranty'];
		
		$info=$_POST['information'];
		
		if($_POST['submit']=='submit')
		{
			$path="images/pro_imgs/".basename($_FILES['pro_img']['name']);
			move_uploaded_file($_FILES['pro_img']['tmp_name'],$path);			
			$qry="insert into product(company_id,model_nm,pro_img,price,processor,ram,harddisk,os,web_camera,screen_size,graphics,warranty,information,status)values($cid,'$mnm','$path','$price','$processor','$ram','$hd','$os','$cam','$screen','$graphics','$warr','$info','1')";
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
            		Add New Product
            </div>
            <form method="post" action="product.php" enctype="multipart/form-data">
            		
                    		<div class="formrowgrey">
                            		<div class="formleft">Name*</div>
                                    <div class="formright">
                                    	<select name="company_id" class="listmenu">
                                        	<option value="">Select Company</option>
                                            <?php
												$con=mysql_connect("localhost","root","");
												$db=mysql_select_db(miracle_shop,$con);
												$qry="select * from company";
												$res=mysql_query($qry);
												while($row=mysql_fetch_array($res))
												{
											?>
                                            <option value="<?php echo $row['cid']; ?>"><?php echo $row['cnm']; ?></option>
                                            <?php
												} 
											?>
                                          </select>
                                       </div>
                                 </div>
                                 
                                 <div class="formrow">
                            			<div class="formleft">Model Name*</div>
                                    	<div class="formright">
                                    		<input type="text" name="mnm" class="textbox" placeholder="modal name" required />
                                   		 </div>
                               	</div>
                                 <div class="formrowgrey">
                            			<div class="formleft">Product Image*</div>
                                    	<div class="formright">
                                    		<input type="file" name="pro_img" class="textbox" />
                                   		 </div>
                               	</div>
                                 <div class="formrow">
                            			<div class="formleft">Price*</div>
                                    	<div class="formright">
                                    		<input type="text" name="price" class="textbox" placeholder="Price in rs." required  />
                                   		 </div>
                               	</div>
                                 <div class="formrowgrey">
                            			<div class="formleft">Processor*</div>
                                    	<div class="formright">
                                    		<input type="text" name="processor" class="textbox" placeholder="Processor" required  />
                                   		 </div>
                               	</div>
                                <div class="formrow">
                            			<div class="formleft">Ram*</div>
                                    	<div class="formright">
                                    		<input type="text" name="ram" class="textbox" placeholder="ram in gb" required  />
                                   		 </div>
                               	</div>
                                <div class="formrowgrey">
                            			<div class="formleft">Hard Disk*</div>
                                    	<div class="formright">
                                    		<input type="text" name="harddisk" class="textbox" placeholder="hard disk in gb" required  />
                                   		 </div>
                               	</div>
                                <div class="formrow">
                            			<div class="formleft">Web Camera*</div>
                                    	<div class="formright">
                                    		<input type="radio" name="web_cam" value="Yes" required />Yes
                                            <input type="radio" name="web_cam" value="No" required />No
                                   		 </div>
                               	</div>
                                 <div class="formrowgrey">
                            			<div class="formleft">Operating System*</div>
                                    	<div class="formright">
                                    		<input type="text" name="os_id" class="textbox" placeholder="Operating system" required  />
                                   		 </div>
                               	</div>
                                <div class="formrow">
                            			<div class="formleft">Screen Size*</div>
                                    	<div class="formright">
                                    		<input type="text" name="screen" class="textbox" placeholder="Screen Size" required  />
                                   		 </div>
                               	</div>
                                  <div class="formrowgrey">
                            			<div class="formleft">Graphics*</div>
                                    	<div class="formright">
                                    		<input type="text" name="graphics" class="textbox" placeholder="Graphics in gb" required  />
                                   		 </div>
                               	</div>
                                 <div class="formrow">
                            			<div class="formleft">Warranty*</div>
                                    	<div class="formright">
                                    		<input type="text" name="warranty" class="textbox" placeholder="warranty in year" required  />
                                   		 </div>
                               	</div>
                                 <div class="formrowgrey">
                            			<div class="formleft">Information*</div>
                                    	<div class="formright">
                                    		<input type="text" name="information" class="textbox" placeholder="other info" required  />
                                   		 </div>
                               	</div>
                                 <div class="buttons">
                    					<input type="submit" name="submit" class="button" value="submit" />
                       					 <input type="reset"  class="button" value="Reset" />
                     			</div>
                    
  
            </form>
</div>
</div>
</div>
</div>
<?php include('include/footer.php'); ?>