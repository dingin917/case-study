<!doctype html>
<html lang="en">

<head>
	<title>JavaJam Coffee House - Music</title>
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

		.musictable {
			padding: 10px 20% 10px 10%;
		}

		table {
			margin: auto;
			border: none;
			width: 500px;
		}

		caption {
			font-weight: bold;
			font-size: 1.2em;
			text-align: left;
			background-color: #e2d2b0;
		}

		td {
			padding: 10px;
			font-family: Arial, sans-serif;
			border-style: none;
		}

		th {
			border: none;
			padding: 10px 30px 10px 30px;
			vertical-align: 0;
		}

		audio {
			padding: 30px 0 20px 0;
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
				<h2>Music at JavaJam</h2>
				<p>The first Friday night each month at JavaJam is a special night. Join us from 8pm to 11pm for some music you won't
					want to miss.
				</p><br>
				<div class="musictable">
					<table border="1">
						<caption>JANUARY</caption>
						<tr>
							<!-- image source: https://www.google.com/search?hl=en-SG&biw=1057&bih=680&tbm=isch&sa=1&ei=jyKRW_-gMIXTvwTtsZagCQ&q=birdy+&oq=birdy+&gs_l=img.3...23588.29351.0.30026.20.16.1.0.0.0.740.879.0j1j6-1.2.0....0...1c.1.64.img..17.3.881.0..0j0i67k1.0.kpSgwp_lc1g#imgrc=PBaxVXTMnJtkFM:-->
							<th><img src="./resources/birdy.jpg" height="70px" width="70px"></th>
							<td>Birdy entertains with her melodic folk style.<br>CDs are now available.<br>
								<audio controls><source src="./resources/music.mp3" type="audio/mpeg"></audio>
							</td>
						</tr>
					</table>
					<table border="1">
						<caption>FEBRUARY</caption>
						<tr>
							<!-- image source: https://www.google.com.sg/search?biw=1116&bih=652&tbm=isch&sa=1&ei=bSuRW4K9INn0rAGBioJw&q=troye+sivan+black&oq=troye+sivan+black&gs_l=img.3...84525.89982.0.90196.29.19.2.0.0.0.992.1732.3j0j1j1j6-1.6.0....0...1c.1.64.img..21.4.1306...0j35i39k1.0.68Y6ORZINyg#imgdii=hCk18hF1zRpstM:&imgrc=tsEH356UhImqAM:-->
							<th><img src="./resources/troye.jpeg" height="70px" width="70px"></th>
							<td>Troye Sivan is back from his tour.<br>New songs.<br>New stories.<br>CDs are now available.<br>
								<audio controls><source src="./resources/music.mp3" type="audio/mpeg"></audio>
							</td>
						</tr>
					</table>
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