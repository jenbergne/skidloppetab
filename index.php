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
		<?php
		include 'functions.php';
		AU_view_news(); 
		?>
	</div>
	<!--
	<div id="nyhetertest">
		
		<div id="titel">
			<h3>TEST TITEL</h3>
		</div>
		
		<div id="nyhetbeskrivning">
			<p>TEST beskriving av nyhet</p>
		</div>
		
		<div id="postmeta">
			<div id="nyhetpostat">
				<span>Datum</span>
				<span id="nyhetdate">
					2017-02-02
				</span>
			</div>
			
			<div id="merlink">
				<a href="#">Visa mer&rarr;</a>
			</div>
		</div>
	</div>-->
	<div id="nyheter">
		<h2>Nyheter</h2>
		<?php
		include 'functions.php';
		AU_view_news(); 
		?>
	</div>
    
	
	<!-- tabell problem -->
    <div id="rapporteraproblem">
		<h2>Rapportera problem</h2> <!-- hänvisning till kontaktsida, egen? Ej någon klientsida/serversida kontroll formulär, måste!!-->
		
			<form action="index.php" method="post">   
	
				<input type="text" name="rName" placeholder="Namn">
				
				
				<input type="email" name="rMail" placeholder="E-post">
				
				
				<input type="text" name="rDescr" placeholder="Meddelande">
				
				
				<div id="stracka">
					<!--<select>
						<option value="" disabled selected>Välj delsträcka</option>
						<option value="hedemora">Hedemora-Norrhyttan</option>
						<option value="norrhyttan">Norrhyttan-Bondhyttan</option>
						<option value="bondhyttan">Bondhyttan-Bommansbo</option>
						<option value="bommansbo">Bommansbo-Smedjebacken</option>
						<option value="smedjebacken">Smedjebacken-Björsjö</option>
						<option value="bjorsjo">Björsjö-Grängesberg</option>
					</select>-->
					
					<input list="rOrt" name="rOrt">
					<datalist id="rOrt">
						<option value="Hedemora-Norrhyttan">
						<option value="Norrhyttan-Bondhyttan">
						<option value="Bondhyttan-Bommansbo">
						<option value="Bommansbo-Smedjebacken">
						<option value="Smedjebacken-Björsjö">
						<option value="Björsjö-Grängesberg">
					</datalist>
				</div>
			
				<div id="problem">

					<input list="probChoice" name="probChoice">
					<datalist id="probChoice">
						<option value="Ett blockerande träd">
						<option value="Död björn över spåret">
						<option value="Vattenöversvämmning">
					</datalist>
					
				</div>
				
				
				<br>
				
				<button class="knapp" type="submit">
					SKICKA 
				  </button>
	
			</form>
			
		</div>
		
       <?php
			//Måste alltid inkludera funktioner.php enligt internet
			
			
			//Skickar in variablerna i funktionen AU_Problem
			//Tar bort onödig felmeddelande med if(isset...)
			if(isset($_POST['rMail'])){
			$rMail = $_POST["rMail"];
			$rName = $_POST["rName"];
			$rDescr = $_POST["rDescr"];	
			$probChoice = $_POST["probChoice"];	
			$rOrt = $_POST["rOrt"];	
				
			
			AU_Problem($rMail, $rName, $rDescr, $probChoice, $rOrt);  //Delsträcka ska läggas till
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