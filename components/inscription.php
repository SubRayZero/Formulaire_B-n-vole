<?php

require_once 'classe_formulaire_benevole.php';
require_once 'data_base_f1.php';
session_start();
$_SESSION['form_3'] = $_POST;

if (
    !empty($_SESSION)
    && isset($_SESSION['form_1']['nom'])
    && isset($_SESSION['form_1']['prenom'])
    && isset($_SESSION['form_1']['age'])
    && isset($_SESSION['form_1']['sexe'])
    && isset($_SESSION['form_1']['numtel'])
    && isset($_SESSION['form_1']['email'])
    && isset($_SESSION['form_1']['confirm_email'])
    && isset($_SESSION['form_2']['region'])
    && isset($_SESSION['form_2']['daily_availability'])
    && isset($_SESSION['form_2']['hours_availability'])
    && isset($_SESSION['form_2']['privileged_job'])
    && isset($_SESSION['form_2']['comment'])
) {


    //special chars
    $Nom = htmlspecialchars($_POST["nom"]);
    $Prenom = htmlspecialchars($_POST["prenom"]);
    $Age = htmlspecialchars($_POST["age"]);
    $Sexe = htmlspecialchars($_POST["sexe"]);
    $NumTel = htmlspecialchars($_POST["numtel"]);
    $Email = htmlspecialchars($_POST["email"]);
    $confirm_email = htmlspecialchars($_POST["confirm_email"]);
    $Region = htmlspecialchars($_POST["region"]);
    $Daily_availability = htmlspecialchars($_POST["daily_availability"]);
    $Hours_availability = htmlspecialchars($_POST["hours_availability"]);
    $Privileged_job = htmlspecialchars($_POST["privileged_job"]);
    $Comment = htmlspecialchars($_POST["comment"]);


    if ($Email === $confirm_email) {

        $new_Formulaire = new Formulaire($Nom, $Prenom, $Age, $Sexe, $NumTel, $Email, $Region, $Daily_availability, $Hours_availability, $Privileged_job, $Comment);


        $new_DbF1 = new DbF1("./benevoles.csv");
        $csv_DbF1 = $new_DbF1->openbenevoles_csv();


        if ($csv_DbF1 !== false) {

            $new_DbF1->writeIntobenevoles_csv($csv_DbF1, $new_Formulaire->convertToArray());

            $new_DbF1->closebenevoles_csv($csv_DbF1);

            //"success1" n'est là que pour les tests (penser à l'enlever et mettre le vrai chemin quand les tests seront ok)

            header("Location: ../html_formulaire_3.php?success1");
            exit;
        }
    } else {

        //"success0" n'est là que pour les testes (penser à l'enlever et mettre le vrai chemin quand les tests seront ok)
        header("Location: ../html_formulaire_3.php?success0");
        exit;
    }
}