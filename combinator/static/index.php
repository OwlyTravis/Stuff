<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/styles.css">
		
        <script src="js/vendor/modernizr-2.6.1.min.js"></script>
    </head>
    <body>
	
	
<?php

$combinator = array(
	"Bacon", 
	"Zombie", 
	"Cheese",
	"Candy", 
	"Cartoons",
	"Super Mario",
	"Zelda",
	"Beer",
	"Love",
	"Monkey",
	"Internet",
	"Coffee",
	"Rock &amp; Roll",
	"Guitar",
	"Battlestar",
	"Peace",
	"Robot",
	"Ninja",
	"Science",
	"Space",
	"Tetris",
	"Swords",
	"Shatner",
	"TNG",
	"Star Wars",
	"Adventure",
	"Bill Murray",
	"Free",
	"Planetarium",
	"Scatman",
	"Winning",
	"Happy",
	"Party",
	"Food",
	"Harlem Shake",
	"Site",
	"Game",
	"Drunken",
	"Cake",
	"Zebras",
	"Cats",
	"Lasers",
	"Potatoes",
	"Montgomery Burns",
	"Soccer",
	"Pirates",
    "Toe Socks",
    "Slinky",
    "Playdough",
    "Firefly",
    "Farts",
    "The Facts of Life",
    "The Fonz",
    "Splatters",
    "Napoleon",
    "Nerf",
    "The Godfather",
    "Birds",
    "Gong Show",
    "Shia Leboeuf",
    "Bagpipes",
    "Terminator",
    "Adventure Time",
    "Spongebob",
    "Big Hero",
    "Avengers"
	
);

$totalentries = count($combinator);
$upperlimit = $totalentries - 1;

$rand1 = rand(0,$upperlimit);
$rand2 = rand(0,$upperlimit);

while ($rand1 == $rand2) {
	$rand2 = rand(0,$upperlimit);	
}	

?> 
	
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        
		<div id="wrapper">
		
			<header>
				<h1>The Combinatorrr</h1>
				<blockquote>"Take 2 things that normally don't go together and combine them. It can produce otherwise seemingly impossible solutions that are original." <br /> - Dan Mall (Circles Conference 2012)
				</blockquote>
			</header>
			
			<section class="clearfix">
				<div class="col">
					<h2><?=$words[$rand1];?> <?=$words[$rand2];?></h2>
				</div>
			</section>
			
			<footer>
				There are <?php echo $totalentries;?> entries. &copy; <?=date('Y');?> Travis Gobeil.
			</footer>
		
		</div>
		

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
