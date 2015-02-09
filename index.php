<?php
  // What we need.
	include("inc/header.php");
	include("inc/top.php");
	// if we are logged, go to member.php
	if(isset($_SESSION['login'])){header('Location: '.$p_member.'');}
?>
<!-- the content is fixed on the container -->
<div id="container">
	<header id="container_top">
		<p><?php echo($l_hello); ?></p> <-- the arg is fixed with the lang file -->
	</header>

</div>
