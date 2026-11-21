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

