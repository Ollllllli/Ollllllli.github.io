<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Login - Minecraft</title>
	<link href="css/main.css" rel="stylesheet" type="text/css">
</head>

<body class="login">
	<nav>
		<div>
			<a href="index.html" class="navbutton">Home</a>
			<a href="about.html" class="navbutton">About</a>
			<a href="quiz.html" class="navbutton">Quiz</a>
			<a href="login.html" class="navbutton">Login</a>
			<a href="gallery.html" class="navbutton">Gallery</a>
		</div>
	</nav>
	<h1>Login</h1>
		<maincontent>
			<?php
				$username = $_POST["username"];
				$password = $_POST["password"];
				
				$temp_dfuser = "user";
				$temp_dfpass = "pass";
				$temp_aduser = "adm";
				$temp_adpass = "pass";
				
				if ($username==$temp_dfuser) {
					if ($password==$temp_dfpass) {
						echo("<h2>Hello user!</h2>");
					}
					else {echo("<h2>Please try again</h2>");http_response_code(200);}
				}
				elseif ($username==$temp_aduser = "adm") {
					if ($password==$temp_adpass) {
						echo("<h2>Aye ad-man!</h2><br><iframe width='500' height='315' src='https://www.youtube.com/embed/dQw4w9WgXcQ?rel=0' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>");
					}
					else {echo("<h2>Please try again</h2>");http_response_code(200);}
					}
				else {
					echo("<h2>Please try again</h2>");
					http_response_code(200);
				}
			?>
		</maincontent>
	<footer>
		<!--Oliver Bowers 2018. Not affiliated with Mojang inc-->
	</footer>
</body>
