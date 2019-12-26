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
     	Feedback
      </div>
      <div class="table">
     
      
      		<table width="100%" border="0" cellspacing="0" cellpadding="0">
            	<tr>
                		<th width="13"><input type="checkbox" class="checkbox" /></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Comment</th>
                        <th width="110" class="ac">Control</th>
                     
                 </tr>
                 <?php
							$con=mysql_connect("localhost","root","");
							$db=mysql_select_db(miracle_shop,$con);
							$qry="select user_id,user_nm,eid,comment from feedback";
							$res=mysql_query($qry);
							while($row=mysql_fetch_array($res))
							{
				?>
                 <tr>
                 		<th width="13"><input type="checkbox" class="checkbox" /></th>
                
                        <th><?php echo $row['user_nm'] ?></th>
                        <th><?php echo $row['eid'] ?></th>
                        <th><?php echo $row['comment'] ?></th>
                        <th width="70" class="ac"><a href="delfeedback.php?id=<?php echo $row['user_id'] ?>" class="ico del">delete</a></th>
                       
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