<!DOCTYPE html>
<html>
<head>
	<title>Salade de césar</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>La salade de césar</h1>
	<form method="POST" action="">
		<textarea name="message"></textarea>
		<input type="submit">
	</form>
	
		<?php 
			function cesar($message, $decalage){
				$alphabet = "abcdefghijklmnopqrstuvwxyz";
				$messageDecale = "";
				for ($i=0; $i < strlen($message); $i++) { 
					$posLettre = strpos($alphabet, $message[$i]);
					$posLettreDecale = ($posLettre + $decalage) % 26;
					$lettreDecale = $alphabet[$posLettreDecale];
					$messageDecale = $messageDecale . $lettreDecale;
				}
				return $messageDecale;
			}

			if(isset($_POST['message']) && !empty($_POST['message'])) {
				$texte = $_POST['message'];
				$mots = explode(' ', $texte);
				$motsDecale = array();
				foreach ($mots as $mot) {
					array_push($motsDecale, cesar($mot, strlen($mot)));
				}
				$texteDecale = implode(" ", $motsDecale);
				echo "<h2>" . $texte . '</h2>';
				echo "<h2>" . $texteDecale . '</h2>';
			}
		?>
</body>
</html>
