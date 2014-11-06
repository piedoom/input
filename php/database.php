<?php


#################
##  variables  ##
#################
/*
$inputHost, $inputDatabase, $inputUsername, $inputPassword = credentials of your database to be EDITED.  Input will use its own database as well.
$m5ysqliEdier8t35
*/

#################
## conventions ##
#################
/*
variables starting with "i_" are throwaways used for loops
most variables will begin with "input" and camel case
many items will be assigned IDs in order to reference their database names.  These are usually the table/database/etc. names in base64.  This is to avoid compatibility problems when working with tables with common names.  There is probably a better solution.

inputTableName
inputDatabaseName
*/

#database connect 
$mysqliEdit = new mysqli($inputHost, $inputUsername, $inputPassword, $inputDatabase);

#table list variable
#needs PHP 5.5 or later
$linkTables = array_column(mysqli_fetch_all($mysqliEdit->query('SHOW TABLES')),0);

#listing the number of tables
$linkTablesNumber = count($linkTables);

?>