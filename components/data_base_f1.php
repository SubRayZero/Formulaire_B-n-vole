<?php

class DbF1{

    private $benevoles_csv;
    
    public function __construct($benevoles_csv) {
        $this->benevoles_csv = $benevoles_csv;
    }

    /**
     * Get the value of pathToCsv
     */ 
    public function getbenevoles_csv()
    {
        return $this->benevoles_csv;
    }

    /**
     * Set the value of pathToCsv
     *
     * @return  self
     */ 
    public function setbenevoles_csv(string $benevoles_csv): self
    {
        $this->benevoles_csv = $benevoles_csv;

        return $this;
    }

    public function readbenevoles_csv(){

        //permet d'ouvrir un fichier et prend le mode d'ouverture
        return fopen($this->benevoles_csv, 'r');
    }

    public function openbenevoles_csv(){

        //elle nous retourne le stream du fichier (code connecté au fichier et on peut donc écrire dedans après)
        return fopen($this->benevoles_csv, 'ab');
    }

    //écrire dans le fichier
    public function writeIntobenevoles_csv($file, $arrayToWrite){

        //reçoit deux paramètres : le stream et le tableau où on souhaite écrire
        fputcsv($file, $arrayToWrite);
    }

    //fermer le stream
    public function closebenevoles_csv($file){

        fclose($file);
    }

    //permet de récupérer tout le contenu du fichier csv sous forme de tableau
    /*public function read_from_benevoles_csv()
    {
        $data_benevoles = [];
        $csv_benevoles = $this->readbenevoles_csv();

        if ($csv_benevoles !== false) {
            while (($row_benevoles = fgetcsv($csv_benevoles)) !== false) {
                $data_benevoles[] = $row_benevoles;
            }

            $this->closebenevoles_csv($csv_benevoles);
        }

        return $data_benevoles;
    }*/

}