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
     	Current User
      </div>
      <div class="table">
      
      		<table width="100%" border="0" cellspacing="0" cellpadding="0">
            	<tr>
                		<th width="13"><input type="checkbox" class="checkbox" /></th>
                        <th>Profile Picture</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contect No</th>
                        <th>Address</th>
                        <th width="110" class="ac">Control</th>
                   
                 </tr>
                 <?php
							$con=mysql_connect("localhost","root","");
							$db=mysql_select_db(miracle_shop,$con);
							$qry="select *from register_user";
							$res=mysql_query($qry);
							while($row=mysql_fetch_array($res))
							{
				?>
                 <tr>
                 		<th width="13"><input type="checkbox" class="checkbox" /></th>
                        <th><?php echo "<img src='../".$row['profile_picture']."' height='50' width='70'></img>"; ?></th>
                        <th><?php echo $row['user_nm'] ?></th>
                        <th><?php echo $row['eid'] ?></th>
                        <th><?php echo $row['contect_no'] ?></th>
                        <th><?php echo $row['address'] ?></th>
                       <th width="110" class="ac"><a href="delusermanagement.php?id=<?php echo $row['user_id'] ?>" class="ico del">delete</a></th>
                     
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