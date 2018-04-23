<?php
 include("../database/connection.php");
$email=$_GET['email'];
$message=$_POST['feedback'];
$name=$_GET['name'];

if(isset($_POST['send']))
{
	if(!empty($message))
	{
		mysql_query("INSERT INTO admin_feedback(`email`,`name`,`message`)VALUE('$email','$name','$message')");
		  if(mysql_affected_rows()>0)
		  {
		  	  print"<script>alert('Message send successfull')</script>";
		  }
	}
}


?>
<html>
  <head>
   <style type="text/css">

      .conten
      {
      	height: auto;
      	width: 550px;
      	background: #fff;
      	margin-left: 140px;
      	margin-top:20px;
      	border-radius: 7px;
      	float: left;
      }
      .logo1
      {
      	height: 100px;
      	width: 100px;
      	float: left;
      }
      .head
      {
      	height: 100px;
      	width: 550px;
      	background: #1C93AD;
      	text-align: center;
      	border-radius: 7px 7px 0px 0px;
      	float: left;
      }
      .style
      {
      	 color:#fff;
      	 font-family: monospace;
      	 font-size: 26px;
      	 font-weight: bold;
      	 height: 100px;
      	 width: 450px;
      	 margin-top:30px;
      	 text-shadow: 1px 1px 1px #000;
      	 text-align: center;
      }
      .main
      {
      	height: auto;
      	width: 550px;
      	float: left;
      }
      .mess
      {
      	height: 100px;
      	width: 510px;
      	margin-left: 20px;
      	border-bottom: 1px solid #ccc;
      	float: left;
      }
      .img 
      {
      	height: 100px;
      	width: 70px;
      	float: left;
      }
      .sub
      { 
        height: 60px;
        float: right;
      }
   </style>
  </head>
  <body>
     <div class="wrapper">
     	<form action="" method="post">
         <div class="conten">
         	 
             <div class="head">
             	<div class="logo1">
                   <img src="../images/user_img/<?php print $email; ?>.jpg" width="100px;" height="100px" style="border-radius:7px 0px 0px 0px;">
         	    </div>
                <div class="style">MESSAGE</div>
             </div>
             <div class="main">
             	<?php
             	 $select_feed=mysql_query("SELECT * FROM feedback_info WHERE email='$email'");
              while($fetch_feed=mysql_fetch_array($select_feed))

                 {
 	            ?>
                 <div class="mess">
                   <div class="img">
                    <img src="../images/user_img/<?php print $email; ?>.jpg" height="50px" width="50px;" style="border-radius:100px; margin-top:20px;">
                   </div>
                   <div style="color:blue; font-family:monospace; font-size:17px;  font-style:italic; margin-top:20px; text-shadow:1px 1px 1px #000;"><?php print $fetch_feed[1]; ?></div>
                   <div style="color:#666; font-family:monospace; font-size:13px;"><?php print $fetch_feed[2]; ?></div>
                 </div>
                 <?php
                    }
                 ?>
                 <textarea placeholder="MESSAGE" name="feedback" style="height:100px; width:510px; margin-left:20px; margin-top:10px;"></textarea>
              <div class="sub">
                 <input type="submit" name="send" value="Name" style="padding:8px 14px; color:#fff; cursor:pointer; background:#FA5400; border:none; border-radius:3px; margin-top: 10px; float: right; margin-right: 20px;">
              </div>
             </div>
         </div> 
     </form>
     </div>
  </body>
</html>