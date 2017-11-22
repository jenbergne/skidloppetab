<?php
$servername = "wwwlab.iit.his.se";
$username = "sqllab";
$password = "Tomten2009";

try {
    $conn = new PDO("mysql:host=$servername;dbname=KapishAB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully<br>"; 	
		
// ------------------------------------------------------------------------------------------


	function AU_Problem($rMail, $rName, $desc, $probChoice){ //Variabel sträcka?
		global $conn;
		global $servername;
		global $username;
		global $password;
		
		echo "Ditt namn är: ".$rName."<br>"; 
		echo "Din mail är: ".$rMail."<br>";
		echo "Din descr är: ".$descr."<br>";
		echo "Din probChoice är: ".$probChoice."<br>";
		
		
		//:rID bortaget efter values...
		//Variabel sträcka fattas
		$querystring='INSERT INTO report (rMail, rName, descr, probChoice) 
					  values (:rMail,:rName,:descr,:probChoice);';
		$stmt = $conn->prepare($querystring);
		//$stmt->bindParam(':rID', $rID, PDO::PARAM_STR);
		$stmt->bindValue(':rMail', $rMail, PDO::PARAM_STR);
		$stmt->bindParam(':rName', $rName, PDO::PARAM_STR);
		$stmt->bindParam(':descr', $descr, PDO::PARAM_STR);
		$stmt->bindParam(':probChoice', $probChoice, PDO::PARAM_STR);
		$stmt->execute();
			
		//För att testa att det görs en insert
		echo "<table>";
		foreach($conn->query( 'SELECT * FROM report;' ) as $row){
			echo "<tr>";
			echo "<td>".$row['rMail']."</td>";      
			echo "<td>".$row['rName']."</td>";      
			echo "</tr>";
		}
		echo "</table>";
			
	}

// ------------------------------------------------------------------------------------------
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}





?>


	