<!doctype html>
<html lang="en">

<head>
	<title>JavaJam Coffee House - Menu</title>
	<meta charset=“utf-8”>
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
		.submit-button {
			text-align: center;
    		width: 65px;
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
				<h2>Click to update product prices: </h2>
				<div class="details">
				<form action="result.php" method="post">
					<table border="1">
						<?php include 'db_price_view.php' ?>
						<tr>
        					<td><input type='checkbox' name='java_update'></td>
        					<th>Just Java</th>
       						<td>Regular house blend, decaffeinated coffee, or flavor of the day.<br>Endless Cup $<?php echo $GLOBALS['JAVA_SINGLE_PRICE']?> <input type='text' name='java_price' placeholder='new price..'></td>
    					</tr>
						<tr>
        					<td><input type='checkbox' name='lait_update'></td>
        					<th>Cafe au Lait</th>
        					<td>House blended coffee infused into a smooth, steamed milk.<br>Single $<?php echo $GLOBALS['LAIT_SINGLE_PRICE']?> <input type='tex' name='lait_single_price' placeholder='new price..'> Double $<?php echo $GLOBALS['LAIT_DOUBLE_PRICE']?> <input type='text' name='lait_double_price' placeholder='new price..'></td>
    					</tr>
						<tr>
        					<td><input type='checkbox' name='capp_update'></td>
        					<th>Iced Cappuccino</th>
        					<td>Sweetened espresso blended with icy-cold milk and served in a chilled glass.<br>Single $<?php echo $GLOBALS['CAPP_SINGLE_PRICE']?> <input type='text' name='capp_single_price' placeholder='new price..'> Double $<?php echo $GLOBALS['CAPP_DOUBLE_PRICE']?> <input type='text' name='capp_double_price' placeholder='new price..'></td>
    					</tr>
						<tr>
							<td colspan="3"><input type="submit" value="Update" class="submit-button"></td>
						</tr>
					</table>
				</form>
				</div>
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