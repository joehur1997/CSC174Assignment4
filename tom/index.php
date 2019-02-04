<?php
    ob_start();
    include("inc/html-top.inc");
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace("%TITLE%","Thomas Hogrefe | Lab 1: Initial Personal Website",$buffer);
    echo $buffer;
?>

<body class='container'>

	<?php include "inc/header.inc"; ?>

	<main>
		<p>
			Hi, my name is Thomas Hogrefe. I’m a senior at the University of Rochester studying Political Science with a minor in Computer Science. Outside of class, I’m a member of Sigma Phi Epsilon and a Speaking Fellow. I enjoy aviation and programming in my spare time.
		</p>
	</main>

	<?php include "inc/footer.inc"; ?>

	<?php include "inc/nav.inc"; ?>

	<?php include "inc/scripts.inc"; ?>


</body>
</html>