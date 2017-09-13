<?php require ('randquote.php'); ?>
<!doctype html>
<html>
	<head> 
		<title>Jacob Lewis</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<link rel="stylesheet" href= "p1Style.css"> 
	</head>
	
	<body>
		<div class="container">
			<div class="name">
				<h1>Jacob Lewis</h1>
			</div>

			<div class="image">
				<img class ="resize" src="/Images/ProfPic.jpg" alt="Jacob Lewis"/>
			</div>
			
			<h2>About Me</h2>
			<div class="aboutMe">
				<p>
					Hello, my name is Jacob Lewis, but I generally go by the nane 'Jack'.
						
					I was born in New York City, and I went to college at Wesleyan University where I majored in Physics and Music. 
						
					I currently live in Somerville, Ma, where I play guitar in a local alternative rock band,'Jakals', who play in Bosotn and the surrounding neighborhoods. During the day, I work at Harvard University for their MTS department as an A/V Tech.
						
					I took a few introductory programming classes while in college, but recently have become more interested in Web Development, particularly back-end web development. 
				 </p>
			</div>

			<h3>Random Quote</h3>
				<p class="quote">
				<?php 
					echo getQuote();
				?> 
			</p>
		</div>
	</body>
</html>


