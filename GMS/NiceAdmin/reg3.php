
<?php


$hostname='localhost';
$username='root';
$password='';

try {
$dbh = new PDO("mysql:host=$hostname;dbname=gym",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
session_start();
$sl="select max(customerid) from customer ";
$result=$dbh->query( $sl);

      $data = $result->fetch( PDO::FETCH_NUM);
      $customer=$data[0];
      $customer=$customer+1;
      $_SESSION['id']=$customer;
      $customer_id=$customer;
$sql = "INSERT INTO customer (  customerid,name,age,gender,phone,join_date)
VALUES ('" .$customer_id."','" .$_SESSION["name"]."','" .$_SESSION["age"]."','" .$_SESSION["gender"]."','".$_POST["phone"]."',now())";
if ($dbh->query($sql)) {
    echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
}
else{
    echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}



$sql ="INSERT INTO address(house_no,street, city,state, pincode,customer_id)
VALUES ('".$_POST["houseno"]."','".$_POST["street"]."','".$_POST["city"]."','".$_POST["state"]."','".$_POST["pincode"]."','".$_SESSION['id']."')";
if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}


$sql ="   insert into customer_health (customer_id,height,weight)
VALUES ('".$customer_id."','".$_POST["height"]."','".$_POST["weight"]."')";

if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('customer_health Inserted Successfully');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}

$sql ="INSERT INTO contact_info (phone,email,customer_id)
VALUES ('".$_POST["phone"]."','".$_POST["email"]."','".$customer_id."')";


if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}


$sql ="INSERT INTO mship (package,customer_id,c_date)
VALUES ('".$_POST["package"]."','".$customer_id."','".$_POST["join_date"]."')";

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}



session_unset(); 

session_destroy();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>registration successful!</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body>
   <div class="page-404">
    <h3>Registration successful<h3>


        <p>welcome to our gym!<br><a href="index.html">Return Home</a></p>
  </div>
  <div class="credits">
    <!-- 
        All the links in the footer should remain intact. 
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
    -->
   </center><a href="TCPDF-master/create_pdf.php"> <center>print reciept </center></a>
</div>

  
  </body>
</html>
