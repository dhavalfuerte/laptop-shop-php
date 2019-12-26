<?php
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db('miracle_shop',$con);
	if(isset($_POST['submit']))
	{
		$cnm=$_POST['cnm'];
		if($_POST['submit']=='submit')
		{
			$qry="insert into company (cnm)values('$cnm') ";
			
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
<div id="round_corner">

			<div class="box_head1">
            		Add New Company
            </div>
            
            <form method="post" action="addcompany.php" enctype="multipart/form-data">
            		
                    		<div class="formrowgrey">
                            		<div class="formleft">Company Name*</div>
                                    <div class="formright">
                                    	<input type="text" name="cnm" class="textbox" placeholder="Company Name"  />
                                
                                    		
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