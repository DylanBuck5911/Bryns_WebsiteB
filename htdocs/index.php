<DOCTYPE html>

<html lang="en">

<title>Monochrome by M. Enright</title>

<header>
	<meta charset="UTF-8"/>
	<meta name="description" content="Digital Artwork">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
    <meta name="author" content="Bryn Hancock">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="style.css" rel="stylesheet">

	<?php $database = new SQLite3('1621ICT.db');?>
	
	<hgroup>
		<h1><?php echo "m o n o c h r o m e" ?></h1>
		<p id="subtletag"><?php echo "A Collection of Digital Artwork" ?></p>
	</hgroup>
</header>

<body>
	<nav>
		<ul class="navbar">
			<li id="home"><a href="index.php">HOME</a></li>
			<li id="gallery"><a href="gallery.php">GALLERY</a></li>
			<li id="artists"><a href="aboutme.php">ABOUT ME</a></li>
			<li id="clients"><a href="clients.php">CLIENTS</a></li>
            <li id="contactus"><a href="contactus.php">CONTACT ME</a></li>
		</ul>
	</nav>
	<br />
	<p>by Miles Enright.</p>
	<br />
	<br />
	<img src=".\images\drawing.jpg" width="420px" />
	<br />
	<br />
</body>

</html>

<footer>Copyright 2022 Bryn Hancock</footer>