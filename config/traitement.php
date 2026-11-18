<?php
session_start();
require_once 'fonctions.php';

if (isset($_POST) && $_SERVER['REQUEST_METHOD'] === 'POST') {


    $civilite = sanitize_input($_POST['civilite'] ?? '');
    $nom = sanitize_input($_POST['nom'] ?? '');
    $prenom = sanitize_input($_POST['prenom'] ?? '');
    $date_naissance = sanitize_input($_POST['date_naissance'] ?? '');
    $lieu_naissance = sanitize_input($_POST['lieu_naissance'] ?? '');
    $nationalite = sanitize_input($_POST['nationalite'] ?? '');
    $situation_familiale = sanitize_input($_POST['situation_familiale'] ?? '');
    $piece_identite = sanitize_input($_POST['piece_identite'] ?? '');
    $email = sanitize_input($_POST['email'] ?? '');
    $telephone = sanitize_input($_POST['telephone'] ?? '');
    $adresse = sanitize_input($_POST['adresse'] ?? '');
    $code_postal = sanitize_input($_POST['code_postal'] ?? '');
    $ville = sanitize_input($_POST['ville'] ?? '');
    $pays = sanitize_input($_POST['pays'] ?? '');

    $type_bac = sanitize_input($_POST['type_bac'] ?? '');
    $annee_bac = sanitize_input($_POST['annee_bac'] ?? '');
    $etablissement_precedent = sanitize_input($_POST['etablissement_precedent'] ?? '');
    $moyenne = sanitize_input($_POST['moyenne'] ?? '');
    $mention = sanitize_input($_POST['mention'] ?? '');

    $faculte = sanitize_input($_POST['faculte'] ?? '');
    $filiere = sanitize_input($_POST['filiere'] ?? '');
    $niveau = sanitize_input($_POST['niveau'] ?? '');
    $annee_academique = sanitize_input($_POST['annee_academique'] ?? '');
    
    // Cas particulier vérifier si les valeurs ne devraient pas être stockées dans un tableau []
    $options = array_map('sanitize_input', $_POST['options'] ?? []);

    $tuteur_nom = sanitize_input($_POST['tuteur_nom'] ?? '');
    $tuteur_lien = sanitize_input($_POST['tuteur_lien'] ?? '');
    $tuteur_tel = sanitize_input($_POST['tuteur_tel'] ?? '');
    $tuteur_profession = sanitize_input($_POST['tuteur_profession'] ?? '');

    $photo = $_FILES['photo'] ?? null;
    $releve_bac = $_FILES['releve_bac'] ?? null;
    $piece_scan = $_FILES['piece_scan'] ?? null;
    $acte_naissance = $_FILES['acte_naissance'] ?? null;

    $is_not_complete = (empty($civilite) || empty($nom) || empty($prenom) || empty($date_naissance) || empty($lieu_naissance) || empty($nationalite) || empty($situation_familiale) || empty($piece_identite) || empty($email) || empty($telephone) || empty($adresse) || empty($code_postal) || empty($ville) || empty($pays) || empty($type_bac) || empty($annee_bac) || empty($etablissement_precedent) || empty($moyenne) || empty($mention) || empty($faculte) || empty($filiere) || empty($niveau) || empty($annee_academique));

    if ($is_not_complete ) {
        $_SESSION['error'] = "Tous les champs sont obligatoires.";
        header('Location: ../inscription.php');
        exit;
    }

    validate_email($email);
    validate_phone($telephone);
    validate_phone($tuteur_tel);





}
