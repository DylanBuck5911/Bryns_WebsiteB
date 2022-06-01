<DOCTYPE html>

<title>Website WIP</title>

<header>
	<meta charset="UTF-8"/>
	<meta name="description" content="Digital Artwork">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
    <meta name="author" content="Bryn Hancock">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="style.css" rel="stylesheet">
	<?php
        require_once "queryDb.php";

        if (isset($_POST["customername"])) {
                $search = ($_POST("form")) ; 
            } else {
                $search = "" ;
            }

            $customers = getCustomers() ;
                
            // $amphibians = [
            // [
            //     "commonname" => "Cane Toad",
            //     "class" => "Amphibia",
            //     "order" => "Anura",
            //     "genus" => "Rhinella",
            //     "species" => "C.galerita"
            // ],
            // ["commonname" => "Crucifix Frog", "class" => "Amphibia",
            // "order" => "Anura", "genus" => "Notaden",
            // "species" => "Bennettii"],
            // ["commonname" => "Tusked Frog", "class" => "Amphibia",
            // "order" => "Anura", "genus" => "Adelotus",
            // "species" => "Brevis"],
            // ["commonname" => "Green Tree Frog", "class" => "Amphibia",
            // "order" => "Anura", "genus" => "Litoria",
            // "species" => "Caerulia"],
            // ];
    ?>
	<hgroup>
		<h1>CONTACT ME</h1>
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
	<br />
	<p>Reaching out for prints? Drop your details below and ill get in touch!</p>
	<form action="submit.php" method="POST">
  		<label id="formlabels" for="fname">FIRST NAME</label><br>
		  	<br />
  		<input type="text" id="fname" name="fname" value=""><br><br>
		  	<br />
  		<label id="formlabels" for="lname">LAST NAME</label><br>
		  	<br />
  		<input id="lname" name="lname" value=""><br><br>
			<br />
		<label id="formlabels" for="lname">ADDRESS</label><br>
		  	<br />
  		<input type="text" id="address" name="address" value=""><br><br>
		  	<br />
		<label id="formlabels" for="lname">PHONE NUMBER</label><br>
		  	<br />
  		<input type="text" id="email" name="email" value=""><br><br>
		  	<br />
  		<input type="submit" value="Submit">
	</form>
		<br />
	<label id="formlabels">Search the Database</label><br>
		</br>
	<form type="form" action="contactus.php" method="get">
		<input type="text" name="dbresult" value=""/>
		<input type="submit" value="Search"/>
	</form> 
	<div>
		<p> <?php print_r getCustomers() ?> </p>
	</div>
</body>

</html>

<footer>Copyright 2022 Bryn Hancock</footer>