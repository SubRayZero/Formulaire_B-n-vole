<?php

//La classe pour le formulaire bénévole
class Formulaire{

    private $Nom;
    private $Prenom;
    private $Age;
    private $Sexe;
    private $NumTel;
    private $Email;
    private $Region;
    private $Daily_availability;
    private $Hours_availability;
    private $Privileged_job;
    private $Comment;
    private $Free_expression;


    public function __construct($Nom, $Prenom, $Age, $Sexe, $NumTel, $Email, $Region, $Daily_availability, $Hours_availability, $Privileged_job, $Comment, $Free_expression) {
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Age = $Age;
        $this->Sexe = $Sexe;
        $this->NumTel = $NumTel;
        $this->Email = $Email;
        $this->Region = $Region;
        $this->Daily_availability = $Daily_availability;
        $this->Hours_availability = $Hours_availability;
        $this->Privileged_job = $Privileged_job;
        $this->Comment = $Comment;
        $this->Free_expression = $Free_expression;
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

    /**
     * Get the value of Daily_availability
     */
    public function getDaily_availability()
    {
        return $this->Daily_availability;
    }

    /**
     * Set the value of Daily_availability
     *
     * @return  self
     */
    public function setDaily_availability($Daily_availability)
    {
        $this->Daily_availability = $Daily_availability;
        return $this;
    }

    /**
     * Get the value of Hours_availability
     */
    public function getHours_availability()
    {
        return $this->Hours_availability;
    }

    /**
     * Set the value of Hours_availability
     *
     * @return  self
     */
    public function setHours_availability($Hours_availability)
    {
        $this->Hours_availability = $Hours_availability;
        return $this;
    }

    /**
     * Get the value of Privileged_job
     */
    public function getPrivileged_job()
    {
        return $this->Privileged_job;
    }

    /**
     * Set the value of Privileged_job
     *
     * @return  self
     */
    public function setPrivileged_job($Privileged_job)
    {
        $this->Privileged_job = $Privileged_job;
        return $this;
    }

    /**
     * Get the value of Comment
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * Set the value of Comment
     *
     * @return  self
     */
    public function setComment($Comment)
    {
        $this->Comment = $Comment;
        return $this;
    }

    /**
     * Get the value of Free_expression
     */
    public function getFree_expression()
    {
        return $this->Free_expression;
    }

    /**
     * Set the value of Free_expression
     *
     * @return  self
     */
    public function setFree_expression($Free_expression)
    {
        $this->Free_expression = $Free_expression;
        return $this;
    }

    public function convertToArray(){
        return [
            $this->getNom(),
            $this->getEmail(),
            $this->getPrenom(),
            $this->getAge(),
            $this->getSexe(),
            $this->getNumTel(),
            $this->getRegion(),
            $this->getDaily_availability(),
            $this->getHours_availability(),
            $this->getPrivileged_job(),
            $this->getComment(),
            $this->getFree_expression()
        ];
    }
}
