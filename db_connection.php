<?php

$username = "root";
$password = "";
$server = "localhost";
$db = "banking";

$dbConn = mysqli_connect($server,$username,$password,$db);

if($dbConn){

?>
    <script langauage = "javascript">
    alert("Connection Successful");
    </script>

<?php
}

else{
?>
    <script language = "javascript">
    alert("Error: Unable to connect to database");
    </script>

<?php
}



function dbQuery($sql)
{   
   global $dbConn;
  $result = mysqli_query($dbConn,$sql) or die(mysqli_error($dbConn));
  
  return $result;
}

function dbAffectedRows()
{
  global $dbConn;
  
  return mysqli_affected_rows($dbConn);
}

function dbFetchArray($result, $resultType = MYSQL_NUM) {
  return mysqli_fetch_array($result, $resultType);
}

function dbFetchAssoc($result)
{
  return mysqli_fetch_assoc($result);
}

function dbFetchRow($result) 
{
  return mysqli_fetch_row($result);
}

function dbFreeResult($result)
{
  return mysqli_free_result($result);
}

function dbNumRows($result)
{
  return mysqli_num_rows($result);
}

function dbSelect($dbName)
{
  return mysqli_select_db($dbName);
}

function dbInsertId()
{
  return mysqli_insert_id();
}
?>