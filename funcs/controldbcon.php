<?php
include_once("../ini/config.ini.php");
function conecta() { 
	$myconn = mysql_connect("$db[host]","$db[username]","$db[password]");
       if (!$myconn) {
  		die('Erro ao conectar na base');
 	}
}

function runquery($statement) {
	conecta();
	$run = mysql_query("$statement");
 	if (!$run) {
  		die('Nao foi possivel realizar a query');
 	}

	 while ($rows = mysql_fetch_array($run,MYSQL_BOTH)) {
 		printf("Nome: %s",$rows[0]);
 	}   
}

function db_lista,cli($statement) {
	conecta();
	$run = mysql_query("$statement");
 	if (!$run) {
  		die('Nao foi possivel realizar a query');
 	}

	 while ($rows = mysql_fetch_array($run,MYSQL_BOTH)) {
 		printf("Cliente: %s",$rows[0]);
 	}   
}
?>
