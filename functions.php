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
// ----------INSERTS-MOT-DATABAS-------------------------------------------------------------	
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
		
		//Ta bort tester	
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

function AC_update_news($nStartDate, $nEndDate, $article, $nHeader, $nOrt){
		global $conn;
		global $servername;
		global $username;
		global $password;
		
		echo "Rubrik: ".$nHeader."<br>"; 
		echo "Sträcka: ".$nOrt."<br>";
		echo "Starttid: ".$nStartDate."<br>";
		echo "Sluttid: ".$nEndDate."<br>";
		echo "Beskrivning: ".$article."<br>";
		
		
		$querystring='INSERT INTO news (nStartDate, nEndDate, article, nHeader, nOrt) 
					  values (:nStartDate,:nEndDate,:article,:nHeader,:nOrt);';
		$stmt = $conn->prepare($querystring);
		$stmt->bindValue(':nStartDate', $nStartDate, PDO::PARAM_STR);
		$stmt->bindParam(':nEndDate', $nEndDate, PDO::PARAM_STR);
		$stmt->bindParam(':article', $article, PDO::PARAM_STR);
		$stmt->bindParam(':nHeader', $nHeader, PDO::PARAM_STR);
		$stmt->bindParam(':nOrt', $nOrt, PDO::PARAM_STR);
		$stmt->execute();
		
		//För att testa att det görs en insert
		echo "<table>";
		foreach($conn->query( 'SELECT * FROM news;' ) as $row){
			echo "<tr>";
			echo "<td>".$row['nHeader']."</td>";      
			echo "<td>".$row['article']."</td>"; 
			echo "<td>".$row['nStartDate']."</td>";      
			echo "<td>".$row['nEndDate']."</td>";			
			echo "</tr>";
		}
		echo "</table>";
		
	
}

// ------------------------------------------------------------------------------------------

function XXX(){
		global $conn;
		global $servername;
		global $username;
		global $password;
		
		echo "Du har tillkallat den hemliga funktionen";
		//Öppna och Stängda delsträckor insert i databas, finns ingen tabell?
	
}

// ------------------------------------------------------------------------------------------

function AC_update_workOrder(){
		global $conn;
		global $servername;
		global $username;
		global $password;
		
		/*
		wWorkOrderID INT auto_increment, 
		wStartDate DATE,
		wEndDate DATE,
		wTyp INT(1),  #1 = Under förhandling / 2 = Pågående / 3 = Genomförd
		WdNr INT(2), #Delsträckenummer
		PRIMARY KEY (wWorkOrderID)
		*/
		echo "Rubrik: ".$nHeader."<br>"; 
		echo "Sträcka: ".$nOrt."<br>";
		echo "Starttid: ".$nStartDate."<br>";
		echo "Sluttid: ".$nEndDate."<br>";
		echo "Beskrivning: ".$article."<br>";
		
		
		$querystring='INSERT INTO news (wStartDate, wEndDate, article, nHeader, nOrt) 
					  values (:nStartDate,:nEndDate,:article,:nHeader,:nOrt);';
		$stmt = $conn->prepare($querystring);
		$stmt->bindValue(':nStartDate', $nStartDate, PDO::PARAM_STR);
		$stmt->bindParam(':nEndDate', $nEndDate, PDO::PARAM_STR);
		$stmt->bindParam(':article', $article, PDO::PARAM_STR);
		$stmt->bindParam(':nHeader', $nHeader, PDO::PARAM_STR);
		$stmt->bindParam(':nOrt', $nOrt, PDO::PARAM_STR);
		$stmt->execute();
		
		//För att testa att det görs en insert
		echo "<table>";
		foreach($conn->query( 'SELECT * FROM news;' ) as $row){
			echo "<tr>";
			echo "<td>".$row['nHeader']."</td>";      
			echo "<td>".$row['article']."</td>"; 
			echo "<td>".$row['nStartDate']."</td>";      
			echo "<td>".$row['nEndDate']."</td>";			
			echo "</tr>";
		}
		echo "</table>";
	
	
}
// ------------------------------------------------------------------------------------------
// ----------VISNING-AV-TABELLER-------------------------------------------------------------	
// ------------------------------------------------------------------------------------------

