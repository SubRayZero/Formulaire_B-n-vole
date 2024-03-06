<?php

require_once 'classe_formulaire_benevole.php';
require_once 'data_base_f1.php';


if (
    !empty($_POST)
    && isset($_POST["nom"])
    && isset($_POST["prenom"])
    && isset($_POST["age"])
    && isset($_POST["sexe"])
    && isset($_POST["numtel"])
    && isset($_POST["email"])
    && isset($_POST["confirm_email"])
) {



    //special chars
    $Nom = htmlspecialchars($_POST["nom"]);
    $Prenom = htmlspecialchars($_POST["prenom"]);
    $Age = htmlspecialchars($_POST["age"]);
    $Sexe = htmlspecialchars($_POST["sexe"]);
    $NumTel = htmlspecialchars($_POST["numtel"]);
    $Email = htmlspecialchars($_POST["email"]);
    $confirm_email = htmlspecialchars($_POST["confirm_email"]);


    if ($Email === $confirm_email) {

        $new_Formulaire = new Formulaire($Nom, $Prenom, $Age, $Sexe, $NumTel, $Email,);


        $new_DbF1 = new DbF1("benevoles.csv");
        $csv_DbF1 = $new_DbF1->openbenevoles_csv();


        if ($csv_DbF1 !== false) {

            $new_DbF1->writeIntobenevoles_csv($csv_DbF1, $new_Formulaire->convertToArray());

            $new_DbF1->closebenevoles_csv($csv_DbF1);

            //"success1" n'est là que pour les tests (penser à l'enlever et mettre le vrai chemin quand les tests seront ok)

            header("Location: ../html_formulaire_1.php?success1");
            exit;
        }
    } else {

        //"success0" n'est là que pour les testes (penser à l'enlever et mettre le vrai chemin quand les tests seront ok)
        header("Location: ../html_formulaire_1.php?success0");
        exit;
    }
}