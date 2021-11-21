<?php
require_once('db_connection.php');
$sql = "SELECT * FROM transaction";

$result = dbQuery($sql);
?>

<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

button{
    border-color: rgb(195, 199, 235);
    border-radius: 30px;
    background-color: rgb(195, 199, 235);
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
    <p><b>Transaction History</b></p>
    <br/>
<table border = "1">
    <tr>
        <td><b>Sender Name</b></td>
        <td><b>Receiver Name</b></td>
        <td><b>Amount Transferred</b></td>
    </tr>
    <?php
    
    while($data = dbFetchAssoc($result)){
    extract($data); 
    ?>
      <tr>
      <td> <?php echo $sender; ?></td>
      <td> <?php echo $receiver; ?></td>
      <td> <?php echo $amount_transferred; ?></td>
    </tr>
    <?php
    }//while
    ?>
</table>
</center>
</body>
</html>