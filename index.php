<?php include 'header.php';?>

<main id="start">
    <h1>Skidloppet AB </h1>
    
	<div id="left">
		<img src="images/BilderKartor3.jpg" alt="Karta" id="kartaindex">
		<!-- dynamisk bilder, hovereffekt över delsträckor med väderprognos, om spåret är öppet, kommentarer osv? 
		eller ska det ändras på kartan färger direkt (flera bilder till en bildmap?) Väder ovanpå som bild? 
		dynamiskt - animationer? eller enbart bilder som ändras? 
		-->
		
		<table id="tabellstracka">
			<tr>
				<th>Sträcka</th>
				<th>Status</th>
				<th>Öppnas åter</th>
				<th>Information</th>	
			</tr>
			<tr>
				<td>Hedemora-Norrhyttan</td>
				<td>Stängd</td>
				<td>2017-02-02</td>
				<td>Fallna träd</td>
			</tr>
			<tr>
				<td>Norrhyttan-Bondhyttan</td>
				<td>Öppen</td>
				<td></td>
				<td></td>
			</tr>
		</table>
		
	</div>
	
	<div id="nyheter">
		<h2>Nyheter</h2>
		<table id="tabellnyheter">
			<tr>
			<th>Tävling</th>
			</tr>
			<tr>
			<td>2017-11-15 - 2017-11-20</td>
			</tr>
			<tr>
				<td>
					Tävling pågår. 
				</td>
			</tr>
		</table>
	</div>
    
	<div id="clear"></div>
	<!-- tabell problem -->
    <div id="rapporteraproblem">
		<h2>Rapportera problem</h2> <!-- hänvisning till kontaktsida, egen? Ej någon klientsida/serversida kontroll formulär, måste!!-->
		
			<form action="index.php" method="post">   
	
				<input type="text" name="rName" placeholder="Namn">
				
				
				<input type="email" name="rMail" placeholder="E-post">
				
				
				<div id="stracka">
					<select>
						<option value="" disabled selected>Välj delsträcka</option>
						<option value="hedemora" name="probChoice">Hedemora-Norrhyttan</option>
						<option value="norrhyttan" name="probChoice">Norrhyttan-Bondhyttan</option>
						<option value="bondhyttan" name="probChoice">Bondhyttan-Bommansbo</option>
						<option value="bommansbo" name="probChoice">Bommansbo-Smedjebacken</option>
						<option value="smedjebacken" name="probChoice">Smedjebacken-Björsjö</option>
						<option value="bjorsjo" name="probChoice">Björsjö-Grängesberg</option>
					</select>
				</div>
			
				<div id="problem">
					<select>
						<option value="" disabled selected>Välj problem</option>
						<option value="tree">Nedfallet träd</option>
						<option value="placeholder1">Placeholder1</option>
						<option value="placeholder2">Placeholder2</option>
						<option value="placeholder3">Placeholder3</option>
						<option value="ovrigt">Övrigt</option>
					</select>
				</div>
				
				<!-- dropdown för val av problem,
				annat (kolla så meddelande fylls i) -->
				<!-- hårdkodat först, sen databas?? --> 
				
				<textarea name="descr" placeholder="Meddelande"></textarea><br>
				<button class="knapp" type="submit">
					SKICKA 
				  </button>
	
			</form>
			
		</div>
		
       <?php
			//Måste alltid inkludera funktioner.php enligt internet
			include 'functions.php' ;
			
			//Skickar in variablerna i funktionen AU_Problem
			//Tar bort onödig felmeddelande med if(isset...)
			if(isset($_POST['rMail'])){
			$rMail = $_POST["rMail"];
			$rName = $_POST["rName"];
			$descr = $_POST["descr"];	
			$probChoice = $_POST["probChoice"];	
			//$probChoice = $_POST["probChoice"];	
			
			AU_Problem($rMail, $rName, $descr, $probChoice);  //Delsträcka ska läggas till
			}
		?>
		
       
       
		
		
    
    
	<!--
    
ArenaUtnyttjare	bör		kunna rapportera fel längs spåret
ArenaUtnyttjare	måste	finna webbapplikationen användbar. I test ska 80% av användarna ange användbarheten på webbapplikation till mer än 3 av 5.
ArenaUtnyttjare	vill	att rapportering av problem skall ta max en minut.
ArenaUtnyttjare	vill	att webbapplikationen skall vara responsiv
ArenaUtnyttjare	vill	ha förval vid inrapportering av problem
ArenaUtnyttjare	vill	kunna se väderprognoser för området i webbapplikationen.

Finns fler krav relaterade till AU under AC. 
	
	
	asd
    
    -->
	
</main>


<?php include 'footer.php';?>