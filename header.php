<!DOCTYPE html>
<html>
    <head>
<?php
    /* Since we have just one header in this Lab 10 solution, set the title based on the page name being called, i.e. in the URI */
    $title = "Home";
    $link = strtolower($_SERVER['REQUEST_URI']);
    if (strpos($link, 'menu') !== false) {
	    $title = "Menu";
    } else if (strpos($link, 'contact') !== false) {
	    $title = "Contact Us";
    }
  ?>    <title>WP Eatery - <?php echo $title?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href='http://fonts.googleapis.com/css?family=Fugaz+One|Muli|Open+Sans:400,700,800' rel='stylesheet' type='text/css' />
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
            <header class="clearfix">
                <img src="images/header_img.jpg" alt="Dining Room" title="WP Eatery"/>
                <div id="title">
                    <h1>WP Eatery</h1>
                    <h2>1385 Woodroffe Ave, Ottawa ON</h2>
                    <h2>Tel: (613)727-4723</h2>
                </div>
            </header>
            <nav>
                <div id="menuItems">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href=" mailing_list.php">List</a></li>
                    </ul>
                </div>
            </nav>