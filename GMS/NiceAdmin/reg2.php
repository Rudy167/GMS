
<?php
session_start();


      $_SESSION["name"] = $_POST["name"];
      $_SESSION["age"] = $_POST["age"];
      $_SESSION["gender"] = $_POST["Gender"];

      
      
      

?>
<html>
<head>
<title>insert data in database using PDO(php data object)</title>
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


<form action="reg3.php" method="post">
<label>Heighr:</label>
<input type="text" name="height" id="height" required="required" placeholder="Please height"/><br /><br />

<label>Weight :</label>
<input type="int" name="weight" id="weight" = placeholder="enter weight"/><br/><br />

<label>phone :</label>
<input type="int" name="phone" id="phone" = placeholder="enter phone"/><br/><br />
<label>Weight :</label>
<input type="email" name="email" id="email" = placeholder="enter email"/><br/><br />

<label>Address :</label>
<input type="int" name="houseno" id="houseno" = placeholder="enter houseno"/><br/><br />

<label>Street :</label>
<input type="int" name="street" id="street" = placeholder="enter steet"/><br/><br />

<label>City :</label>
<input type="text" name="city" id="city" = placeholder="enter city"/><br/><br />

<label>Weight :</label>
<input type="text" name="state" id="state" = placeholder="enter state"/><br/><br />

<label>Weight :</label>
<input type="int" name="pincode" id="pincode" = placeholder="enter pincode"/><br/><br />


<label>Package :</label>
<br />
<br />
<select id="Package" name="Package">
      <option value="Bronze">Bronze</option>
      <option value="Silver">Silver</option>
      <option value="Gold">Gold</option>
      <option value="platinum">Platinum</option>
    </select>
<br />
<br />
<br />
<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div>
<!-- Right side div -->


</div>




</body>
</html>