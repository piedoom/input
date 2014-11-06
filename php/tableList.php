<?php
#################
##  functions  ##
#################
#correctly formats a table group listing in html
function inputTableList($t){
	return "
	<div class='tableListing' id = '" . base64_encode($t) . "'>
		" . $t . "
	</div>
	";
}

#################
##  interface  ##
#################
#echoing out each table name
#program assigns id to each div for reference later
for ($i_tblcnt = 0; $i_tblcnt < $linkTablesNumber; $i_tblcnt++){
	echo inputTableList($linkTables[$i_tblcnt]);
}
?>