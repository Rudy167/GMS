

<?php

require_once ("config.php");
try{

    $conn=new PDO(DB_DSN,DB_USERNAME,DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $paramOne = $_GET['job_num'];
    
  
  $sql="delete from mship where mid=$paramOne";
   $stmt1 = $conn->prepare($sql);
   $stmt1->execute();
  

}
catch (PDOException $exception)
{
    echo "Error".$exception->getMessage();
}


function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

Redirect('http://localhost/NiceAdmin/', false);