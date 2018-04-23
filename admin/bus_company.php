<?php 
include("../../../database/connection.php");

?>

<html>
	<title></title>
	<head></head>
<?php
$bus_name=$_POST['bus_name'];
$bus_id=$_POST['id'];
if(isset($_POST['add']))
{
 mysql_query("INSERT INTO bus_company_info(`bus_company`,`bus_id`)VALUE('$bus_name','$bus_id')");
 if(mysql_affected_rows()>0)
 {
  print "yess";
 }
 else
 {
  print "NO";
 }


}

 ?>	
	<body bgcolor="#FFFFFF">
		<table height="200px"width="500px" bgcolor="#CCCCCC" align="center" border="">
		<tr>
			<td colspan="4" height="8" align="center" bgcolor="#CCCCCC">  <h1>Bus company  information</h1></td>
		</tr>
            
      <form name="" method="post" target="">

            <tr>
			<td bgcolor="#FFFFFF">BUS Company</td>
			<td>
			<input type="text" name="bus_name"> 
			</td>
			
		</tr>
            <tr>
                <td>Bus ID</td>
                <td><input type="text" name="id"></td>
            </tr>
            
            <tr>
            <td align="center" colspan="4"><label>
            <input type="submit" name="add" value="ADD">
            </label>
            <button>DELETE</button><button>BUY</button><button>VIEW</button></td>
        </tr>
    </form>
        </table> 
	</body>
</html>         
            