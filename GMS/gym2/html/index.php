<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Gym Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/blueberry.css" />

<style type="text/css">
* {
	margin: 0;
	border: 0;
	padding: 0;
}
body {
	background: #f0f0f0;
	font: 14px/20px Arial, San-Serif;
	color: #555;
	margin: 0;
}	
h1 {
	text-align: center;
	font-size: 180%;
	line-height: 120%;
	padding: 5% 0;
}
h2 {
	text-decoration: underline;
	line-height: 280%;
	padding-left: 2%;

}
h3 {
	line-height: 110%;
	padding: 5% 0;
}
p {
	padding: 1%; 
}
img {
	text-align: center;
	max-width: 100%;
	height: auto;
	width: auto;
}
a{
	color: #FFF;
	text-decoration: none;
	font-weight: bold;
}
a:hover {
	color: #FFF;
	text-decoration: underline;
}
header {
	background: #405580;
	width: 100%;
	height: 86px;
	position: fixed;
	top: 0;
	left: 0;
	z-index: 100;
	opacity: 0.90;
}
#logo {
	margin: 20px;
	float: left;
	width: 200px;
	height: 60px;
	background: url(../images/the-gym.png) no-repeat center;
}
nav {
	float: right;
	padding: 35px 20px 20px 0; 
}
#menu-icon {
	font-size: 200%;
	display: hidden;
	width: 40px;
	height: 40px;
	background: url(../images/icon.png) center;
}
a:hover#menu-icon {
	border-radius: 4px 4px 0 0;
}
ul {
	list-style: none;
}
nav ul li {
	display: inline-block;
	float: left;
	padding: 10px;
}
.current {
	color: #FFF;
	text-decoration: underline;
}
#doc {
	margin: 40px 0;
}
#content {
	margin: 0 auto;
	max-width: 1140px;
	margin-top: 110px;
}
.blueberry {
	max-width: 960px;
	margin-top: 110px;
}
section {
	width: 29%;
	float: left;
	margin: 2% 2%;
	text-align: center;
}
.clear {
	clear: both;
}
article {
	float: left;
	margin: 0 auto;
	width: 50%;
	height: auto;
	padding: 4%;
}
aside {
	float: right;
	margin: 0 auto;
	width: 35%;
	height: auto;
	padding: 3%;
}
ul.gym li {
	padding-left: 3%;
}
table {
	width: 100%;
	text-align: left;
	padding: 10px 20px;
}
th {
	height: 50px;
}
td {
	height: 36px;
}
hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 10px;
}
footer {
	background: #333333;
	width: 100%;
	overflow: hidden;
	opacity: 0.90;
}
footer p, footer h3 {
	color: #FFF;
}
footer p a {
	color: #FFF;
	text-decoration: none;
}
ul.social li {
	display: inline;
}
ul.social li img {
	height: 50px;
}
footer.second {
	border-top: 1px solid #4D4E50;
	background-color: #333333;
	max-height: 50px;
	text-align: center;
	opacity: 0.95;
}
// media queries
@media screen and (max-width: 478px) {
	body {
		position: absolute;
	}
}
@media screen and (max-width: 740px) {
	header {
		position: absolute;
	}
	#menu-icon {
		display: inline-block;
	}
	nav ul, nav:active ul {
		display: none;
		position: absolute;
		padding: 20px;
		background: #405580;
		border: 1px solid #FFF;
		right: 20px;
		top: 60px;
		width: 50%;
		border-radius: 2px 0 2px 2px;
	}
	nav li {
		text-align: center;
		width: 100%;
		padding: 10px 0;
		margin: 0;
	}
	nav:hover ul {
		display: block;
	}
	section {
	float: left;
	width: 100%;
	margin: 0;
	padding: 0;
	}
	article {
	float: left;
	width: 100%;
	margin: 0;
	padding: 0;
	}
	aside {
	float: left;
	width: 100%;
	margin: 0;
	padding: 0;
	}
}
</style>

<script src="../js/jquery-1.6.1.js"></script>
<script src="../js/jquery.blueberry.js"></script>

<script type="text/javascript">
	$(window).load(function() {
		$('.blueberry').blueberry();
	});
