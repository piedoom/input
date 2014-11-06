<?php
	include ('credentials.php');
	$mysqli = new mysqli($inputHost, $inputUsername, $inputPassword, $inputDatabase);
	
	#TODO: prevent sql injection.
	#fix later so table 'homepage' is the name that ajax passed
	$id = $_POST['id'];
	$table = $_POST['table'];
	$key = $_POST['key'];
	$value = $_POST['value'];
	
	//MySqli Update Query
	$results = $mysqli->query("UPDATE $table SET $key='$value' WHERE ID=$id");

	//MySqli Delete Query
	//$results = $mysqli->query("DELETE FROM products WHERE ID=24");

	if($results){
	    echo '1'; 
	}else{
	    echo 'Error : ('. $mysqli->errno .') '. $mysqli->error;
	}

	/* close connection */
	$mysqli->close();
?>