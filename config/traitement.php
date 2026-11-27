<?php
session_start();
require_once 'fonctions.php';
require_once 'database.php';


if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

    $_POST = sanitize_input($_POST);
    $errors = array_merge(validate_data($_POST), validate_files($_FILES));


    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old_data'] = $_POST;
        header('Location: ../inscription.php');
        exit();
    }
    // else {
    //     //Traitement des données et insertion dans la base de données
    //     $pays = $_POST["pays"];
    //     $query_pays = "INSERT INTO pays (nom_pays) VALUES (:pays)";
    //     $stmt_pays = $pdo->prepare($query_pays);
    //     $stmt_pays->execute(
    //         [
    //             'pays' => $pays
    //         ]
    //     );

    //     $id_pays = $pdo->lastInsertId();

    //     $code_postal = $_POST["code_postal"];
    //     $ville = $_POST["ville"];
    //     $query_ville = "INSERT INTO ville (nom_ville, code_postal_ville, id_pays) VALUES (:ville, :cp, :id_pays)";
    //     $stmt_ville = $pdo->prepare($query_ville);
    //     $stmt_ville->execute(
    //         [
    //             'ville' => $ville,
    //             'cp' => $code_postal,
    //             'id_pays' => $id_pays
    //         ]
    //     );

    //     $id_ville = $pdo->lastInsertId();

    //     $nom_prenom_responsable = $_POST["tuteur_nom"];
    //     $profession_responsable = $_POST["tuteur_profession"];
    //     $tel_responsable = $_POST["tuteur_tel"];
    //     $lien_parente_responsable = $_POST["tuteur_lien"];
    //     $query_responsable = "INSERT INTO responsable (nom_prenom_responsable, profession_responsable, tel_responsable, lien_parente_responsable) VALUES (:nom, :profession, :tel, :lien_parente)";
    //     $stmt_responsable = $pdo->prepare($query_responsable);
    //     $stmt_responsable->execute(
    //         [
    //             'nom' => $nom_prenom_responsable,
    //             'profession' => $profession_responsable,
    //             'tel' => $tel_responsable,
    //             'lien_parente' => $lien_parente_responsable
    //         ]
    //     );

    //     $id_responsable = $pdo->lastInsertId();

    //     $nom_etudiant = $_POST["nom"];
    //     $prenom_etudiant = $_POST["prenom"];
    //     $naissance_etudiant = $_POST["date_naissance"];
    //     $lieu_naissance_etudiant = $_POST["lieu_naissance"];
    //     $num_piece_etudiant = $_POST["piece_identite"];
    //     $email_etudiant = $_POST["email"];
    //     $tel_etudiant = $_POST["telephone"];
    //     $nationalite_etudiant = $_POST["nationalite"];
    //     $adresse_etudiant = $_POST["adresse"];
    //     $id_civilite = $_POST["civilite"];
    //     $id_situation = $_POST["situation_familiale"];
    //     $query_etudiant = "INSERT INTO etudiant (nom_etudiant, prenoms_etudiant, naissance_etudiant, lieu_naissance_etudiant, num_piece_etudiant, email_etudiant, tel_etudiant, nationalite_etudiant, adresse_etudiant, id_civilite, id_ville, id_situation, id_responsable) VALUES (:nom, :prenom, :naissance, :lieu_naissance, :num_piece, :email, :tel, :nationalite, :adresse, :civilite, :ville, :situation, :responsable)";
    //     $stmt_etudiant = $pdo->prepare($query_etudiant);
    //     $stmt_etudiant->execute(
    //         [
    //             'nom' => $nom_etudiant,
    //             'prenom' => $prenom_etudiant,
    //             'naissance' => $naissance_etudiant,
    //             'lieu_naissance' => $lieu_naissance_etudiant,
    //             'num_piece' => $num_piece_etudiant,
    //             'email' => $email_etudiant,
    //             'tel' => $tel_etudiant,
    //             'nationalite' => $nationalite_etudiant,
    //             'adresse' => $adresse_etudiant,
    //             'civilite' => $id_civilite,
    //             'ville' => $id_ville,
    //             'situation' => $id_situation,
    //             'responsable' => $id_responsable
    //         ]
    //     );

    //     $id_etudiant = $pdo->lastInsertId();

    //     $derniere_ecole = $_POST["etablissement_precedent"];
    //     $annee_bac = $_POST["annee_bac"];
    //     $moyenne_bac = $_POST["moyenne"];
    //     $id_baccalaureat = $_POST["type_bac"];
    //     $id_mention = $_POST["mention"];
    //     $query_parcours_bac = "INSERT INTO parcours_baccalaureat (derniere_ecole_parcours_baccalaureat, annee_bac_parcours_baccalaureat, moyenne_bac_parcours_baccalaureat, id_baccalaureat, id_mention, id_etudiant) VALUES (:dernier_ets, :annee, :moyenne, :bac, :mention, :etudiant)";
    //     $stmt_parcours_bac = $pdo->prepare($query_parcours_bac);
    //     $stmt_parcours_bac->execute(
    //         [
    //             'dernier_ets' => $derniere_ecole,
    //             'annee' => $annee_bac,
    //             'moyenne' => $moyenne_bac,
    //             'bac' => $id_baccalaureat,
    //             'mention' => $id_mention,
    //             'etudiant' => $id_etudiant
    //         ]
    //     );

    //     $id_parcours_bac = $pdo->lastInsertId();

    //     $id_niveau = $_POST["niveau"];
    //     $id_filiere = $_POST["filiere"];
    //     $annee_academique = $_POST["annee_academique"];
    //     $options = $_POST["options"] ?? [];
    //     $logement = in_array('logement', $options) ? 1 : 0;
    //     $restauration = in_array('restauration', $options) ? 1 : 0;
    //     $transport = in_array('transport', $options) ? 1 : 0;
    //     $bourse = in_array('bourse', $options) ? 1 : 0;
    //     $query_parcours_campus = "INSERT INTO parcours_universitaire (residence_parcours_universitaire, restaurant_parcours_universitaire, transport_parcours_universitaire, demande_bourse_parcours_universitaire, annee_academique_parcours_universitaire, id_niveau_entree, id_filiere, id_etudiant) VALUES (:residence, :restaurant, :transport, :bourse, :annee, :niveau, :filiere, :etudiant)";
    //     $stmt_parcours_campus = $pdo->prepare($query_parcours_campus);
    //     $stmt_parcours_campus->execute(
    //         [
    //             'residence' => $logement,
    //             'restaurant' => $restauration,
    //             'transport' => $transport,
    //             'bourse' => $bourse,
    //             'annee' => $annee_academique,
    //             'niveau' => $id_niveau,
    //             'filiere' => $id_filiere,
    //             'etudiant' => $id_etudiant
    //         ]
    //     );

    //     $id_parcours_campus = $pdo->lastInsertId();



}



