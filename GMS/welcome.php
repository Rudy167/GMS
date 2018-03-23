<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
   
                     
 
                  
exit;
              
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
    body{ font: 14px sans-serif; text-align: center; }
</style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo $_SESSION['username']; ?></b>. Welcome to Tiger Fitness Club.</h1>
    </div>




    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-circle">
            </div>
            <div class="col-md-9">
                <h3>
                    ABC Gym!
                </h3>
                <div class="jumbotron">
                    <h2>
                        Hello, user!!!!!
                    </h2>

                    <table border="1" cellspacing="5" cellpadding="5" width="100%">
                        <thead>
                            <tr>
                                <th>Total Sessions.</th>
                                <th>Attended</th>
                                <!-- <th>Left Customers</th> -->
                                <!-- <th>Income</th>  -->
                                <!-- <th>Password</th> -->
                            </tr>
                        </thead>




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

                        <p>
                            <?php
                            require_once('connection.php');
                            $result = $conn->prepare("SELECT id from login2 where username ='".$_SESSION['username']."' ");
                     $result->execute();
                             $abc = $result->fetch(PDO::FETCH_NUM);



                  
                    $result = $conn->prepare(" SELECT * from attendance where mid= '".$abc[0]."'");

                    $result->execute();


                            $attend = $result->fetch(PDO::FETCH_NUM);
                            $total = $attend[0];
                            $total1 = $attend[1];



        // for($i=0; $row = $result->fetch(); $i++){
                            ?><tr>  
                                <td><label><?php echo $total; ?></label></td>
                                <td><label><?php echo $total1; ?></label></td>
                                <!-- <td><label><?php echo $row['age']; ?></label></td> -->
                                <!-- <td><label><?php echo $row['gender']; ?></label></td> -->
                                <!-- <td><label><?php echo $row['join_date']; ?></label></td>  -->
                            </tr>

                        </table>

                    </p>
                </div>
            </div>
            
        </div>



        <body>

            <table border="1" cellspacing="5" cellpadding="5" width="100%">
                <thead>
                    <tr>
                        <
                        <th>MID</th>
                        <th>Member level</th>
                        <th>Membership rate</th>
                        <th>Membership Length</th>
                        <th>Date creted</th>
                        <th>Expiry date</th>
                        <th>Customer ID</th>
                        <th>Package</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                   require_once('connection.php');
           

                    $result = $conn->prepare("SELECT id from login2 where username ='".$_SESSION['username']."' ");
                     $result->execute();


                     $abc = $result->fetch(PDO::FETCH_NUM);



                  
                    $result = $conn->prepare(" SELECT * from mship where mid= '".$abc[0]."'");

                    $result->execute();
                      
                    for($i=0; $row = $result->fetch(); $i++){


                        ?>
                        <tr>
                            <td><label><?php echo $row['mid']; ?></label></td>
                            <td><label><?php echo $row['mlevel']; ?></label></td>
                            <td><label><?php echo $row['mrate']; ?></label></td>
                            <td><label><?php echo $row['mlength']; ?></label></td>
                            <td><label><?php echo $row['c_date']; ?></label></td>
                            <td><label><?php echo $row['e_date']; ?></label></td>
                            <td><label><?php echo $row['customer_id']; ?></label></td>
                            <td><label><?php echo $row['package']; ?></label></td>
                        </tr>
                        <?php } ;
 ?>
                    </tbody>
                </table>

            </body>
    <!-- <div class="row">
        <div class="col-md-5">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            Product
                        </th>
                        <th>
                            Payment Taken
                        </th>
                        <th>
                            Statexitus
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            01/04/2012
                        </td>
                        <td>
                            Default
                        </td>
                    </tr>
                    <tr class="active">
                        <td>
                            1
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            01/04/2012
                        </td>
                        <td>
                            Approved
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            2
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            02/04/2012
                        </td>
                        <td>
                            Declined
                        </td>
                    </tr>
                    <tr class="warning">
                        <td>
                            3
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            03/04/2012
                        </td>
                        <td>
                            Pending
                        </td>
                    </tr>
                    <tr class="danger">
                        <td>
                            4
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            04/04/2012
                        </td>
                        <td>
                            Call in to confirm
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-5">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            Product
                        </th>
                        <th>
                            Payment Taken
                        </th>
                        <th>
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            01/04/2012
                        </td>
                        <td>
                            Default
                        </td>
                    </tr>
                    <tr class="active">
                        <td>
                            1
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            01/04/2012
                        </td>
                        <td>
                            Approved
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            2
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            02/04/2012
                        </td>
                        <td>
                            Declined
                        </td>
                    </tr>
                    <tr class="warning">
                        <td>
                            3
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            03/04/2012
                        </td>
                        <td>
                            Pending
                        </td>
                    </tr>
                    <tr class="danger">
                        <td>
                            4
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            04/04/2012
                        </td>
                        <td>
                            Call in to confirm
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>






<p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
</body>
</html>