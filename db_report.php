<?php
$radio = $_POST['check'];

$java_sales = find_sales_by_product(1);
$lait_sales = find_sales_by_product(2);
$capp_sales = find_sales_by_product(3);

function find_sales_by_product($id){
    @ $db = new mysqli('localhost', 'f36ee', 'f36ee', 'f36ee');
    if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
    }
    $date = date("Y-m-d");
    $query = "select * from sales where productid = ".$id." and transaction_date = '".$date."'";
    $result = $db->query($query);

    $num_results = $result->num_rows;

    $sales = 0;

    for($i=0; $i<$num_results; $i++) {
        $row = $result->fetch_assoc();
        $sales = $sales + $row['sales'];
    }
    $result->free();
    $db->close();
    return $sales;
}

function find_sales_by_category($category){
    @ $db = new mysqli('localhost', 'f36ee', 'f36ee', 'f36ee');
    if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
    }
    $date = date("Y-m-d");
    $query = "select * from sales where category = '".$category."' and transaction_date = '".$date."'";
    $result = $db->query($query);
    $num_results = $result->num_rows;

    $quant = 0;
    $sales = 0;

    for($i=0; $i<$num_results; $i++) {
        $row = $result->fetch_assoc();
        $sales = $sales + $row['sales'];
        $quant = $quant + $row['quantity'];
    }

    if ($category == 'single') {
        echo "<tr>
                <td>Single Shot</td>
                <td>".$quant."</td>
                <td>".$sales."</td>
            </tr>";
    } else {
        echo "<tr>
                <td>Double Shots</td>
                <td>".$quant."</td>
                <td>".$sales."</td>
            </tr>";
    }

    $result->free();
    $db->close();
    return $sales;
}


if ($radio == 'totalsales') {
    echo "<h2>Total dollar sales by products: </h2>
	        <div class='details'>
	            <table border='1'>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Total Dollar Sales</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Just Java</td>
                        <td>".$java_sales."</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Cafe au Lait</td>
                        <td>".$lait_sales."</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Iced Cappuccino</td>
                        <td>".$capp_sales."</td>
                    </tr>
                </table>
            </div>";
} else {

    echo "<h2>Sales quantities by product categories: </h2>
	        <div class='details'>
	            <table border='1'>
                    <tr>
                        <th>Product Categories</th>
                        <th>Sales Quantities</th>
                        <th>Dollar Sales</th>
                    </tr>";

    $single_sales = find_sales_by_category('single');
    $double_sales = find_sales_by_category('double');
              
    echo "      </table>
            </div>";

    if ($single_sales>$double_sales) {
        echo "<h3>Single Shot has achieved the higher dollar sales!</h3>";
    } else if ($single_sales<$double_sales) {
        echo "<h3>Double Shots has achieved the higher dollar sales!</h3>";
    } else {
        echo "<h3>Same dollar sales in both categories!</h3>";
    }
}

?>