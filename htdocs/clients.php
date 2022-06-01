<!DOCTYPE html>

<title>Monochrome by M. Enright.</title>

<html lang="en">

<header>
    <meta charset="UTF-8"/>
	<meta name="description" content="Digital Artwork">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
    <meta name="author" content="Bryn Hancock">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="style.css" rel="stylesheet">
    <hgroup>
        <h1>CLIENTS</h1>
    </hgroup>
	<?php
        require_once "queryDb.php";
        if (isset($_GET["fullname"])) {
        $search = ($_GET("form")) ; 
        } else {
        $search = "" ;
        }
        $customers = getCustomers() ;

        if (isset($_GET["fullname"])) {
        $search = ($_GET("form")) ; 
        } else {
        $search = "" ;
        }
        $events = getEvents() ;
	?>
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
    <p>LOCAL BUSINESSES I HAVE WORKED WITH:</p>
	<br />
	<div id="dbtable">
        <table style="margin-left: 15%; margin-right: 15%;">
            <thead>
                <tr>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>ADDRESS</th>
                    <th>PHONE NUMBER</th>
                    <th>CUSTOMER ID</th>
                </tr>
            </thead>
            <tbody id="dbtable">
                <?php 
                    foreach ($customers as $customername) {
                    	echo "<tr>"; 
                        echo "<td>" . $customername['FIRSTNAME'] . "</td>";
                        echo "<td>" . $customername['LASTNAME'] . "</td>";
                        echo "<td>" . $customername['ADDRESS'] . "</td>";
                        echo "<td>" . $customername['PHONE'] . "</td>";
                        echo "<td>" . $customername['CUSTID'] . "</td>";
                    } 
                ?>
            </tbody>
        </table>
    </div>
    <br />
    <p>LOCAL EVENTS I HAVE WORKED ON:</p>
    <div id="dbtable">
        <table style="margin-left: 15%; margin-right: 15%;">
            <thead>
                <tr>
                    <th>EVENT ID</th>
                    <th>EVENT NAME</th>
                    <th>LOCATION</th>
                    <th>DESCRIPTION</th>
                    <th>DATE</th>
                </tr>
            </thead>
            <tbody id="dbtable">
                <?php 
                    foreach ($events as $eventid) {
                    	echo "<tr>"; 
                        echo "<td>" . $eventid['EVENTID'] . "</td>";
                        echo "<td>" . $eventid['EVENTNAME'] . "</td>";
                        echo "<td>" . $eventid['LOCATION'] . "</td>";
                        echo "<td>" . $eventid['DESCRIPTION'] . "</td>";
                        echo "<td>" . $eventid['DATE'] . "</td>";
                    } 
                ?>
            </tbody>
        </table>
    </div>
    <br />
</body>

<footer>Copyright Bryn Hancock 2022</footer>
</html>