<?php

require_once 'data_base_evenements.php';
require_once 'classe_evenements.php';
if (
    !empty($_POST)
    && isset($_POST["choix_evenement"])
    && isset($_POST["description"])
    && isset($_POST["personne"])
) {
    
    $Choix = htmlspecialchars($_POST["choix_evenement"]);
    $Description = htmlspecialchars($_POST["description"]);
    $Personne = htmlspecialchars($_POST["personne"]);

    
        $new_Evenements = new Evenements($Choix, $Personne, $Description);
        $array = $new_Evenements->convertToArray();

        $new_DbEvent = new DbEvent("evenements.csv");

        $csv_DbEvent = $new_DbEvent->openevenements_csv();

        if ($csv_DbEvent !== false) {

            $new_DbEvent->writeIntoevenements_csv($csv_DbEvent, $array);
            
            $new_DbEvent->closeevenements_csv($csv_DbEvent);

            //"success1" n'est là que pour les tests (penser à l'enlever et mettre le vrai chemin quand les tests seront ok)
            $_SESSION['isRegistred'] = true;
            header("Location: ../components/administration");
            exit;
        }
   
}
?>

