<?php
	include ('credentials.php');
	$mysqli = new mysqli($inputHost, $inputUsername, $inputPassword, $inputDatabase);
	
	#TODO: prevent sql injection.
	$table = base64_decode($_POST['name']);
	
	#fix later so table 'homepage' is the name that ajax passed
	if ($result = $mysqli->query("SELECT * FROM $table ")) {

	    /* fetch associative array */
	    while ($row = $result->fetch_assoc()) {
	        #BEGIN LOOP 
			echo "<div class='card'><div class='title'>Category</div>";
			foreach($row as $key => $value) {
		        echo
					 "<div class='pair'>".
					 	"<div class='key'>$key</div>" . 
					 	"<textarea data-table='$table' data-key='$key' data-value='$value' class='value'>$value</textarea>".
					 "</div>";
		     } 
			echo "</div>";
	    }

	    /* free result set */
	    $result->free();
	}

	/* close connection */
	$mysqli->close();
?>