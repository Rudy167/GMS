
<?php

require_once ("config.php");
try{

    $conn=new PDO(DB_DSN,DB_USERNAME,DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    if(isset($_GET["update"]))
    {
          $paramOne = $_GET['job_num'];
          $paramtwo=$_GET['name'];
    $paramthree=$_GET['age'];
    $paramfour=$_GET['gender'];
    $paramfive=$_GET['joindate'];
  
  $sql="insert into customer (name,age,gender,join_date) values ('$paramtwo','  $paramthree','$paramfour','$paramfive')";
   $stmt1 = $conn->prepare($sql);
   $stmt1->execute();
    }


  

}
catch (PDOException $exception)
{
    echo "Error".$exception->getMessage();
}


