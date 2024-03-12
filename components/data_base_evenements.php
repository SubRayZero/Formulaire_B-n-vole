<?php

class DbEvent
{

    private $evenements_csv;

    public function __construct($evenements_csv)
    {
        $this->evenements_csv = $evenements_csv;
    }

    /**
     * Get the value of pathToCsv
     */
    public function getevenements_csv()
    {
        return $this->evenements_csv;
    }

    /**
     * Set the value of pathToCsv
     *
     * @return self
     */
    public function setevenements_csv(string $evenements_csv): self
    {
        $this->evenements_csv = $evenements_csv;

        return $this;
    }

    public function readevenements_csv()
    {

        //permet d'ouvrir un fichier et prend le mode d'ouverture
        return fopen($this->evenements_csv, 'r');
    }

    public function openevenements_csv()
    {

        //elle nous retourne le stream du fichier (code connecté au fichier et on peut donc écrire dedans après)
        return fopen($this->evenements_csv, 'ab');
    }

    //écrire dans le fichier
    public function writeIntoevenements_csv($file, $arrayToWrite)
    {

        //reçoit deux paramètres : le stream et le tableau où on souhaite écrire

        fputcsv($file, $arrayToWrite);
        
    }

    //fermer le stream
    public function closeevenements_csv($file)
    {

        fclose($file);
    }

    public function readFromevenements_csv()
    {
        $data = [];
        $csv = $this->readevenements_csv();

        if ($csv !== false) {
            while (($row = fgetcsv($csv)) !== false) {
                $data[] = $row;
            }

            $this->closeevenements_csv($csv);
        }

        return $data;
    }
}
