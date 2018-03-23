<?php



?>

<html>
<head>
	<title>insert data in database using PDO(php data object</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		<style type="text/css">
			html,
			body {
				height: 100%;
			}
			html {
				display: table;
				margin: auto;
			}
			display: table-cell;
			body {
				vertical-align: middle;
			}
			.margin {
				margin: 0 !important;
			}
		</style>
	</head>


	<body style ="background-color:powderblue;">


		<h3>New Customer</h3>
	



<form action="reg2.php" method="post">
	<label>Name:</label>
	<input type="text" name="name" id="name" required="required" placeholder="Please Enter Name"/><br /><br />

	<label>Age :</label>
	<input type="int" name="age" id="age" = placeholder="Enter Age"/><br/><br />

	<label>Gender :</label>
	<br />
	<br />
	<select id="Gender" name="Gender">
		<option value="Male">Male</option>
		<option value="Female">Female</option>
	</select>
	<br />
	<br />
	<br />
	<input type="submit"  value=" Submit " name="submit to page 2"/><br />
</form>
</div>
<!-- Right side div -->


</div>

</body>
</html>