<?php
  include("../../../database/connection.php");
  $bus_name=$_POST['bus_name'];
  $cetagory=$_POST['cetagory'];
  $from=$_POST['from'];
  $to=$_POST['to'];
  $distance=$_POST['distance'];
  $price=$_POST['price'];
  
?>

<html>
	<title>Bus Information</title>
	<head></head>
	<body bgcolor="#FFFFFF">
	 <?php
	     if(isset($_POST['add']))
		    {
			    mysql_query("INSERT INTO bus_info(`bus_name`,`cetagory`,`from`,`to`,`distance`,`price`)VALUE('$bus_name','$cetagory','$from','$to','$distance','$price')");
					if(mysql_affected_rows()>0)
						{
						   print"<script>alert('successfull')</script>";
						}
					else
					    {
						     print"<script>alert('nooooooo')</script>";
						}
			}
	 ?>
	 <form method="post" action="">
		<table height="500px"width="500px" bgcolor="#CCCCCC" align="center" border="">
		<tr>
			<td colspan="4" height="8" align="center" bgcolor="#CCCCCC">  <h1>Bus information</h1></td>
		</tr>
		
		<tr>
            <td bgcolor="#FFFFFF"> Bus company Name</td>
            <td>
				<select name="bus_name">
								
				<option>Select BUS</option>
				<?php
				  $bus_in=mysql_query("SELECT * FROM bus_company_info");
				  while($fetch_bus=mysql_fetch_array($bus_in))
				   {
				?>
				<option><?php print $fetch_bus['0']; ?></option>
				<?php
				}
				?>
				
				</select>
			</td>
		</tr>
		
		<tr>	
            <td bgcolor="#FFFFFF">Ac/Non Ac</td>
			<td>
				<select name="cetagory">				
				<option>select one</option>
				<option>AC</option>
				<option>NON AC</option>
				</select>
			</td>
                
		</tr>
            
            <tr>	
				<td bgcolor="#FFFFFF">From</td>
				<td> <select name="from">				
				<option>select one</option>
				<?php
				  $city=mysql_query("SELECT * FROM city_info");
				  while($fetch_city=mysql_fetch_array($city))
				   {
				?>
				<option><?php print $fetch_city['0']; ?></option>
				<?php
				}
				?>
				
				</select></td>	
		</tr>
            <tr>	
				<td bgcolor="#FFFFFF">To</td>
				<td> <select name="to">				
				<option>Select one</option>
				<?php
				  $city=mysql_query("SELECT * FROM city_info");
				  while($fetch_city=mysql_fetch_array($city))
				   {
				?>
				<option><?php print $fetch_city['0']; ?></option>
				<?php
				}
				?>
				
				</select></td>
                
		</tr>
            <tr>	
				<td bgcolor="#FFFFFF">Distance</td>
				<td> <input type="number" placeholder="Distance/km" name="distance"></td>
                
		</tr>
			
		<tr>
			<td bgcolor="#FFFFFF">Rent</td>
            <td><input type="number" placeholder="TK" name="price"></td>
			
		</tr>
        <tr>
            <td align="center" colspan="4"><input type="submit" name="add" value="ADD"><button>DELETE</button><button>BUY</button><button>VIEW</button></td>
        </tr>
        
       </table> 
	   </form>
	</body>
</html>
