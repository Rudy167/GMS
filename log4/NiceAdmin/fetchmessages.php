<?php
include_once("connection.php");
try {

	$stmt = $conn->prepare('SELECT * from message ');



	$stmt->execute();
	$result=$stmt->fetchAll(PDO::FETCH_NUM);
	
		foreach($result as $row)
		{
			echo '   <li class="by-other">


			<div class="chat-content">

				<div class="chat-meta">'.$row[0].' <span class="pull-right">'.$row[1].'</span></div>
				'.$row[2].'
				<div class="clearfix"></div>
			</div>
		</li>   ';

	}


}
catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}
?>

