<?php include 'header.php';?>

<main id="start">
    <h1>Vy för Arenachef</h1>
	
	<div class="flex">
		
		 <img src="images/BilderKartor3.jpg" alt="Karta" id="kartaindex">
		<!-- bild på karta med klick? -->
		<!-- Fråga : vill du även skicka detta i nyhetsflödet? -> automatgenererat meddelande i nyhetsflöde -->  
		
		 <h2>Inskickade åtgärdspunkter</h2>

   <!-- Ny arbetsorder med info redan ifylld från inskickad åtgärdspunkt? -->
		
		<table id="tabellstracka">
			<tr>
				<th>
					<select class="scroll">
						<option>Sträcka</option>
						<option>Hedemora-Norrhyttan</option>
						<option>Norrhyttan-Bondhyttan</option>
					</select>
				</th>
				<th>Problem</th>
				<th>Meddelande</th>
				<th>Namn</th>
				<th>E-post</th>
				<th>Radera</th>
			</tr>
			<tr>
				<td>Hedemora-Norrhyttan</td>
				<td>Nedfallet träd</td>
				<td>Ett fallet träd vid sträckans start.</td>
				<td>Anna Andersson</td>
				<td>exempelmail@exempel.com</td>
				<td><button class="minbutton">Radera</button></td>
			</tr>
			<tr>
				<td>Hedemora-Norrhyttan</td>
				<td>Nedfallet träd</td>
				<td>Ett fallet träd vid sträckans start.</td>
				<td>Anna Andersson</td>
				<td>exempelmail@exempel.com</td>
				<td><button class="minbutton">Radera</button></td>
			</tr>
			<tr>
				<td>Hedemora-Norrhyttan</td>
				<td>Nedfallet träd</td>
				<td>Ett fallet träd vid sträckans start.</td>
				<td>Anna Andersson</td>
				<td>exempelmail@exempel.com</td>
				<td><button class="minbutton">Radera</button></td>
			</tr>
		</table>
		
	</div>

		<?php include 'arbetsorder.php';?>


	<div class="flex">
		    
		<h2>Uppdatera nyhetsflöde</h2>
		 <!--(under flik - delge info?)-->
		
		<!-- snabbknappar med olika info? 
		Öppna/stäng delsträcka osv. 
		--> 
		<!-- ska karta automatiskt uppdateras? val att uppdatera karta? --> 
	    <form action="kontakt.php" method="post">

			<input type="text" name="rubrik" placeholder="Rubrik">
			
			<input type="tel" name="del"  placeholder="Delsträcka"> <!-- dropdown/klick på karta -->
			
			<input type="date" name="start" placeholder="Startdatum">
			
			<input type="date" name="slut" placeholder="Slutdatum">
			
			<textarea name="comment" placeholder="Beskrivning"></textarea><br>
			<button class="knapp" type="submit">
				SKICKA 
			  </button>

		</form>
	</div>
	<div class="flex">
	
		<h2>Öppna/stäng delsträckor</h2>
			<form action="kontakt.php" method="post">
				
				<input type="tel" name="del"  placeholder="Delsträcka"> <!-- dropdown/klick på karta -->
				
				<input type="date" name="start" placeholder="Startdatum">
				
				<input type="date" name="slut" placeholder="Slutdatum">
				
				<textarea name="comment" placeholder="Information"></textarea><br>
				<button class="knapp" type="submit">
					SKICKA 
				</button>

			</form>
			
		<!-- <h2>Uppdatera karta</h2>
		 <img src="images/BilderKartor3.jpg" alt="Karta" id="kartaindex" > -->
		<!-- bild på karta med klick? -->
		<!-- Fråga : vill du även skicka detta i nyhetsflödet? -> automatgenererat meddelande i nyhetsflöde -->  
		
	</div>


		
	<!-- olika flikar/sidor, nu allt på samma -> sen horisontellt. -->

   <!--<h2>Statistik</h2>-->
<div class="flex">
	<h2>Historik</h2>
	<img src="images/kalender.png" alt="kalender" id="kalender"/>
   </div>
   <div class="flex">
   <?php include 'arenachefue.php';?>
   </div>

  <!--  <h2>Väderprognos</h2>-->
  

</main>

<!-- flera sidor, all info samma sida? -->

<?php include 'footer.php';?>

 <!--
 
Arenachef	måste	kunna logga in i systemet via webbapplikationen med användarnamn och lösenord.
Arenachef	måste	kunna se en dashboard på förstasidan innehållande aktiva arbetsordrar, inrapporterade problem, karta, diagram med arbetsordrar (klara och pågående) nuvarnade vecka/månad. Ex. pajdiagram.
ArenaChef	vill	att informationen i webbapplikationen som presenteras för arenaChef placeras horisontellt för att minimera scrollning.
!ArenaChef	vill	att Skidloppet ABs logotyp skall finnas med på hemsidan.



ArenaChef	bör		kunna ange anledning till stängd delsträcka samt uppskattad tid för återöppning.
Arenachef	bör		kunna söka efter pågående arbeten under specifika delsträckor (dropdown eller genom att klicka på kartan (alla eller en delsträcka))
Arenachef	bör		kunna söka/modifiera efter enskilda underEnt för att få kontaktinfo om underEnt 
ArenaChef	måste	kunna lägga till och ta bort underEnt i systemet genom webbapplikationen
ArenaChef	måste	kunna radera inrapporterade problem 
ArenaChef	måste	kunna stänga/öppna delsträckor.
ArenaChef	vill	kunna presentera arenastatus på Skidloppets hemsida så att arenautnyttjare (trasig spång, översvämmning, pågående arbeten, fallna träd, öppna/stängda delsträckor etc.) kan se detta på webbapplikationen.
Arenachef	vill	kunna se vart på den grafiska kartan det finns inrapporterade problem från arenautnyttjare
ArenaChef	vill	kunna se väderprognoser för området i webbapplikationen. Vädret skall hänvisa till specifierad plats, då arenan är sju mil lång kan vädret variera.
Arenachef	vill	kunna skapa meddelanden & delge information till arenautnyttjare i form av inlägg från Skidloppet AB på webbapplikationen ("nyhetsflöde")

ArenaChef	vill	att arenaUtnyttjare skall klicka på karta för att ange delsträckor vid rapportering
ArenaChef	vill	att arenaUtnytttjarens rapporteringar skall hänvisa till två orter för att få uppfattning om problemets plats (istället för delsträcka)
ArenaChef	vill	att kunden ska få en visuell/grafisk överblick (t.ex. blöta områden längs spåret, stängda delsträckor). Med detta menar vi att arenaChef ska kunna ändra och lägga till saker på kartan, tex "arbete pågår-skylt", blött område och att detta ändrar på kartan som visas för arenaUtnyttjare
ArenaChef	vill	ha en enkät som ArenaUtnyttjare kan fylla i i form av smilyes på startsidan. 1-4 i "gladhet" samt utrymme för kommentar.










 
    
	
	
	
	
	
	
	
    
    -->