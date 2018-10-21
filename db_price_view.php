<?php 
 @ $db = new mysqli('localhost', 'f36ee', 'f36ee', 'f36ee');
 if (mysqli_connect_errno()) {
   echo "Error: Could not connect to database.  Please try again later.";
   exit;
 }

 $query = "select * from prices where productid = 1";
 $result = $db->query($query);
 $row = $result->fetch_assoc();
 $GLOBALS['JAVA_SINGLE_PRICE']=$row['single_price'];

 $query = "select * from prices where productid = 2";
 $result = $db->query($query);
 $row = $result->fetch_assoc();
 $GLOBALS['LAIT_SINGLE_PRICE']=$row['single_price'];
 $GLOBALS['LAIT_DOUBLE_PRICE']=$row['double_price'];

 $query = "select * from prices where productid = 3";
 $result = $db->query($query);
 $row = $result->fetch_assoc();
 $GLOBALS['CAPP_SINGLE_PRICE']=$row['single_price'];
 $GLOBALS['CAPP_DOUBLE_PRICE']=$row['double_price'];

 $result->free();
 $db->close();
?>