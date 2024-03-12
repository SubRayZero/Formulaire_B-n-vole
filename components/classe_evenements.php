<?php

//La classe pour le formulaire bénévole
class Evenements
{

    private $Choix;
    private $Description;
    private $Personne;
    private $Region;


    public function __construct($Choix, $Personne, $Region, $Description = '')
    {
        $this->Choix = $Choix;
        $this->Description = $Description;
        $this->Personne = $Personne;
        $this->Region = $Region;
    }

    /**
     * Get the value of Choix
     */
    public function getChoix()
    {
        return $this->Choix;
    }

    /**
     * Set the value of Choix
     *
     * @return  self
     */
    public function setChoix($Choix)
    {
        $this->Choix = $Choix;

        return $this;
    }

    /**
     * Get the value of Description
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Set the value of Description
     *
     * @return  self
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * Get the value of Personne
     */
    public function getPersonne()
    {
        return $this->Personne;
    }

    /**
     * Set the value of Personne
     *
     * @return  self
     */
    public function setPersonne($Personne)
    {
        $this->Personne = $Personne;

        return $this;
    }

        /**
     * Get the value of Region
     */ 
    public function getRegion()
    {
        return $this->Region;
    }

    /**
     * Set the value of Region
     *
     * @return  self
     */ 
    public function setRegion($Region)
    {
        $this->Region = $Region;

        return $this;
    }

    public function convertToArray()
    {
        return [
            $this->getChoix(),
            $this->getDescription(),
            $this->getPersonne(),
            $this->getRegion(),
        ];
    }


}
