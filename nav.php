<?php
	$pageName = basename($_SERVER['PHP_SELF']);
?>

<div class="nav">
	<form action="/index.php" class="logo"> <button> <img src="resources/logo.png" alt="Logo" class="logo"> </button> </form>
	<ul>
		<?php if ($pageName == 'index.php') 		{ echo '<li class="active"> <a> <p> Shop 		</p> </a> </li>'	; } else { echo '<li> <a href="./index.php"> 		<p> Shop 		</p> </a> </li>' ; } ?>
		<?php if ($pageName == 'warenkorb.php') 	{ echo '<li class="active"> <a> <p> Warenkorb 	</p> </a> </li>'	; } else { echo '<li> <a href="./warenkorb.php"> 	<p> Warenkorb 	</p> </a> </li>' ; } ?>
		<?php if ($pageName == 'wunschliste.php') 	{ echo '<li class="active"> <a> <p> Wunschliste </p> </a> </li>'	; } else { echo '<li> <a href="./wunschliste.php"> 	<p> Wunschliste	</p> </a> </li>' ; } ?>
	</ul>
	<div class="profile">
		<div class="profile_name"> <p> Lucas Oelker </p> </div>
		<form action="/profile.php" class="profile"> <button> <img src="resources/profile_icon.png" alt="Profile" class="profile"> </button> </form>
	</div>
</div>
