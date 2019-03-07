<?php
   session_start();
 ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/game.css" />
	<style>
	</style>
</head>
<body>
	<div class="pole" id = "pole" onselectstart="return false" onmousedown="return false">
		<div class="poler"><!-- platform anim -->
			<div class="ground">
				<div class="left_ground side"></div>
				<div class="right_ground side"></div>
				<div class="top_ground side"></div>
			</div>
		</div>
	<div id = "infotext" class="infotext">test</div>
	<input type='hidden' name='login' id='name_login' value='<?php 
		$login = $_SESSION['login'];
		
		echo $login;
	?>'>
	</div>
	<script src = "js/ajax.js"></script>
	<script src = "js/game.js"></script>


<body>
<html>