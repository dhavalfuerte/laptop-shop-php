<?php
	$id=$_REQUEST['id'];
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db(miracle_shop,$con);
	
	if(isset($_POST['submit']))
	{
		$nm=$_POST['name'];
		$eid1=$_POST['eid'];
		$pwd=$_POST['pwd'];
		if($_POST['submit']=='submit')
		{
			$qry="update admin_login set name ='$nm',eid='$eid1',pwd='$pwd'  where a_id=$id" ;
		
			$res=mysql_query($qry);
			if($res)
			{
				header('location:admin.php');
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
ADMIN
</div>
			<form method="post" action="" >
            <?php 
			
				$qry1="select * from admin_login where a_id=$id";
				$res1=mysql_query($qry1);
				$row=mysql_fetch_array($res1);
				?>
				
            		<div class="formrowgrey">
                    	<div class="formleft">Admin Name</div>
                        <div class="formright">
                        	<input type="text" class="textbox" name="name" value="<?php echo $row['name'] ?>" />
                         </div>
                    </div>
                    
                    <div class="formrow">
                    	<div class="formleft">Email Id</div>
                        <div class="formright">
                        	<input type="text" class="textbox" name="eid" value="<?php echo $row['eid'] ?>" />
                         </div>
                    </div>
                    
                    <div class="formrowgrey">
                    	<div class="formleft">Password</div>
                        <div class="formright">
                        	<input type="text" class="textbox" name="pwd" value="<?php echo $row['pwd'] ?>" />
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