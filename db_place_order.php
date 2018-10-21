<?php 
$java_qty = $_POST['JavaQty'];
$lait_qty = $_POST['LaitQty'];
$capp_qty = $_POST['CappQty'];

$java_price = find_price(1, 'single');
$lait_price = find_price(2, $_POST['LaitPrice']);
$capp_price = find_price(3, $_POST['CappPrice']);

place_order(1, $java_qty, $java_price, 'single');
place_order(2, $lait_qty, $lait_price, $_POST['LaitPrice']);
place_order(3, $capp_qty, $capp_price, $_POST['CappPrice']);

function place_order($id, $qty, $price, $category){
    if($qty) {
        if(!get_magic_quotes_gpc()) {
            $qty = addslashes($qty);
        }
        @ $db = new mysqli('localhost', 'f36ee', 'f36ee', 'f36ee');
        if (mysqli_connect_errno()) {
           echo "Error: Could not connect to database.  Please try again later.";
           exit;
        } 

        $amount = $qty*$price;
        $date = date("Y-m-d");

        $query = "insert into sales values (NULL, ".$id.", ".$qty.", '".$category."', ".$amount.", '".$date."')";

        $db->query($query);
        $db->close();
    }
}

function find_price ($id, $quant){
    @ $db = new mysqli('localhost', 'f36ee', 'f36ee', 'f36ee');
    if (mysqli_connect_errno()) {
      echo "Error: Could not connect to database.  Please try again later.";
      exit;
    }
   
    $query = "select * from prices where productid = ".$id;
    $result = $db->query($query);
    $row = $result->fetch_assoc();

    $db->close();

    if ($quant == 'single') {
        return $row['single_price'];
    } else {
        return $row['double_price'];
    }
}

echo "<h2>Order placed successfully!</h2>";
echo "<a href='menu.php'>Go Back To Menu</a>";

?>
