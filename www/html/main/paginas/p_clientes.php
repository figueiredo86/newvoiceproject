<php
	<html>
	<head><title>Lista de clientes</title></head>
	<body>Lista de cliente ativos da NVT</body>
	</html>

	$query = "select nome from cliente where status_cli = 1";
	echo $rows;
?>
