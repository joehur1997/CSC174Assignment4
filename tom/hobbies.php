<?php
    ob_start();
    include("inc/html-top.inc");
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace("%TITLE%","Hobbies | Thomas Hogrefe | Lab 1: Initial Personal Website",$buffer);
    echo $buffer;
?>

<body class='container'>

	<?php include "inc/header.inc"; ?>

	<main>
		<h2>
			Hobbies
		</h2>

		<p>
			I’d also like to take some time to talk about Soaring. Soaring is one of my biggest passions -- it’s the sport of flying, and sometimes racing, unpowered aircraft. I first began soaring during my junior year of high school, and quickly fell in love. I learned about how a glider stays in the air for extended periods: getting pushed up by circling in rising air currents; and how they takeoff and land: being towed up by a powered airplane, and gliding in for a landing. I was able to earn my Private Pilot Glider rating the summer before my freshman year, and my Commercial rating the following summer. I’m currently working on my Flight Instructor rating, and I can’t wait to be able to teach new pilots.
		</p>
	</main>
	<?php include "inc/footer.inc"; ?>

	<?php include "inc/nav.inc"; ?>

	<?php include "inc/scripts.inc"; ?>
</body>
</html>