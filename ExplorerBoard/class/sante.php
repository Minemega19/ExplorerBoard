<?php
/**
 * Created by PhpStorm.
 * User: bapti
 * Date: 07/12/2018
 * Time: 04:05
 */

class sante
{
    private $idScientifique;
    private $idSante;
    private $idEtatScientifique;
    private $temperature;
    private $date;
    private $taille;
    private $poid;
    private $rythmeCardiaque;

    /**
     * sante constructor.
     * @param $idScientifique
     * @param $idSante
     * @param $idEtatScientifique
     * @param $temperature
     * @param $date
     * @param $taille
     * @param $poid
     * @param $rythmeCardiaque
     */
    public function __construct($valeur = array()){
        if( !empty($valeur)){
            $this->affecte($valeur);
        }
    }

    public function affecte($donnees){
        foreach ($donnees as $attribut => $valeur){
            switch ($attribut){
                case 'idScientifique' : $this->setIdScientifique($valeur);
                    break;
                case 'idSante': $this->setIdSante($valeur);
                    break;
                case 'idEtatScientifique': $this->setIdEtatScientifique($valeur);
                    break;
                case 'temperature': $this->setTemperature($valeur);
                    break;
                case 'date': $this->setDate($valeur);
                     break;
                case 'taille': $this->setTaille($valeur);
                    break;
                case 'poid': $this->setPoid($valeur);
                    break;
                case 'rythmeCardiaque': this->$this->setRythmeCardiaque($valeur);
                    break;
            }
        }
    }

    /**
     * @return mixed
     */
    public function getIdScientifique()
    {
        return $this->idScientifique;
    }

    /**
     * @param mixed $idScientifique
     */
    public function setIdScientifique($idScientifique)
    {
        $this->idScientifique = $idScientifique;
    }

    /**
     * @return mixed
     */
    public function getIdSante()
    {
        return $this->idSante;
    }

    /**
     * @param mixed $idSante
     */
    public function setIdSante($idSante)
    {
        $this->idSante = $idSante;
    }

    /**
     * @return mixed
     */
    public function getIdEtatScientifique()
    {
        return $this->idEtatScientifique;
    }

    /**
     * @param mixed $idEtatScientifique
     */
    public function setIdEtatScientifique($idEtatScientifique)
    {
        $this->idEtatScientifique = $idEtatScientifique;
    }

    /**
     * @return mixed
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @param mixed $temperature
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param mixed $taille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    /**
     * @return mixed
     */
    public function getPoid()
    {
        return $this->poid;
    }

    /**
     * @param mixed $poid
     */
    public function setPoid($poid)
    {
        $this->poid = $poid;
    }

    /**
     * @return mixed
     */
    public function getRythmeCardiaque()
    {
        return $this->rythmeCardiaque;
    }

    /**
     * @param mixed $rythmeCardiaque
     */
    public function setRythmeCardiaque($rythmeCardiaque)
    {
        $this->rythmeCardiaque = $rythmeCardiaque;
    }

}