<?php
	$id=$_REQUEST['id'];
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db(miracle_shop,$con);
	if(isset($_POST['submit']))
	{
		$nm=$_POST['cname'];
		if($_POST['submit']=='submit')
		{
			$qry="update company set cnm='$nm' where cid=$id";
	
			$res=mysql_query($qry);
			if($res)
			{
				header('location:company_list.php');
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
<div id="round_corner_login">
<div class="box_head1">
Company
</div>
			<form method="post" action="" >
            <?php 
		
				$qry1="select * from company where cid=$id";
				$res1=mysql_query($qry1);
				$row=mysql_fetch_array($res1);
				?>
				
            		<div class="formrowgrey">
                    	<div class="formleft">Company Name</div>
                        <div class="formright">
                        	<input type="text" class="textbox" name="cname" value="<?php echo $row['cnm'] ?>"/>
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