<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare('insert into mship (customer_id)values ($_POST["customerID"]) ');
    $stmt->execute();
    
   


}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}