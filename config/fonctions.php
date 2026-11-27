<?php
function sanitize_input($data)
{
    $required_fields = [
        'civilite' => 'civilite',
        'nom' => 'nom',
        'prenom' => 'prenom',
        'lieu_naissance' => 'lieu_naissance',
        'nationalite' => 'nationalite',
        'situation_familiale' => 'situation_familiale',
        'piece_identite' => 'piece_identite',
        'email' => 'email',
        'telephone' => 'telephone',
        'adresse' => 'adresse',
        'code_postal' => 'code_postal',
        'ville' => 'ville',
        'pays' => 'pays',
        'type_bac' => 'type_bac',
        'annee_bac' => 'annee_bac',
        'etablissement_precedent' => 'etablissement_precedent',
        'moyenne' => 'moyenne',
        'mention' => 'mention',
        'faculte' => 'faculte',
        'filiere' => 'filiere',
        'niveau' => 'niveau',
        'annee_academique' => 'annee_academique'
    ];

    foreach ($required_fields as $field) {
        if (isset($data[$field])) {
            $data[$field] = trim($data[$field]);
            $data[$field] = stripslashes($data[$field]);
            $data[$field] = htmlspecialchars($data[$field]);
        }
    }

    return $data;
}


function validate_data($data)
{
    $errors = [];
    $required_fields = [
        'civilite' => 'Civilité',
        'nom' => 'Nom',
        'prenom' => 'Prénom',
        'date_naissance' => 'Date de naissance',
        'lieu_naissance' => 'Lieu de naissance',
        'nationalite' => 'Nationalité',
        'situation_familiale' => 'Situation familiale',
        'piece_identite' => 'Numéro de pièce d’identité',
        'email' => 'Adresse e-mail',
        'telephone' => 'Numéro de téléphone',
        'adresse' => 'Adresse',
        'code_postal' => 'Code postal',
        'ville' => 'Ville',
        'pays' => 'Pays',
        'type_bac' => 'Type de baccalauréat',
        'annee_bac' => 'Année d\'obtention du baccalauréat',
        'etablissement_precedent' => 'Établissement précédent',
        'moyenne' => 'Moyenne',
        'mention' => 'Mention',
        'faculte' => 'Faculté',
        'filiere' => 'Filière',
        'niveau' => 'Niveau',
        'annee_academique' => 'Année académique'
    ];

    foreach ($required_fields as $field => $label) {
        if (empty($data[$field])) {
            $errors[$field] = "$label est requis(e).";
        }
    }

    if (!empty($data['email']) && !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Adresse e-mail invalide.";
    }
    if (!empty($data['telephone']) && strlen($data['telephone']) > 8) {
        $errors['telephone'] = "8 caractères maximum pour numéro de téléphone.";
    }

    return $errors;
}


function validate_files($files)
{
    $files_errors = [];

    $required_fields = [
        'photo' => 'Photo d\'identité',
        'releve_bac' => 'Relevé du Bac',
        'piece_scan' => 'Pièce d\'identité',
        'acte_naissance' => 'Acte de naissance'
    ];

    $max_size = 2 * 1024 * 1024;
    $allowed_extensions = [
        'pdf',
        'png',
        'jpg',
        'jpeg'
    ];

    $pdf_only = [
        'releve_bac',
        'piece_scan'
    ];

    $pdf_or_picture = [
        'photo',
        'acte_naissance'
    ];

    foreach ($required_fields as $field => $label) {
        // Vérifier d'abord si le fichier est défini
        if (!isset($files[$field]) || !is_array($files[$field])) {
            $files_errors[$field] = "$label est requis(e).";
            continue;
        }

        $file = $files[$field];
        $upload_error = $file['error'] ?? UPLOAD_ERR_NO_FILE;
        // Insister sur l'absence de fichier
        if ($upload_error === UPLOAD_ERR_NO_FILE) {
            $files_errors[$field] = "$label est requis(e).";
            continue;
        }
        // S'il ne s'agit pas d'un champ vide, alors échec
        if ($upload_error !== UPLOAD_ERR_OK) {
            $files_errors[$field] = "Le téléversement de $label a échoué.";
            continue;
        }
        // Vérifier la taille des fichiers
        if (($file['size'] ?? 0) > $max_size) {
            $files_errors[$field] = "Taille de $label trop élevée (2Mo maximum).";
            continue;
        }
        // Seulement si le chargement est réussi, vérifier l'extension
        $ext = strtolower(pathinfo($file['name'] ?? '', PATHINFO_EXTENSION));
        if (in_array($field, $pdf_only, true) && $ext !== 'pdf') {
            $files_errors[$field] = "Format de fichier incorrect, veuillez charger un PDF.";
            continue;
        }

        if (in_array($field, $pdf_or_picture, true) && !in_array($ext, $allowed_extensions, true)) {
            $files_errors[$field] = "Format de fichier incorrect.";
        }
    }

    return $files_errors;
}
