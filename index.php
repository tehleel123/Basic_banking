<!DOCTYPE html>
<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
.view, .transact, .transfer {
  border: 3px solid black;
  border-radius: 30px;
  color: black;
  padding: 14px 28px;
  font-size: 25px;
  cursor: pointer;
  background-color: rgb(3,152,220); 
}

body{
  text-align: center;
}

p{
  font-size: 40px;
  font-family: garamond;
  color:  rgb(0, 0, 102);
}

</style>

<body>
  <?php include ("topheader.php"); ?>
  <b>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

    <p>Secure Transactions. Anytime,</p>
    <p>Anywhere</p>

    <br/>
    <a href='transfer.php'>
        <button class="transfer">
            Transfer
        </button>
    </a>

    <br/>
    <br/>
    
    <a href='transactionhistory.php'>
        <button class="transact">
            Transactions
        </button>
    </a>

    <br/>
    <br/>

    <a href='view_customers.php'>
        <button class="view">
            View Customers
        </button>
    </a>
    
  </b>
</body>
</html>