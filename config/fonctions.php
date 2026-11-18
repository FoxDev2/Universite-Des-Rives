<?php
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// function is_not_complete($_post) {
//     foreach ($_post as $value) {
//         if (empty($value)) {
//             return true;
//         }
//     }
// }

function validate_email($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Adresse e-mail invalide.";
        header('Location: ../inscription.php');
        exit;
    }

}

function validate_phone($telephone) {
    if (strlen($telephone) > 8){
        $_SESSION['error'] = "8 caractères maximum pour numéro de téléphone.";
        header('Location: ../inscription.php');
        exit;
    }
}



?>