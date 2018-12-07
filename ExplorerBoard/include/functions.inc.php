<?php
	function getEnglishDate($date){
		$membres = explode('/', $date);
		$date = $membres[2].'-'.$membres[1].'-'.$membres[0];
		return $date;
	}

	function addJours($date, $nbJours){
		$membres = explode('/', $date);
		$date = $membres[2].'-'.$membres[1].'-'.(intval($membres[0])+$nbJours);
		return $date;
	}

	function recupHoraire($date){
		$membres = explode(' ', $date);
		$heure = $membres[1];
		return $heure;
	}

	function convertirDateEnSecondes($date){
		$membres = explode(':',$date);
		$heure = $membres[1];
		$minutes = $membres[2];
		$secondes = $membres[3];
		$heureEnMinutes = $heure * 60;
		$heureEnSecondes = $heureEnMinutes * 60;
		$minutesEnSecondes = $minutes * 60;
		$totalSecondes = $heureEnSecondes + $minutesEnSecondes + $secondes;
		return $totalSecondes;
	}
	function diferenceHeure($heureDeb , $heureFin){
        $dateHeure = explode(' ',$heureDeb);
        $membres = explode(':',$dateHeure[1]);
        $heure = $membres[0];
        $minutes = $membres[1];
        $secondes = $membres[2];
        $dateHeure2 = explode(' ',$heureFin);
        $membres2 = explode(':',$dateHeure2[1]);
        $heure2 = $membres2[0];
        $minutes2 = $membres2[1];
        $secondes2 = $membres2[2];
        $h = $heure2 -$heure;
        $m = $minutes2 - $minutes;
        $s = $secondes2 - $secondes;
        $heureEnMinutes = $h * 60;
        $heureEnSecondes = $heureEnMinutes * 60;
        $minutesEnSecondes = $m * 60;
        $totalSecondes = $heureEnSecondes + $minutesEnSecondes + $s;
        return $totalSecondes;
	}


	function secondes_to_duree($secondes){
		$s=$secondes % 60;
		$m1=($secondes-$s) /60;
		$m=$m1 % 60;
		$h=($m1-$m) / 60;
		$resultat=$h.":".$m.":".$s;
		return $resultat;
	}

	function duree_to_secondes($duree){
		$array_duree=explode(":",$duree);
		$secondes=3600*$array_duree[0]+60*$array_duree[1]+$array_duree[2];
		return $secondes;
	}

	function diff_heure($tagdebut,$tabfin){
        //on récupère la durée d'une tournée
        $tempTourAvantMinuit = new DateTime("00:00:00");
        $tempTourApresMinuit = new DateTime("00:00:00");
        $tempsBorneInf = new DateTime("18:00:00");
        $avantMinuit = new DateTime("23:59:59");
        $apresMinuit = new DateTime("00:00:00");
        $tempsBorneSupp = new DateTime("06:00:00");

        if($tagdebut>$tempsBorneInf  && $tagdebut<$avantMinuit && $tabfin> $apresMinuit && $tabfin < $tempsBorneSupp){
            $tempTourAvantMinuit = $tagdebut->diff($avantMinuit);
            $tempTourApresMinuit = $apresMinuit->diff($tabfin);

            $tempTourAvantMinuit = duree_to_secondes($tempTourAvantMinuit->format("%H:%I:%S"));
            $tempTourApresMinuit = duree_to_secondes($tempTourApresMinuit->format("%H:%I:%S"));
            $tempstournee = $tempTourAvantMinuit+$tempTourApresMinuit;
            return $tempstournee = secondes_to_duree($tempstournee);


        }else{

            $tempstournee = $tagdebut->diff($tabfin);
            return $tempstournee = $tempstournee->format("%H:%I:%S");
        }
	}




?>
