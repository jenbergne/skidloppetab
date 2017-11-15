     <h2>Under förhandling</h2>
    <table id="tabellstracka">
		<tr>
			<th>ID</th>
			<th>					
				<select class="scroll">
					<option>Delsträcka</option>
					<option>1</option>
					<option>2</option>
				</select>
			</th>
			<th>					
				<select class="scroll">
					<option>Underentreprenör</option>
					<option>Jonas Heed</option>
					<option>Underentreprenör 2</option>
				</select>
			</th>
			<th>Datum</th>
			
			<th>					
				<select class="scroll">
					<option>Problem</option>
					<option>Fallet träd</option>
					<option>Problem2</option>
				</select>
			</th>
			<th>Kommentar</th>
					
			<th>Acceptera</th>
			<th>Ändra</th>
		</tr>
		<tr>
			<td>001</td>
			<td>1</td>
			<td>Jonas Heed</td>
			<td>171120-171124</td>
			<td>Fallet träd</td>
			<td>Femton träd</td>
			<td><button class="minbutton">Acceptera</button></td>
			<td><button class="minbutton">Ändra</button></td>
		</tr>

	</table>
	


 <h2>Arbetsordrar</h2>
    <table id="tabellstracka">
		<tr>
			<th>ID</th>
			<th>					
				<select class="scroll">
					<option>Delsträcka</option>
					<option>1</option>
					<option>2</option>
				</select>
			</th>
			<th>					
				<select class="scroll">
					<option>Underentreprenör</option>
					<option>Jonas Heed</option>
					<option>Underentreprenör 2</option>
				</select>
			</th>
			<th>Startdatum</th>
			<th>Slutdatum</th>
			<th>					
				<select class="scroll">
					<option>Problem</option>
					<option>Fallet träd</option>
					<option>Problem2</option>
				</select>
			</th>
			<th>Kommentar</th>
			<th>					
				<select class="scroll">
					<option>Status</option>
					<option>Färdig</option>
					<option>Pågående</option>
				</select>
			</th>
			<th>Ändra</th>	
		</tr>
		<tr>
			<td>001</td>
			<td>1</td>
			<td>Jonas Heed</td>
			<td>2017-11-01</td>
			<td>2017-11-02</td>
			<td>Fallet träd</td>
			<td>Ett träd</td>
			<td>Färdig</td>
			<td><button class="minbutton">Ändra</button></td>
		</tr>
		<tr>
			<td>001</td>
			<td>1</td>
			<td>Jonas Heed</td>
			<td>2017-11-01</td>
			<td>2017-11-02</td>
			<td>Fallet träd</td>
			<td>Ett träd</td>
			<td>Färdig</td>
			<td><button class="minbutton">Ändra</button></td>
		</tr>	
		<tr>
			<td>001</td>
			<td>1</td>
			<td>Jonas Heed</td>
			<td>2017-11-01</td>
			<td>2017-11-02</td>
			<td>Fallet träd</td>
			<td>Ett träd</td>
			<td>Färdig</td>
			<td><button class="minbutton">Ändra</button></td>
		</tr>
	</table>
	
	
    <!-- Genererad tabell med alla arbetsordrar, kunna sortera på färdiga, pågående, planerade, under förhandling osv.
    Knappar bredvid varje arbetsorder Radera (med varning), Uppdatera (med kommentarsfunktion),
    
    kunna sortera/söka på enskild undent,
    
    
    kalender,
    
    
    -->
    
    <h3>Ny arbetsorder</h3>
    
    		<form action="kontakt.php" method="post">
				
			<input type="tel" name="del"  placeholder="Delsträcka"> <!-- dropdown -->

			<input type="text" name="underent" placeholder="Underentreprenör"> <!-- laddas in automatiskt beroende på delsträcka, dropdown -->
			
			<!-- en dropdown för problem??? --> 
            
            <label><input type="checkbox" name="akut">Akut?</label>
			
			<input type="date" name="start" placeholder="Startdatum"> <!-- date???? -->
			
			<input type="date" name="slut" placeholder="Slutdatum">
			
			<textarea name="comment" placeholder="Beskrivning"></textarea><br>
			<button class="knapp" type="submit">
				SKICKA 
			  </button>

		</form>
            
       <!-- <h2>Historik</h2>-->

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