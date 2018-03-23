<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare('SELECT * from customer ');
    $stmt->execute();
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
      echo "<table>";
    foreach ($result as $row)
    {
           echo 
            "<tr>" .
            "<td >" . $row["customerid"] . "</td>".
            "<td >" . $row["name"] . "</td>".
            "<td >" . $row["age"] . "</td>".
            "<td >" . $row["gender"] . "</td>".
            "<td >" . $row["join_date"] . "</td>".
            "</tr>";
    }
   echo"</table>";
   


}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}