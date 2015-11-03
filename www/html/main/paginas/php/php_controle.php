<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_POST["username"])) {
			$username_error="Campo obrigatorio. Favor preencher corretamente";
		}
		if(empty($_POST["secret"])) {
			$secret_error="Campo obrigatorio. Favor preencher corretamente";
		}
	}

?>
