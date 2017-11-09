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
    
    	<form action="kontakt.php" method="post">

			<input type="text" name="namn" placeholder="Namn">
			
			<!--<input type="tel" name="nummer"  placeholder="Telefonnummer">-->
			
			<input type="email" name="epost" placeholder="E-post">
			
			<select>
				<option>
			<input type="text" name="del" placeholder="Delsträcka"><!--dropdown-->
		
			<!-- dropdown för val av problem,
			annat (kolla så meddelande fylls i) -->
			<!-- hårdkodat först, sen databas?? --> 
			
			<textarea name="comment" placeholder="Meddelande"></textarea><br>
			<button class="knapp" type="submit">
				SKICKA 
			  </button>

		</form>
        
        <h2>Nyheter</h2>
       
		<?php test(); ?>
    
    
    
	<!--
    
ArenaUtnyttjare	bör		kunna rapportera fel längs spåret
ArenaUtnyttjare	måste	finna webbapplikationen användbar. I test ska 80% av användarna ange användbarheten på webbapplikation till mer än 3 av 5.
ArenaUtnyttjare	vill	att rapportering av problem skall ta max en minut.
ArenaUtnyttjare	vill	att webbapplikationen skall vara responsiv
ArenaUtnyttjare	vill	ha förval vid inrapportering av problem
ArenaUtnyttjare	vill	kunna se väderprognoser för området i webbapplikationen.

Finns fler krav relaterade till AU under AC. 
	
	
	
    
    -->
	
</main>


<?php include 'footer.php';?>