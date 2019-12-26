<?php 
	include('include/config.php');;
	if(isset($_POST['submit']))
	{
		$user_nm=$_POST['user_nm'];
		$e_id=$_POST['e_id'];
		$comment=$_POST['comment'];
		if($_POST['submit']=='submit')
		{
			$insert_qry="insert into feedback(user_nm,eid,comment)values('".$user_nm."','".$e_id."','".$comment."')";
			$res_insert_qry==mysql_query($insert_qry);
			header('Location:index.php');
			
		}
		else
		{
			echo "before value is submit";
		}
	}
?>
<?php include('include/header.php'); ?>
<link rel="stylesheet" href="CSS/style1.css" />
<br /><br />
<div id="round_cornar">
	<div class="page_title" style="">Feedback Form</div>
    <form name="feedback_form" id="feedback_form" action="feedback.php" enctype="multipart/form-data" method="post">
        <br />
        <div class="formrowgrey">
        	<div class="formleft"><strong>User Name</strong><span id="ns">*</span></div>
            <div class="formright">
                <input class="textbox" type="text" id="name" name="user_nm" required/>
               </div>
        </div>
            
        <div class="formrow">
        	<div class="formleft"><strong>Email Id</strong><span id="es">*</span></div>
            <div class="formright">
                <input class="textbox" type="text" id="email" name="e_id"  required/>
            </div>
        </div>
                
        <div class="formrowgrey">
        
             <div class="formleft"><strong>Comment</strong><span id="cs">*</span></div>
                 <div class="formright">
                	<input class="textbox" id="comment" name="comment" required />
                </div>
           
        </div>
        
        <div class="formrow">
         <div class="buttons">
        	<center><input class="button_login" type="submit" name="submit" value="submit" />
            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input  class="button_login" type="reset" name="reset" value="reset" />
            </center>
         </div>
        </div>
	</form>
  <div class="clear"></div>
</div>
<br /><br /><br /><br /><br /><br />
<?php include('include/footer.php'); ?>    
			