<?php include 'header.php';?>

<main id="start">
    <h1>Skidloppet AB </h1>
    
    <img src="images/BilderKartor3.jpg" alt="Karta">
	<!-- dynamisk bilder, hovereffekt över delsträckor med väderprognos, om spåret är öppet, kommentarer osv? 
	eller ska det ändras på kartan färger direkt (flera bilder till en bildmap?) Väder ovanpå som bild? 
	dynamiskt - animationer? eller enbart bilder som ändras? 
	-->
	
	<!-- tabell problem -->
    
    <h2>Rapportera problem</h2> <!-- hänvisning till kontaktsida, egen? Ej någon klientsida/serversida kontroll formulär, måste!!-->
    
    	<form action="index.php" method="post">   

			<input type="text" name="rName" placeholder="Namn">
			
			<!--<input type="tel" name="nummer"  placeholder="Telefonnummer">-->
			
			<input type="email" name="rMail" placeholder="E-post">
			<div id="sträcka">
				<select>
					<option value="" disabled selected>Välj delsträcka</option>
					<option value="hedemora">Hedemora-Norrhyttan</option>
					<option value="norrhyttan">Norrhyttan-Bondhyttan</option>
					<option value="bondhyttan">Bondhyttan-Bommansbo</option>
					<option value="bommansbo">Bommansbo-Smedjebacken</option>
					<option value="smedjebacken">Smedjebacken-Björsjö</option>
					<option value="björsjö">Björsjö-Grängesberg</option>
				</select>
			</div>
		
			<div id="problem">
				<select>
					<option value="" disabled selected>Välj problem</option>
					<option value="träd">Nedfallet träd</option>
					<option value="placeholder1">Placeholder1</option>
					<option value="placeholder2">Placeholder2</option>
					<option value="placeholder3">Placeholder3</option>
					<option value="övrigt">Övrigt</option>
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
		
        <?php
			include 'functions.php';
			
			AU_Problem($rMail, $rName, $descr, $probChoice); 
		?>
		
        <h2>Nyheter</h2>
       
		
		
    
    
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