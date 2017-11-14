<?php
$servername = "wwwlab.iit.his.se";
$username = "sqllab";
$password = "Tomten2009";

try {
    $conn = new PDO("mysql:host=$servername;dbname=KapishAB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully"; 	
		
// ------------------------------------------------------------------------------------------


	function AU_Problem(){
		
		if(isset($_POST['rID'])){
			$querystring='INSERT INTO report (rID, rMail, rName, descr, probChoice) 
						  values (:rID,:rMail,:rName,:descr,:probChoice);';
			$stmt = $conn->prepare($querystring);
			$stmt->bindParam(':rID', $_POST['rID']);
			$stmt->bindParam(':rMail', $_POST['rMail']);
			$stmt->bindParam(':rName', $_POST['rName']);
			$stmt->bindParam(':descr', $_POST['descr']);
			$stmt->bindParam(':probChoice', $_POST['probChoice']);
			$stmt->execute();
			}
	}

// ------------------------------------------------------------------------------------------
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}





?>


	