<h1>Contact </h1>
<br>


<?php 

if((isset($_POST['typ']) && $_POST['typ']=="send")) {

	$b = $_POST['subj'];
	$b = strip_tags($b);
	// Umlaute und Sonderzeichen in
	//HTML-Schreibweise umwandeln
	$b = htmlspecialchars($b);
	// Entfernt überflüssige Zeichen
	// Anfang und Ende einer Zeichenkette
	$b = trim($b);
	// Backslashes entfernen
	$b = stripslashes($b); 
	
	$m = $_POST['msg'];
	$m = strip_tags($m);
	// Umlaute und Sonderzeichen in
	//HTML-Schreibweise umwandeln
	$m = htmlspecialchars($m);
	// Entfernt überflüssige Zeichen
	// Anfang und Ende einer Zeichenkette
	$m = trim($m);
	// Backslashes entfernen
	$m = stripslashes($m); 
	
	
	print "Betreff: ".$b."<br><br>";
	print "Nachricht: ".$m;
}
else
{
?>
	<form action="index.php?url=contact" method="post">
	<fieldset>
		<legend>Kontaktformular</legend>
		
		<label>Betreff:</label>
	        <!--  Durch  class="input-prepend"  wird  das  "add-on"  am  Anfang  angehaengt  -->
	        <div  class="input-prepend">
	            <span  class="add-on">!</span>
	            <input  type="text" name="subj" placeholder="Betreff">
	        </div>
	        
	         <label>Nachricht:</label>
	         <textarea  rows="3" placeholder="Beispieltext" name="msg"></textarea><br>
		<input type="hidden" name="typ" value="send">
		<input type="submit" class="btn" value="Absenden">
		
	                                
	</fieldset>
	</form>
<?php }
?>

