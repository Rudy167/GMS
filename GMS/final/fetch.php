<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare('select count(customer_id) as b from mship ');
    $stmt->execute();
    $data = $stmt->fetch( PDO::FETCH_NUM);
echo"$data[0]";
   

      



    


   


}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}