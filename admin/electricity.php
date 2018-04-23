<?php
  include("../../../database/connection.php");
   $name=$_POST['name'];
   $id=$_POST['id'];
   $cd_no=$_POST['cd_no'];
   $bill_no=$_POST['bill_no'];
   $zip_code=$_POST['zip_code'];
   $address=$_POST['address'];
   $price=$_POST['price'];
?>

<html>
	<title> Gash Customer Information</title>
	<head></head>
	<body bgcolor="#FFFFFF">
	<?php
	   if(isset($_POST['add']))
	   	  {
		      mysql_query("INSERT INTO gas_info(`name`,`id`,`cd_no`,`bill_no`,`zip_code`,`date`,`address`,`price`)VALUE('$name','$id','$cd_no','$bill_no','$zip_code','".$_POST['date']."-".$_POST['month']."-".$_POST['year']."','$address','$price')");
			     if(mysql_affected_rows()>0)
				   {
				      print"<script>alert('successfull')</script>";
				   }
				   else
				   {
				      print"<script>alert('nooooooooo')</script>";
				   }
		  }
	?>
	 <form action="" method="post">
		<table height="500px"width="500px" bgcolor="#CCCCCC" align="center" border="">
		<tr>
			<td colspan="4" height="8" align="center" bgcolor="#CCCCCC">  <h1>Customer information</h1></td>
		</tr>
		
		<tr>
            <td bgcolor="#FFFFFF">Name</td>
            <td><input type="text" placeholder="Name" name="name"></td>
		</tr>
		
		<tr>	
				<td bgcolor="#FFFFFF">Consumer Id</td>
				<td> <input type="number" placeholder="Consumer Id" name="id"></td>	
		</tr>
            
            <tr>	
				<td bgcolor="#FFFFFF">CD NO</td>
				<td> <input type="number" placeholder="CD NO" name="cd_no"></td>	
		</tr>
            <tr>	
				<td bgcolor="#FFFFFF">BILL NO</td>
				<td> <input type="number" placeholder="BIll NO" name="bill_no"></td>
                
		</tr>
            <tr>	
				<td bgcolor="#FFFFFF">ZIP CODE</td>
				<td> <input type="number" placeholder="ZIP Code" name="zip_code"></td>
                
		</tr>
			
		<tr>
			<td bgcolor="#FFFFFF">month</td>
			<td>
				<select name="month">				
				<option>select one</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
				</select>
				
				<select name="date">				
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
				<option>13</option>
				<option>14</option>
				<option>15</option>
				<option>16</option>
				<option>17</option>
				<option>18</option>
				<option>19</option>
				<option>20</option>
				<option>21</option>
				<option>22</option>
				<option>23</option>
				<option>24</option>
				<option>25</option>
				<option>26</option>
				<option>27</option>
				<option>28</option>
				<option>29</option>
				<option>30</option>
				<option>31</option>
				</select>
				
				<select name="year">				
				<option>2015</option>
				<option>2016</option>
				<option>2017</option>
				<option>2018</option>
		
				</select>
			</td>
			
		</tr>
		
		<tr>
			<td bgcolor="#FFFFFF">Address</td>
			<td><input type="text" placeholder="Address" name="address"></td>
			
		</tr>
			
		<tr>	
            <td bgcolor="#FFFFFF">Taka </td>
			<td><input type="Number" placeholder="taka" name="price"> </td>
		</tr>
		<tr>
            <td align="center" colspan="4"><input type="submit" name="add" value="ADD"><button>DELETE</button><button>BUY</button><button>VIEW</button></td>
        </tr>	
        
       </table> 
	   </form>
	</body>
</html>
