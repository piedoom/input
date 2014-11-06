var server = require('./node/server.js');
var mysql = require('mysql');
var connection = mysql.createConnection({
	host: 'localhost',
	user: 'root',
	password: '',
	database: 'input'
});
connection.query('SHOW TABLES', function(err, rows, tables){ 
    console.log(table);
});
server.start();

