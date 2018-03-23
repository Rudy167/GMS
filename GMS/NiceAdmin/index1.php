<!DOCTYPE html>

<html>

<head>
	<title>
		How To Display Data From Database Table In PHP/MySQL Using PDO Query
	</title>
	
<style type="text/css">
body {
	width:800px;
	border:red 1px solid;
	border-style:dashed;
	margin:auto;
	padding:10px;
}
td {
	text-align:center;
	padding:10px;
}
table {
	margin:auto;
	border:blue 1px solid;
}
label {
	font-size:18px;
	color:blue;
    font-weight: bold;
    font-family: cursive;
}
h2 {
	color:red;
	text-align:center;
}
th {
	color:red;
	font-size:20px;
    font-family: cursive;
}
</style>

</head>

<body>


<form action="" method="post">
	<label>From:</label>
	<input type="date" name="name1" id="name1" required="required" placeholder="Please Enter Date"/><br /><br />

	<label>To :</label>
	<input type="date" name="age" id="age" = placeholder="Enter Date"/><br/><br />


</form>

<table border="1" cellspacing="5" cellpadding="5" width="100%">
	<thead>
		<tr>
			<th>Total Customers.</th>
			<!-- <th>New Customers</th>
			<th>Left Customers</th>
			<th>Income</th> -->
			<!-- <th>Password</th> -->
		</tr>
	</thead>
	<tbody>
	<?php
		require_once('connection.php');
		$result = $conn->prepare("SELECT count(*) FROM mship ");
		$result->execute();
		 $memberrow = $result->fetch(PDO::FETCH_NUM);
    $membercount = $memberrow[0];


    
		// for($i=0; $row = $result->fetch(); $i++){
	?>
		<tr>	
			<td><label><?php echo $membercount; ?></label></td>
			<!-- <td><label><?php echo $row['name']; ?></label></td>
			<td><label><?php echo $row['age']; ?></label></td>
			<td><label><?php echo $row['gender']; ?></label></td>
			<td><label><?php echo $row['join_date']; ?></label></td> -->
		</tr>


<body>


		<thead>
		<tr>
			
			<th>Income.</th>
			<!-- <th>New Customers</th>
			<th>Left Customers</th>
			<th>Income</th> -->
			<!-- <th>Password</th> -->
		</tr>
	</thead>
	<tbody>
		<?php
		 
		require_once('connection.php');
		$result1 = $conn->prepare("SELECT    SUM(mrate)
FROM      mship where c_date >  '2017-09-31' or e_date > '2017-10-31' ");
		$result1->execute();
		 $memberrow = $result1->fetch(PDO::FETCH_NUM);
    $membercount = $memberrow[0];


    
		// for($i=0; $row = $result->fetch(); $i++){
	?>
		<tr>	
			<td><label><?php echo $membercount; ?></label></td>
			<!-- <td><label><?php echo $membercount; ?></label></td> -->
			<!-- <td><label><?php echo $row['age']; ?></label></td>
			<td><label><?php echo $row['gender']; ?></label></td>
			<td><label><?php echo $row['join_date']; ?></label></td> -->
		</tr>
		
	</tbody>




	<thead>
		<tr>
			<th>New Customers.</th>
			<!-- <th>New Customers</th>
			<th>Left Customers</th>
			<th>Income</th> -->
			<!-- <th>Password</th> -->
		</tr>
	</thead>
	<tbody>
	<?php
		require_once('connection.php');
		$result = $conn->prepare("SELECT count(*) FROM mship where c_date >  '2017-09-31'");
		$result->execute();
		 $memberrow = $result->fetch(PDO::FETCH_NUM);
    $membercount = $memberrow[0];


    
		// for($i=0; $row = $result->fetch(); $i++){
	?>
		<tr>	
			<td><label><?php echo $membercount; ?></label></td>
			<!-- <td><label><?php echo $row['name']; ?></label></td>
			<td><label><?php echo $row['age']; ?></label></td>
			<td><label><?php echo $row['gender']; ?></label></td>
			<td><label><?php echo $row['join_date']; ?></label></td> -->
		</tr>



		<body>


		<thead>
		<tr>
			
			<th>Expenses on Salary</th>
			<!-- <th>New Customers</th>
			<th>Left Customers</th>
			<th>Income</th> -->
			<!-- <th>Password</th> -->
		</tr>
	</thead>
	<tbody>
		<?php
		require_once('connection.php');
		$result1 = $conn->prepare("SELECT    SUM(salary)
FROM      instructor");
		$result1->execute();
		 $memberrow = $result1->fetch(PDO::FETCH_NUM);
    $membercount = $memberrow[0];


    
		// for($i=0; $row = $result->fetch(); $i++){
	?>
		<tr>	
			<td><label><?php echo $membercount; ?></label></td>
			<!-- <td><label><?php echo $membercount; ?></label></td> -->
			<!-- <td><label><?php echo $row['age']; ?></label></td>
			<td><label><?php echo $row['gender']; ?></label></td>
			<td><label><?php echo $row['join_date']; ?></label></td> -->
		</tr>
		
	</tbody>

</table>


</body>

</html>