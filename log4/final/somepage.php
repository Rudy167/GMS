
<?php
include_once("connection.php");
try {
    $paramOne = $_POST['firstParam'];
    echo $paramOne ;
    

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
            

















?>