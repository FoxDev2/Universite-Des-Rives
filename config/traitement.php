<?php
session_start();
require_once 'fonctions.php';
require_once 'database.php';

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

    $datas = sanitize_input($_POST);
    $errors = validate_data($datas);

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old_data'] = $datas;
        header('Location: ../inscription.php');
        exit();
    // } else {
        //Traitement des données et insertion dans la base de données

        // NE PAS TOUCHER A PARTIR D'ICI OUI C'EST ICI QUE JE BLOQUE 

        //     $req = "INSERT INTO etudiants (civilite, nom_etudiant, prenoms_etudiant, naissance_etudiant, lieu_naissance_etudiant, nationalite, situation_familiale, num_piece_etudiant, email_etudiant, tel_etudiant, nationalite_etudiant, adresse_etudiant, code_postal, ville, pays, type_bac, annee_bac, etablissement_precedent, moyenne, mention, faculte, filiere, niveau, annee_academique) VALUES (:civilite, :nom, :prenom, :date_naissance, :lieu_naissance, :nationalite, :situation_familiale, :piece_identite, :email, :telephone, :nationalite, :adresse, :code_postal, :ville, :pays, :type_bac, :annee_bac, :etablissement_precedent, :moyenne, :mention, :faculte, :filiere, :niveau, :annee_academique)";
        // 
    }
}
