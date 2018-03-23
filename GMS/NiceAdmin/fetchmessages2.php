
<?php

require_once ("config.php");
try{

    $conn=new PDO(DB_DSN,DB_USERNAME,DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    
    
  
  $sql="select count(*) from message";
   $stmt1 = $conn->prepare($sql);
   $stmt1->execute();
      $data = $stmt1->fetch( PDO::FETCH_NUM);
echo"$data[0]";
  

}
catch (PDOException $exception)
{
    echo "Error".$exception->getMessage();
}



