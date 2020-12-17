<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- displays site properly based on user's device -->
		<link rel="stylesheet" href="style.css">
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="./images/favicon-32x32.png"
		/>
		<!-- <script src="assets/main.js" defer></script> -->
		<title>formulaire</title>

	</head>
	<body>
			<header>
				<h1>
					FORMULAIRE
				</h1>
			</header>

		
					<form action="traitement.php" class="form" method="POST">
						<p><input class="champ" type="text" placeholder="First Name" id="firstName" name="firstName" required></p>
					
						<p><input class="champ" type="text" placeholder="Last Name" id="lastName" name="lastName" required></p>
						
                        <p><input class="champ" type="text" placeholder=" Email Address " id="email" name="email" required></p>
                        <p><input class="champ" type="text" placeholder=" numero de tel " id="tel" name="tel" value="+33" required></p>
						<p><input class="champ" type="text" placeholder=" pseudo " id="pseudo" name="pseudo" required></p>
						<p><input class="champ" type="password" placeholder="Password" id="password" name="password" required></p>						
						<p><input class="champ" type="password" placeholder="Password" id="password2" name="password2" required></p>
						
						<input class="champ" type="submit" value="envoyer"> 
						
						
					</form>
			
	</body>
</html>
