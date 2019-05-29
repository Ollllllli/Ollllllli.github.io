<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Quiz Answers - Minecraft</title>
	<link href="css/main.css" rel="stylesheet" type="text/css">
</head>

<body class="quiz">
	<nav>
		<div>
			<a href="index.html" class="navbutton">Home</a>
			<a href="about.html" class="navbutton">About</a>
			<a href="quiz.html" class="navbutton">Quiz</a>
			<a href="login.html" class="navbutton">Login</a>
			<a href="gallery.html" class="navbutton">Gallery</a>
		</div>
	</nav>
	<h1>Answers</h1>
	<maincontent>
		<?php 
		$q1 = $_POST['q1'];
		$q2 = $_POST['q2'];
		$q3 = $_POST['q3'];
		$q4 = $_POST['q4'];
		$q5 = $_POST['q5'];
		
		if ($q1 == 'T') {echo('Q1: You were correct!<br>');} else {echo('Q1: You were incorrect!<br>');}
		if ($q2 == 'T') {echo('Q2: You were correct!<br>');} else {echo('Q2: You were incorrect!<br>');}
		if ($q3 == 'T') {echo('Q3: You were correct!<br>');} else {echo('Q3: You were incorrect!<br>');}
		if ($q4 == 'T') {echo('Q4: You were correct!<br>');} else {echo('Q4: You were incorrect!<br>');}
		if ($q5 == 'T') {echo('Q5: You were correct!<br>');} else {echo('Q5: You were incorrect!<br>');}
		
		?>
	</maincontent>
	<footer>
		<!--Oliver Bowers 2018. Not affiliated with Mojang inc-->
	</footer>
</body>
</html>