</script>
</head>
<body>
	<header>
		<a href="#" id="logo"></a>
		<nav>
			<a href="#" id="menu-icon"></a>
			<ul>
				<li><a href="#" class="current">Home</a></li>
				<li><a href="../html/trainer.html">Trainers</a></li>
				<li><a href="#plan">Plans</a></li>
				<li><a href="#facility">Facility</a></li>
				<li><a href="#">Contact Us</a></li>
				<li>
					<select>
  						<option value="login_"><a href="">Login</a></option>
  						<option value="customer_"><a href="http://localhost/log4/login.php">Customer</a></option>
  						<option value="admin_"><a href="http://localhost/log4/manager_login.php">Admin</a></option>
					</select>
				</li>
			</ul>
		</nav>
	</header>
	<div id="doc">
		<div id="content">
			<div class="blueberry">
				<ul class="slides">
					<li><img src="../images/inside-gym.png" /></li>
					<li><img src="../images/push-ups.png" /></li>
					<li><img src="../images/chest-fly.png" /></li>
					<li><img src="../images/training.png" /></li>
				</ul>
			</div>
		</div>
	</div>
	<section>
		<img src="../images/trainers.png" />
		<h1>Best Trainers Around!</h1>
		<p style="margin: 2% 20%;">Not only our personal trainers are world class trainers but they also excel at applying their knowledge to all walks of life, from athletes to seniors.</p>
	</section>
	<section>
		<img src="../images/location.png" />
		<h1>Local and Convenient!</h1>
		<p style="margin: 2% 20%;">Being based in Pune, we understand the local needs and work accordingly.</p>
	</section>
	<section>
		<img src="../images/check.png" />
		<h1>Check Us Out - Free!</h1>
		<p style="margin: 2% 20%;">We provide a 3 day free training so that you can get the feel beforehand.</p>
	</section>
	<div class="clear"></div>
	<article>
		<img src="../images/gym-classes.jpg" />
	</article>
	<aside>
		<h2>Our Group Class Schedule:</h2>
		<table>
  			<tr>
    			<th>Activity</th>
    			<th>Start Time</th>
    			<th>Duration</th> 
  			</tr>
  			<tr>
    			<td>Marathon Running</td>
    			<td>4 a.m.</td>
    			<td>60 minutes</td> 
  			</tr>
  			<tr>
    			<td>Stretch & Gymnastics</td>
    			<td>5 a.m.</td>
    			<td>60 minutes</td> 
  			</tr>
  			<tr>
    			<td>Weight Lifting</td>
    			<td>6 a.m.</td>
    			<td>60 minutes</td> 
  			</tr>
  			<tr>
    			<td>Studio Cycling</td>
    			<td>7 a.m.</td>
    			<td>60 minutes</td> 
  			</tr>
  			<tr>
    			<td>Spa Services</td>
    			<td>7 a.m.</td>
    			<td>30 minutes</td> 
  			</tr>
  			<tr>
    			<td>Power Yoga</td>
    			<td>8 a.m.</td>
    			<td>60 minutes</td> 
  			</tr>
  			<tr>
    			<td>Weight Lifting</td>
    			<td>9 a.m.</td>
    			<td>60 minutes</td> 
  			</tr>
  			<tr>
    			<td>Abs Sculpting</td>
    			<td>10 p.m.</td>
    			<td>30 minutes</td> 
  			</tr>
  			<tr>
    			<td>Power Lifting</td>
    			<td>4 p.m.</td>
    			<td>60 minutes</td> 
  			</tr>
  			<tr>
    			<td>Self Defence</td>
    			<td>6 p.m.</td>
    			<td>60 minutes</td> 
  			</tr>
		</table>
	</aside>
	<div class="clear"  id="plan"></div>
	<h1 style="font-size: 180%; text-align: center; color: #0f000f;"><b>PRICING PLAN</b></h1>
	
	<img src="../images/plan.jpg" />

	<div class="clear" id="facility"></div>
	<h1 style="font-size: 180%; text-align: center; color: #0f000f;"><b>FACILITY</b></h1>
	<section>
		<h1>Ladies Section</h1>
		<img src="../images/ladies-gym.jpg" />
		<p>Write something here</p>
	</section>
	<section>
		<h1>The Gym Floor</h1>
		<img src="../images/gym-floor.jpg" />
		<p>Write something here</p>
	</section>
	<section>
		<h1>Free Weights</h1>
		<img src="../images/free-weights.jpg" />
		<p>Write something here</p>
	</section>
	<footer>
		<section>
			<h3><b>The Gym</b></h3>
			<p><b>985-555-6342</b><br><br>
				PICT<br>
				Pune, IND<br>
				theGym@email.com</p>
		</section>
		<section>
			<h3>Connect With Us!</h3>
			<ul class="social">
				<li><a href="#"><img src="../images/facebook1.png" /></a></li>
				<li><a href="#"><img src="../images/googleplus.png" /></a></li>
				<li><a href="#"><img src="../images/twitter1.png" /></a></li>
				<li><a href="#"><img src="../images/youtube1.png" /></a></li>
			</ul>
		</section>
		<section>
			<img src="../images/weight-lifter.png" />
		</section>
	</footer>
	<footer class="second">
		<p>© Copyright - The Gym, 2017.</p>
	</footer>
</body>
</html>