    <h2>Arbetsordrar</h2>
    
    <!-- Genererad tabell med alla arbetsordrar, kunna sortera på färdiga, pågående, planerade, under förhandling osv.
    Knappar bredvid varje arbetsorder Radera (med varning), Uppdatera (med kommentarsfunktion),
    
    kunna sortera/söka på enskild undent,
    
    
    kalender,
    
    
    -->
    
    <h3>Ny arbetsorder</h3>
    
    		<form action="kontakt.php" method="post">

			<input type="text" name="underent" placeholder="Underentreprenör">
			
			<input type="tel" name="del"  placeholder="Delsträcka">
            
            Akut?<input type="checkbox" name="akut"> 
			
			<input type="date" name="start" placeholder="Startdatum">
			
			<input type="date" name="slut" placeholder="Slutdatum">
			
			<textarea name="comment" placeholder="Beskrivning"></textarea><br>
			<button class="knapp" type="submit">
				SKICKA 
			  </button>

		</form>
            
        <h2>Historik</h2>

<!--            
ArbetsOrder	måste	kunna accepteras av både underEnt och ArenaChef innan den fastställs.
ArenaChef	bör 	kunna uppdatera färdig arbetsorder.
ArenaChef	måste	kunna beställa arbetsorder från UnderEnt.
Arenachef	bör		kunna kommentera "färdiga" arbetsordrar i efterhand
Arenachef	bör		kunna se arbetsOrder kopplat till enskilda underent
Arenachef	bör		kunna se arbetsordrar under förhandling
Arenachef	bör		kunna se planerade arbetsordrar i arenan.
Arenachef	bör		kunna se visuell presentation (t.ex. tabell/kalender) över icke accepterade/pågående/klara/förhandlade arbeten 
Arenachef	bör		kunna välja omfattningen som visas från tidigare arbeten månadsvis (väljer på arenaChefs view att han vill se Juni tex)
Arenachef	måste	kunna se pågående arbetsordrar i arenan. 
ArenaChef	vill	att vid val av underEnt till delsträcka skall endast presenteras de underEnt som hanterar den valda delsträckan
ArenaChef	vill	kunna se historik kring utförda arbeten, till exempel vad det har kostat, historiskt, att avlägsna träd, barka om ett område, lägga ny spång, etc
Arenachef	vill	kunna se statistik över vilka underent. som gjort flest arbeten i timmar
Arenachef	vill	kunna ändra ansvariga underent. för delsträckor
ArenaChef	vill	vill att det skall gå att placera arbetsordrar bakåt i tiden. Detta skall resultera i larm som meddelar detta

-->