<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $m = date('n') ;
    $y = date('Y') ;
   
   
    $stmt = $conn->prepare('select * from mship   ');
    $stmt->execute();
    $data = $stmt->fetchAll( PDO::FETCH_NUM);

    	
    	$sum=0;
    foreach ($data as $row)
    {
    	$month = date('n', strtotime($row[4]));
    	$year=date('Y', strtotime($row[4]));
    	if($month==$m && $year=$y)
$sum+=$row[2];

    }
   

      echo $sum;



    


   


}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>