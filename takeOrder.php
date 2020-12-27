<?php

include 'conn.php';
//Getting Post Values

$Name = $_POST['Name'];
$email = $_POST['email'];
$phNumber = $_POST['PhoneNumber'];
$Address = $_POST['Address'];
$OrderID = $_POST['OrderID'];
$cc = $_POST['cc'];


$insertquery = " INSERT INTO `ordercst` (`ID`, `email`, `Name`, `PhoneNumber`, `Address`, `OrderID`, `Credit-Card`) VALUES (NULL, '$email', '$Name', '$phNumber', '$Address', '$OrderID', '$cc') ";
$insetsql = mysqli_query($conn, $insertquery);

?>
<script>
   alert("Order Placed!");
   location.replace("http://localhost/Modified-Scott/giveOrder.php");
</script>
<?php


?>