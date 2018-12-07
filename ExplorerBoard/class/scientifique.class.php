<?php
class Scientifique{
	private $idScientifique;
	private $nom;
	private $prenom;
	private $groupeSanguin;
	private $login;
	private $password;


	public function __construct($valeurs = array()){
		if(!empty($valeurs))
			$this->affecte($valeurs);
	}

	public function affecte($donnees){
			foreach ($donnees as $attribut => $valeur) {
					switch ($attribut) {
						case 'idScientifique': $this->setIdScientifique($valeur);break;
						case 'nom': $this->setNom($valeur);break;
						case 'prenom': $this->setPrenom($valeur);break;
						case 'groupeSanguin': $this->setGroupeSanguin($valeur);break;
						case 'login': $this->setLogin($valeur);break;
						case 'password': $this->setPassword($valeur);break;
					

					}
			}



	public function getIdScientifique(){
		return $this->idScientifique;
	}

	public function setIdScientifique($id){
		$this->idScientifique=$id;
	}

	public function getNom(){
		return $this->nom;
	}

	public function setNom($id){
		$this->nom=$id;
	}

	public function getPrenom(){
		return $this->prenom;
	}

	public function setPrenom($id){
		$this->prenom=$id;
	}

	public function getGroupeSanguin(){
		return $this->groupeSanguin;
	}

	public function setGroupeSanguin($id){
		$this->groupeSanguin=$id;
	}

	public function getLogin(){
		return $this->login;
	}

	public function setLogin($id){
		$this->login=$id;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($id){
		$this->password=$id;
	}


	}