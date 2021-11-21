<?php
$serverName="localhost";
			$userName="root";
			$password="";
			$dbname="banking";
			$conn=mysqli_connect($serverName,$userName,$password,$dbname);
session_start();
$customer_id = $_GET['customer_id'];
$name=$_GET['name'];
$sql = "SELECT *
		FROM customers
    WHERE customer_id = $customer_id";
 $result=$conn->query($sql);		

while($row=$result->fetch_assoc()){
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table{
	font-size: 25px;
	font-family: garamond;
}
p{
	font-size: 35px;
	font-family: garamond;
}
td{
	text-align: center;
}
</style>
<?php include("topheader.php"); ?>

<center>
	<p><b>Welcome <?php echo $name; ?>!</b></p>
<table>
	<?php echo "<tr><td><b>&nbsp;Customer ID : </b>".$row["customer_id"]."</td></tr>"; ?>
	<br/>
	<?php echo "<tr><td><b>&nbsp;Customer Name : </b>".$row["name"]."</td></tr>"; ?>
	<br/>
	<?php echo "<tr><td><b>&nbsp;Customer Mail : </b>".$row["email"]."</td></tr>"; ?>
	<br/>
	<?php echo "<tr><td><b>&nbsp;Current Balance : </b>".$row["current_balance"]."</td></tr>"; ?>
</table>
</center>
<?php } 
?>
</html>