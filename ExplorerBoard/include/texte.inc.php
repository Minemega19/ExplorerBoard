<div id="texte">
<?php
if (!empty($_GET["page"])){
	$page=$_GET["page"];
}
else
{
	$page=0;
}
switch ($page) {

//
// Suivi train
//
  case 0:
      // inclure ici la page de la suivi du train
      include_once('pages/AffGlobal.inc.php');
      break;

  case 1:
		// inclure ici la page de la suivi du train
		include_once('pages/AffGlobal.inc.php');
		break;

//
// Capteur
//
  case 20:
		// inclure ici la page d'ajout d'un capteur
		include_once('pages/GererTag.inc.php');
		break;

	case 21:
		// inclure ici la page
		include_once('pages/GererZone.inc.php');
		break;

	case 22:
		// inclure ici la page
		include_once('pages/AfficherTagZone.inc.php');
		break;
//
// Graphique
//
  case 30:
		// inclure ici la page d'affichage du graphes par zone
    include_once('pages/StatZone.inc.php');
    break;

	case 31:
		// inclure ici la page d'affichage du graphes par capteur

    break;

	case 32:
		// inclure ici la page d'affichage du graphes personnalisé

    break;
//
// Zone
//
	case 40:
        include_once('pages/AjouterZone.inc.php');
        break;

	case 41:
		// inclure ici la page de la modification d'une zone

    break;

	case 42:
		// inclure ici la page d'affichage des zones

    break;
//
// Dashboard
//
	default : 	include_once('pages/accueil.inc.php');
}

?>
</div>
