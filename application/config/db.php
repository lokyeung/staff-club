<?php

$database = "Driver={IBM DB2 ODBC DRIVER};Database=c3029924;HOSTNAME=158.132.20.106;PORT=50000;PROTOCOL=TCPIP;UID=c3029924;PWD=913cdg5w;";
$conn = db2_connect($database, '', '');
// Create the test table
// $create = 'CREATE TABLE ANIMALS (id INTEGER, breed VARCHAR(32),name CHAR(16), weight DECIMAL(7,2))';
// $result = db2_exec($conn, $create);
if ($conn) {
	print "Successful\n";
} else {
	echo "Connection failed\n";
	echo "db2_conn_errormsg = " . db2_conn_errormsg() . "\n";
	echo "db2_conn_error = " . db2_conn_error() . "\n";
}