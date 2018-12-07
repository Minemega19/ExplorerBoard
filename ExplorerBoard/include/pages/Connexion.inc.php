<?php
$db = mysqli_connect("localhost","bd","bede");
mysqli_select_db($db,"explorerboard");

$req = "SELECT login, password from scientifique ";
$result = mysqli_query($db,$req);
$ligne=mysqli_fetch_array($result);





?>


<!DOCTYPE html>

<html>

  <head>
    
    <meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/logo.png">
	<link rel="stylesheet" type="text/css" href="../../assets/css/connexion.css">
	<title>ExplorerBoard</title>
  </head>

  <body>
  	
  	<div id="blocMid">

		<img id="logo" src="../../assets/img/logo.png">
		
		<input type="text" name="nom" id="champsNom" placeholder="Nom" required/>
			
		<input type="password" name="pwd" id="champsPwd" placeholder="password" required/>

		<div id="lebouton"><a id="bouton" href="../../dashboard.html">Envoyer</a></div>
	
	</div>	
	
  </body>

</html>
	

