<DOCTYPE html>

<title>Website WIP</title>

<header>
	<meta charset="UTF-8"/>
	<meta name="description" content="Digital Artwork">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
    <meta name="author" content="Bryn Hancock">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="style.css" rel="stylesheet">
	<hgroup>
		<h1>GALLERY</h1>
	</hgroup>
</header>

<html lang="en">

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
	<p>Welcome to the Gallery, this is where i showcase all my recent art and projects!  Feel free to browse my artwork and if you're interested in prints, be sure to checkout <a href="contactus.php">my prints</a></p>
	<div class="art">
		<ul id="artlist">
			<li><img id="alien" src=".\images\alien.jpeg" width="420px" /></li>
			<li>"ALIEN PRIEST"</li>
			<br>
			<li><img id="baby" src=".\images\baby.jpeg" width="420px" /></li>
			<li>"INCUBATION"</li>
			<br>
			<li><img id="crystal" src=".\images\crystal.jpeg" width="420px" /></li>
			<li>"CRYSTALIZED"</li>
			<br>
			<li><img id="statue" src=".\images\statue2.jpg" width="420px" /></li>
			<li>"HOLY TRINITY"</li>
			<br>
			<li><img id="guy" src=".\images\file.jpeg" width="420px" /></li>
			<li>"DECAY"</li>
			<br>
		</ul>
	</div>
</body>

</html>

<footer>Copyright 2022 Bryn Hancock</footer>