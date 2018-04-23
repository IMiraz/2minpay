<?php
  include("../../../database/connection.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Bus Ticket</title>
<style>
/*
http://www.freshdesignweb.com/beautiful-registration-form-with-html5-and-css3.html
*/
.container
{
width:887px;
height:1200px;
background:url(../image/form/bgnoise_lg.png);
border-radius:10px;


}
.form input.search{width:333px;}

.form{
	background:#f1f1f1; width:470px; margin:0 auto; padding-left:50px; padding-top:20px;
}
.header_text
{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
	color: #498ea5;
	font-weight: 700;
	font-style: normal;
	font-size: 30px;
	padding: 0px 0px 5px 0px;
	text-shadow: 0px 1px 1px rgba(255,255,255,0.8);
}
.form fieldset{border:0px; padding:0px; margin:0px;}
.form p.contact { font-size: 12px; margin:0px 0px 10px 0;line-height: 14px; font-family:Arial, Helvetica;}

.form input[type="text"] { width: 400px; }
.form input[type="email"] { width: 400px; }
.form input[type="password"] { width: 400px; }
.form input.birthday{width:60px;}
.form input.birthyear{width:120px;}
.form label { color: #000; font-weight:bold;font-size: 12px;font-family:Arial, Helvetica; }
.form label.month {width: 135px;}
.form input, textarea { background-color: rgba(255, 255, 255, 0.4); border: 1px solid rgba(122, 192, 0, 0.15); padding: 7px; font-family: Keffeesatz, Arial; color: #4b4b4b; font-size: 14px; -webkit-border-radius: 5px; margin-bottom: 15px; margin-top: -10px; }
.form input:focus, textarea:focus { border: 1px solid #ff5400; background-color: rgba(255, 255, 255, 1); }
.form .select-style {
  -webkit-appearance: button;
  -webkit-border-radius: 2px;
  -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
  -webkit-padding-end: 20px;
  -webkit-padding-start: 2px;
  -webkit-user-select: none;
  background-image: url(images/select-arrow.png), 
    -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
  background-position: center right;
  background-repeat: no-repeat;
  border: 0px solid #FFF;
  color: #555;
  font-size: inherit;
  margin: 0;
  overflow: hidden;
  padding-top: 5px;
  padding-bottom: 5px;
  text-overflow: ellipsis;
  white-space: nowrap;}
.form .gender {
  width:410px;
  }
.form input.buttom{ background: #4b8df9; display: inline-block; padding: 5px 10px 6px; color: #fbf7f7; text-decoration: none; font-weight: bold; line-height: 1; -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; -moz-box-shadow: 0 1px 3px #999; -webkit-box-shadow: 0 1px 3px #999; box-shadow: 0 1px 3px #999; text-shadow: 0 -1px 1px #222; border: none; position: relative; cursor: pointer; font-size: 14px; font-family:Verdana, Geneva, sans-serif;}
.form input.buttom:hover	{ background-color: #2a78f6; }
.get
{
float:left;
width:887px;
background:#99CC33;
}



</style>	
</head>
<body>
<?php
$city_name=$_POST['city_name'];
$city_id=$_POST['city_id'];
if(isset($_POST['add']))
{
 mysql_query("INSERT INTO city_info(`city_name`,`city_id`)VALUE('$city_name','$city_id')");
 if(mysql_affected_rows()>0)
 {
  print"yess";

 } 
 else
 {
   print "no";
 }
}
?>

<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
            
                </span>
                <div class="clr"></div>
            </div><!--/ freshdesignweb top bar -->
			<header>
				<h1 class="header_text">City Name</h1>
            </header>       
      <div  class="form">
	  
	  
	  <input id="search" name="name" placeholder="exampletanbir@gmail.com" type="search" class="search">
					<input class="buttom" name="submit" id="submit" tabindex="5" value="Search" type="submit"> 
    		<form id="contactform" method="post">
			<p class="contact"><label for="name">City name:</label>
			  </p>
			<span id="cat" style="color:#FF0000"></span> 
			<select class="select-style gender" name="city_name">
           	<option>City name</option>
            <option >DHAKA</option>
            <option >CHITTAGONG</option>
        
				<option value="select"></option>
				
            </select> 
			<br>
			<br>
    			<p class="contact"><label for="name">city ID</label></p> 
    			<input id="name" name="city_id" placeholder="City ID" tabindex="1" type="text">
			<span id="cat" style="color:#FF0000"></span>
            <input class="buttom" name="add" id="submit" tabindex="5" value="Added" type="submit">
			<input class="buttom" name="edit" id="submit" tabindex="5" value="Edited" type="submit"> 
			<input class="buttom" name="delete" id="submit" tabindex="5" value="Deleted" type="submit"> 
			<input class="buttom" name="view" id="submit" tabindex="5" value="Viewed" type="submit">
			<br>
			<span style="margin-left:140px; color:#FF0000"></span>
						<p></p>  	 
   </form> 
</div>      
</div>

</body>
</html>
