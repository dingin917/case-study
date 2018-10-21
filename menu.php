<!doctype html>
<html lang="en">

<head>
	<title>JavaJam Coffee House - Menu</title>
	<meta charset=“utf-8”>
	<script type= "text/javascript" src="menu.js"></script>
	<style>
		header {
			background-color: #d2b48c;
			padding-top: 5px;
			padding-bottom: 5px;
		}

		body {
			font-family: Verdana, Arial, sans-serif;
			background-color: #e9dba1;
			color: #330605;
		}

		#wrapper {
			width: 80%;
			margin: auto;
			min-width: 850px;
			background-color: #e2d2b0;
			box-shadow: 5px 5px 5px black;
		}

		#leftcolumn {
			float: left;
			width: 155px;
		}

		#rightcolumn {
			margin-left: 155px;
			background-color: #f5f5dc;
		}

		.content {
			padding: 20px 20px 20px 20px;
			min-height: 300px;
		}

		#titleimg {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}

		nav a {
			text-decoration: none;
			font-family: Verdana;
			font-size: 1.0em;
			font-weight: bold;
		}

		nav a:link {
			color: #7c5240;
		}

		nav a:visited {
			color: #a8886b;
		}

		nav a:active {
			color: #614032;
		}

		nav a:hover {
			color: #e75010;
		}

		nav ul {
			list-style-type: none;
		}

		h2 {
			margin-top: 0;
		}

		.details {
			align-content: center;
			padding-left: 50px;
			padding-right: 10px;
		}
		

		input {
			width: 50px;
		}

		footer {
			font-size: 80%;
			text-align: center;
			clear: right;
			padding: 20px;
			background-color: #d2b48c;
			color: black;
		}

		#email {
			color: #330605;
		}

		table {
			margin: auto;
			border: none;
			width: 90%;
			border-spacing: 3px;
		}

		td {
			padding: 10px;
			font-family: Arial, sans-serif;
			border-style: none;
		}

		th {
			border: none;
			width: 130px;
		}

		tr:nth-of-type(odd) {
			background-color: #d2b48c;
		}

		.Price {
			width: 50px;
		}

		.radioButton {
			width: 25px;
			padding-right: 5px;
		}

		.submit-button {
			width: 130px;
		}

		.submit-row {
			background-color: #f5f5dc;
		}
	</style>
</head>

<body>
	<div id="wrapper">
		<header>
			<img src="./resources/title.PNG" id="titleimg">
		</header>
		<div id="leftcolumn">
			<nav>
				<ul>
					<li><a href="index.php">Home</a> &nbsp; </li>
					<li><a href="menu.php">Menu</a> &nbsp; </li>
					<li><a href="music.php">Music</a> &nbsp; </li>
					<li><a href="jobs.php">Jobs</a> &nbsp; </li>
					<li> &nbsp; </li>
					<li> &nbsp; </li>
					<li><a href="admin_price_update.php">Product Price Update</a> &nbsp; </li>
					<li><a href="admin_sales_report.php">Daily Sales Report</a></li>
				</ul>
			</nav>
		</div>
		<div id="rightcolumn">
			<div class="content">
				<h2>Coffee at JavaJam</h2>
				<div class="details">
				<form action="db_place_order.php" method="post">
					<table border="1">
						<?php include 'db_price_view.php' ?>
						<tr>
        					<th>Just Java</th>
        					<td>Regular house blend, decaffeinated coffee, or flavor of the day.<br>Endless Cup $<?php echo $GLOBALS['JAVA_SINGLE_PRICE']?></td>
        					<td><input type='text' id='JavaQty' placeholder='Quantity' name='JavaQty'></td>
        					<td><div class='Price' id='JavaSubtotalPrice'></div></td>
       					</tr>
						<tr>
        					<th>Cafe au Lait</th>
        					<td>House blended coffee infused into a smooth, steamed milk.<br>
            					<input type='radio' class='radioButton' name='LaitPrice' id='LaitSinglePrice' value='single' checked>Single $<?php echo $GLOBALS['LAIT_SINGLE_PRICE']?> 
            					<input type='radio' class='radioButton' name='LaitPrice' id='LaitDoublePrice' value='double'>Double $<?php echo $GLOBALS['LAIT_DOUBLE_PRICE']?></td>
        					<td><input type='text' id='LaitQty' placeholder='Quantity' name='LaitQty'></td>
        					<td><div class='Price' id='LaitSubtotalPrice'></div></td>
        				</tr>
						<tr>
        					<th>Iced Cappuccino</th>
        					<td>Sweetened espresso blended with icy-cold milk and served in a chilled glass.<br>
            					<input type='radio' class='radioButton' name='CappPrice' id='CappSinglePrice' value='single' checked>Single $<?php echo $GLOBALS['CAPP_SINGLE_PRICE']?> 
            					<input type='radio' class='radioButton' name='CappPrice' id='CappDoublePrice' value='double'>Double $<?php echo $GLOBALS['CAPP_DOUBLE_PRICE']?></td>
        					<td><input type='text' id='CappQty' placeholder='Quantity' name='CappQty'></td>
        					<td><div class='Price' id='CappSubtotalPrice'></div></td>
        				</tr>	
						<tr>
							<th></th>
							<td></td>
							<td><strong>Total Price: </td>
							<td><div class="Price" id="TotalPrice"></div></td>
						</tr>
						<tr>
							<td colspan="4" align="right" class="submit-row"><input type="submit" value="Place Order" class="submit-button"></td>
						</tr>
					</table>
				</form>
				</div>
				<script type = "text/javascript" src = "menur.js"></script>
			</div>
		</div>
		<footer>
			<small><i>Copyright &copy; 2018 JavaJam Coffee House<br>
					<a href="mailto:jin@ding.com" id="email">jin@ding.com</a>
				</i></small>
		</footer>
	</div>
</body>

</html>