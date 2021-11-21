<?php
$SenderId=$_REQUEST['SenderId'];
$conn=mysqli_connect("localhost","root","","banking");
if($SenderId!=="")
{
	$sql=mysqli_query($conn,"SELECT * FROM `customers` WHERE customer_id='$SenderId'");
	$row=mysqli_fetch_array($sql);
	$Sname=$row["name"];
	$Semail=$row["email"];
}
$result=array("$Sname","$Semail");
$myJSON = json_encode($result);
echo $myJSON;

?>