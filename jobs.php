<!doctype html>
<html lang="en">

<head>
	<title>JavaJam Coffee House - Jobs</title>
	<meta charset=“utf-8”>
	<script type= "text/javascript" src="jobs.js"></script>
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
			padding: 20px 20px 0 20px;
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

		form {
			font-family: Arial, sans-serif;
			width: 350px;
			padding: 10px;
		}

		label {
			float: left;
			clear: left;
			display: block;
			width: 100px;
			text-align: right;
			padding-right: 30px;
			margin-top: 15px;
		}

		input,
		textarea {
			margin-top: 15px;
			display: block;
		}

		#mySubmit {
			margin: 30px 0 50px 0;
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
				<h2>Jobs at JavaJam</h2>
				<p>Want to work at JavaJam? Fill out the form below to start your application. Required fields are marked with an asterisk
					*
				</p>
				<form method="post" action="show_post.php">
					<label for="myName">*Name:</label>
					<input type="text" name="myName" id="myName" required>
					<label for="myEmail">*E-mail:</label>
					<input type="email" name="myEmail" id="myEmail" required>
					<label for="myDate">Start Date:</label>
					<input type="date" name="myDate" id="myDate">
					<label for="myComments">*Experience:</label>
					<textarea name="myComments" id="myComments" rows="2" cols="20" required></textarea>
					<input id="mySubmit" type="submit" value="Apply Now">
				</form>
			</div>
		</div>
		<script type = "text/javascript" src = "jobsr.js"></script>
		<footer>
			<small><i>Copyright &copy; 2018 JavaJam Coffee House<br>
					<a href="mailto:jin@ding.com" id="email">jin@ding.com</a>
				</i></small>
		</footer>
	</div>
</body>

</html>