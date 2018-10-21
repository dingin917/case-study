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
            margin-top: 50px;
			text-align: center;
    		width: 165px;
		}
        span {
            font-size: 1.2em;
        }
        h3 {
            text-align: center;
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
                <?php include 'db_report.php' ?>
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