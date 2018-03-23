<?php session_start()
?>
<html>
<head>
	<title>form</title>
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
			#p01{
				border: 1px solid powderblue;
    margin: 50px;

			}
		</style>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</head>


	<body style ="background:url('1.jpg'); background-repeat: no-repeat; background-position: center;width: 1080px; background-size:cover;">


		<h3>New Customer</h3>
	




<form name="myform" action="" method="POST">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" name="name" class="form-control" id="usr" >
    </div>
    <div class="form-group">
      <label for="pwd">Age:</label>
      <input type="number" name="age" class="form-control" id="pwd" >
    </div>
    <div class="form-group">
     <label for="usr">Gender:</label>
     <br/>
     <label for="male">male</label>
    <input type="radio" name="Gender" id="male" value="male"><br>
  <label for="female">Female</label>
  <input type="radio" name="Gender" id="female" value="female"><br>
</div>
<input type="submit" class="btn btn-info" value="Submit">
  </form>
</div>
<!-- Right side div -->
<?php
// define variables and set to empty values
 
$val=true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
   
    echo '<script language="javascript">';
echo 'alert("Name is required" )';
echo '</script>';
$val=false;

  } 

 else if (empty($_POST["age"])) {
   echo '<script language="javascript">';
echo 'alert("age is required" )';
echo '</script>';
$val=false;
  } 
   if($_POST["age"]<15 || $_POST["age"]>55)
  {
   echo '<script language="javascript">';
echo 'alert("you are not eligible for the" )';
echo '</script>';
$val=false;
  }

 else if (empty($_POST["Gender"])) {
   echo '<script language="javascript">';
echo 'alert("gender is required" )';
echo '</script>';
$val=false;
  } 
  else if($val==true)
   { $_SESSION["name"]=$_POST["name"];
 $_SESSION["age"]=$_POST["age"];
  $_SESSION["gender"]=$_POST["Gender"];
   	header('location:reg2.php');
        exit();
    }
   
   
    }


  


?>


</div>

</body>
</html>