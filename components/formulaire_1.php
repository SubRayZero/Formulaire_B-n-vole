<?php

class Formulaire{

    private $Nom;
    private $Prenom;
    private $Age;
    private $Sexe;
    private $NumTel;
    private $Email;

    public function __construct($Nom, $Prenom, $Age, $Sexe, $NumTel, $Email) {
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Age = $Age;
        $this->Sexe = $Sexe;
        $this->NumTel = $NumTel;
        $this->Email = $Email;
    }

    


    /**
     * Get the value of Nom
     */ 
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set the value of Nom
     *
     * @return  self
     */ 
    public function setNom($Nom)
    {
        $this->Nom = $Nom;

        return $this;
    }

    /**
     * Get the value of Prenom
     */ 
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set the value of Prenom
     *
     * @return  self
     */ 
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    /**
     * Get the value of Age
     */ 
    public function getAge()
    {
        return $this->Age;
    }

    /**
     * Set the value of Age
     *
     * @return  self
     */ 
    public function setAge($Age)
    {
        $this->Age = $Age;

        return $this;
    }

    /**
     * Get the value of Sexe
     */ 
    public function getSexe()
    {
        return $this->Sexe;
    }

    /**
     * Set the value of Sexe
     *
     * @return  self
     */ 
    public function setSexe($Sexe)
    {
        $this->Sexe = $Sexe;

        return $this;
    }

    /**
     * Get the value of NumTel
     */ 
    public function getNumTel()
    {
        return $this->NumTel;
    }

    /**
     * Set the value of NumTel
     *
     * @return  self
     */ 
    public function setNumTel($NumTel)
    {
        $this->NumTel = $NumTel;

        return $this;
    }

    /**
     * Get the value of Email
     */ 
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set the value of Email
     *
     * @return  self
     */ 
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    public function convertToArray(){
        return [
            $this->getNom(),
            $this->getEmail(),
        ];
    }
}
