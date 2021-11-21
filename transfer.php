<?php
require_once('db_connection.php');
$sql = "SELECT customer_id,name,email,current_balance FROM customers";

$result = dbQuery($sql);
?>

<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

button{
	border-color: rgb(195, 199, 235);
	border-radius: 30px;
	background-color: rgb(3,152,220); 
}
table{
	border-collapse: collapse;
	width: 70%;
}
p{
	font-size: 35px;
	font-family: garamond;
	text-align: center;
}
td{
	font-size: 25px;
	font-family: garamond;
	text-align: center;
}

tr{
	height:70px;
}
</style>
<body>
	<?php include('header.php'); ?>
	<br/>
	<br/>

<center>
	<p><b>Our Customers</b></p>
	<br/>
<table border = "1">
	<tr>
		<td><b>Customer ID</b></td>
		<td><b>Customer Name</b></td>
		<td><b>Email ID</b></td>
		<td><b>Current Balance</b></td>
		<td><b>View</b></td>
	</tr>
	<?php
	
	while($data = dbFetchAssoc($result)){
	extract($data);	
	?>
      <tr>
      <td> <?php echo $customer_id; ?></td>
      <td> <?php echo $name; ?></td>
      <td> <?php echo $email; ?></td>
      <td> <?php echo $current_balance; ?></td>
      <td>
	  <a href="selecteduserdetails.php?customer_id=<?php echo $customer_id; ?>"><button>Transfer</button></a>
	  </td>
    </tr>
    <?php
	}//while
	?>
</table>
</center>
</body>
</html>