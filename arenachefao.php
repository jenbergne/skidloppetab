   
<div class="ao">

 <h2>Arbetsordrar</h2>
    <table id="tabellstracka">
		<tr>
			<th>					
				<select class="scroll">
					<option>Delstr�cka</option>
					<option>1</option>
					<option>2</option>
				</select>
			</th>
			<th>					
				<select class="scroll">
					<option>UE</option>
					<option>Jonas Heed</option>
					<option>Underentrepren�r 2</option>
				</select>
			</th>
			<th>Startdatum</th>
			<th>Slutdatum</th>
			<th>					
				<select class="scroll">
					<option>Problem</option>
					<option>Fallet tr�d</option>
					<option>Problem2</option>
				</select>
			</th>
			<th>Kommentar</th>
			<th>					
				<select class="scroll">
					<option>Status</option>
					<option>F�rdig</option>
					<option>P�g�ende</option>
				</select>
			</th>
			<th>�ndra</th>	
		</tr>
		<tr>
			<td>1</td>
			<td>Jonas Heed</td>
			<td>2017-11-01</td>
			<td>2017-11-02</td>
			<td>Fallet tr�d</td>
			<td>Ett tr�d</td>
			<td>F�rdig</td>
			<td><button class="minbutton">�ndra</button></td>
		</tr>
		<tr>
			<td>1</td>
			<td>Jonas Heed</td>
			<td>2017-11-01</td>
			<td>2017-11-02</td>
			<td>Fallet tr�d</td>
			<td>Ett tr�d</td>
			<td>F�rdig</td>
			<td><button class="minbutton">�ndra</button></td>
		</tr>	
		<tr>
			<td>1</td>
			<td>Jonas Heed</td>
			<td>2017-11-01</td>
			<td>2017-11-02</td>
			<td>Fallet tr�d</td>
			<td>Ett tr�d</td>
			<td>F�rdig</td>
			<td><button class="minbutton">�ndra</button></td>
		</tr>
	</table>
	
	
	<div id="test">
   <h2>Under f�rhandling</h2>
    <table id="tabellstracka">
		<tr>
			<th>					
				<select class="scroll">
					<option>Delstr�cka</option>
					<option>1</option>
					<option>2</option>
				</select>
			</th>
			<th>					
				<select class="scroll">
					<option>UE</option>
					<option>Jonas Heed</option>
					<option>Underentrepren�r 2</option>
				</select>
			</th>
			<th>Datum</th>
			
			<th>					
				<select class="scroll">
					<option>Problem</option>
					<option>Fallet tr�d</option>
					<option>Problem2</option>
				</select>
			</th>
			<th>Kommentar</th>
					
			<th>Acceptera</th>
			<th>�ndra</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Jonas Heed</td>
			<td>171120-171124</td>
			<td>Fallet tr�d</td>
			<td>Femton tr�d</td>
			<td><button class="minbutton">Acceptera</button></td>
			<td><button class="minbutton">�ndra</button></td>
		</tr>

	</table>
	</div>
	</div>
	
    <!-- Genererad tabell med alla arbetsordrar, kunna sortera p� f�rdiga, p�g�ende, planerade, under f�rhandling osv.
    Knappar bredvid varje arbetsorder Radera (med varning), Uppdatera (med kommentarsfunktion),
    
    kunna sortera/s�ka p� enskild undent,
    
    
    kalender,
    
    
    -->
    <div class="flex">
    <h3>Ny arbetsorder</h3>
    
    		<form action="kontakt.php" method="post">
				
			<input type="tel" name="del"  placeholder="Delstr�cka"> <!-- dropdown -->

			<input type="text" name="underent" placeholder="Underentrepren�r"> <!-- laddas in automatiskt beroende p� delstr�cka, dropdown -->
			
			<!-- en dropdown f�r problem??? --> 
            
            <label><input type="checkbox" name="akut">Akut?</label>
			
			<input type="date" name="start" placeholder="Startdatum"> <!-- date???? -->
			
			<input type="date" name="slut" placeholder="Slutdatum">
			
			<textarea name="comment" placeholder="Beskrivning"></textarea><br>
			<button class="knapp" type="submit">
				SKICKA 
			  </button>

		</form>
    </div>     
       <!-- <h2>Historik</h2>-->

<!--            
ArbetsOrder	m�ste	kunna accepteras av b�de underEnt och ArenaChef innan den fastst�lls.
ArenaChef	b�r 	kunna uppdatera f�rdig arbetsorder.
ArenaChef	m�ste	kunna best�lla arbetsorder fr�n UnderEnt.
Arenachef	b�r		kunna kommentera "f�rdiga" arbetsordrar i efterhand
Arenachef	b�r		kunna se arbetsOrder kopplat till enskilda underent
Arenachef	b�r		kunna se arbetsordrar under f�rhandling
Arenachef	b�r		kunna se planerade arbetsordrar i arenan.
Arenachef	b�r		kunna se visuell presentation (t.ex. tabell/kalender) �ver icke accepterade/p�g�ende/klara/f�rhandlade arbeten 
Arenachef	b�r		kunna v�lja omfattningen som visas fr�n tidigare arbeten m�nadsvis (v�ljer p� arenaChefs view att han vill se Juni tex)
Arenachef	m�ste	kunna se p�g�ende arbetsordrar i arenan. 
ArenaChef	vill	att vid val av underEnt till delstr�cka skall endast presenteras de underEnt som hanterar den valda delstr�ckan
ArenaChef	vill	kunna se historik kring utf�rda arbeten, till exempel vad det har kostat, historiskt, att avl�gsna tr�d, barka om ett omr�de, l�gga ny sp�ng, etc
Arenachef	vill	kunna se statistik �ver vilka underent. som gjort flest arbeten i timmar
Arenachef	vill	kunna �ndra ansvariga underent. f�r delstr�ckor
ArenaChef	vill	vill att det skall g� att placera arbetsordrar bak�t i tiden. Detta skall resultera i larm som meddelar detta

-->