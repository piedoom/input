<?php
#table determined later
#these variables should be edited
$inputHost = 'localhost';
$inputDatabase = 'input';
$inputUsername = 'root';
$inputPassword = '';

#################
##  variables  ##
#################
/*
$inputHost, $inputDatabase, $inputUsername, $inputPassword = credentials of your database to be EDITED.  Input will use its own database as well.
$mysqli 


*/

#database connect 
$mysqliEdit = new mysqli($inputHost, $inputUsername, $inputPassword, $inputDatabase);

#table list variable
#needs PHP 5.5 or later
$linkTables = array_column(mysqli_fetch_all($mysqliEdit->query('SHOW TABLES')),0);

#echo tables (test)
echo implode(' ',$linkTables);
?>