function AU_view_news(){
		global $conn;
		global $servername;
		global $username;
		global $password;
		
		
		echo "<table border='1'>";
			echo "<tr>";
				echo "<td style='background-color:#ABC1AE;'> Rubrik: </td>";
				echo "<td style='background-color:#ABC1AE;'> Artikel: </td>";
				echo "<td style='background-color:#ABC1AE;'> Start datum: </td>";
				echo "<td style='background-color:#ABC1AE;'> Slut datum: </td>";
			echo "</tr>";
			
		//För att testa att det görs en insert
		
		foreach($conn->query( 'SELECT * FROM news;' ) as $row){
			echo "<tr>";
			echo "<td>".$row['nHeader']."</td>";      
			echo "<td>".$row['article']."</td>"; 
			echo "<td>".$row['nStartDate']."</td>";      
			echo "<td>".$row['nEndDate']."</td>";			
			echo "</tr>";
		}
		echo "</table>";
		
	
}

// ------------------------------------------------------------------------------------------

function AC_view_AUProblem(){
		global $conn;
		global $servername;
		global $username;
		global $password;
		
		
		//Hur gör vi med deleteknappen i tabellen?
		echo "<table border='1'>";
			echo "<tr>";
				echo "<td style='background-color:#ABC1AE;'> Mail: </td>";
				echo "<td style='background-color:#ABC1AE;'> Namn: </td>";
				echo "<td style='background-color:#ABC1AE;'> Beskrivning: </td>";
				echo "<td style='background-color:#ABC1AE;'> Förval problem: </td>";
				echo "<td style='background-color:#ABC1AE;'> Ort: </td>";
			echo "</tr>";
			
			 
			
			foreach($conn->query( 'SELECT * FROM report;' ) as $row){
				echo "<tr>";
				echo "<td>".$row['rMail']."</td>";      
				echo "<td>".$row['rName']."</td>";   
				echo "<td>".$row['rDescr']."</td>";      
				echo "<td>".$row['probChoice']."</td>";
				echo "<td>".$row['rOrt']."</td>";
				echo "</tr>";
			}
		echo "</table>";
}

// ------------------------------------------------------------------------------------------

function AU_view_UE(){
		global $conn;
		global $servername;
		global $username;
		global $password;
		
		/*
		aPnr CHAR(13),
		aPassw VARCHAR(20),
		aUsern VARCHAR(20),
		aNamn VARCHAR(20),
		aMail VARCHAR(20),
		aAdress VARCHAR(30),
		aTel INT(10),
		aTyp INT(1), #Hur tänkte vi här?
		*/
			
		//Hur gör vi med deleteknappen/Ändra i tabellen?
		echo "<table border='1'>";
			echo "<tr>";
				echo "<td style='background-color:#ABC1AE;'> Personnummer: </td>";
				echo "<td style='background-color:#ABC1AE;'> Namn: </td>";
				echo "<td style='background-color:#ABC1AE;'> Mail: </td>";
				echo "<td style='background-color:#ABC1AE;'> Adress: </td>";
				echo "<td style='background-color:#ABC1AE;'> Telefonnummer: </td>";
				//echo "<td style='background-color:#ABC1AE;'> Delsträcka: </td>";     <------ Behöver läggas till i databas
			echo "</tr>";
			
			 
			
			foreach($conn->query( "SELECT * FROM anv where aTyp='1';" ) as $row){
				echo "<tr>";
				echo "<td>".$row['aPnr']."</td>";      
				echo "<td>".$row['aNamn']."</td>";   
				echo "<td>".$row['aMail']."</td>";      
				echo "<td>".$row['aAdress']."</td>";
				echo "<td>".$row['aTel']."</td>";
				//echo "<td>".$row['Delsträcka']."</td>";                         <------ Behöver läggas till i databas
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


	