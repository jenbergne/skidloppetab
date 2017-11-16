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


	function AU_Problem($rMail, $rName, $rDescr, $probChoice, $rOrt){ //Variabel sträcka?
		global $conn;
		global $servername;
		global $username;
		global $password;
		
		echo "Ditt namn är: ".$rName."<br>"; 
		echo "Din mail är: ".$rMail."<br>";
		echo "Din rDescr är: ".$rDescr."<br>";
		echo "Din probChoice är: ".$probChoice."<br>";
		echo "Din rOrt är: ".$rOrt."<br>";
		
		
		
		
		$querystring='INSERT INTO report (rMail, rName, rDescr, probChoice, rOrt) 
					  values (:rMail,:rName,:rDescr,:probChoice,:rOrt);';
		$stmt = $conn->prepare($querystring);
		$stmt->bindValue(':rMail', $rMail, PDO::PARAM_STR);
		$stmt->bindParam(':rName', $rName, PDO::PARAM_STR);
		$stmt->bindParam(':rDescr', $rDescr, PDO::PARAM_STR);
		$stmt->bindParam(':probChoice', $probChoice, PDO::PARAM_STR);
		$stmt->bindParam(':rOrt', $rOrt, PDO::PARAM_STR);
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

function AC_showTable_AUProblem($rMail, $rName){
		global $conn;
		global $servername;
		global $username;
		global $password;
		
		echo "<h3>Alla inskickade problem</h3>";
		echo "<table border='1'>";
			echo "<tr>";
				echo "<td style='background-color:#ABC1AE;'> Mail: </td>";
				echo "<td style='background-color:#ABC1AE;'> Namn: </td>";
			echo "</tr>";
			
			 
			
			foreach($conn->query( 'SELECT * FROM report;' ) as $row){
				echo "<tr>";
				echo "<td>".$row['rMail']."</td>";      
				echo "<td>".$row['rName']."</td>";      
				echo "</tr>";
			}
		echo "</table>";
	}
}





// ------------------------------------------------------------------------------------------
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}





?>


	