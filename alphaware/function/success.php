<?php
// var_dump($_REQUEST);
include("../db/dbconn.php");
$item_no            = $_REQUEST['PayerID'];
$tid            = $_REQUEST['tid'];
// $item_transaction   = $_REQUEST['tx']; // Paypal transaction ID
// $item_price         = $_REQUEST['amt']; // Paypal received amount
// $item_currency      = $_REQUEST['cc']; // Paypal received currency type

$price = '10.00';
$currency='USD';

//Rechecking the product price and currency details
if(!empty($item_no))
{
$query = mysqli_query($conn, "UPDATE transaction set order_stat = 'Confirmed' WHERE transaction_id = $tid  ") or die (mysqli_error($conn)."UPDATE trasaction set order_stat = 'Confirmed' WHERE trasaction_id = $tid  ");
   echo "<script>alert('Order Confirmed!')</script>";
   header('location:../home.php');
}
else
{
    $content = "<h1>Payment Failed</h1>";
}

$title = "PayPal Payment in PHP";
$heading = "Welcome to PayPal Payment PHP example.";
//include('html.inc');
?>