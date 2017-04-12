<?php
function account_exists() : array {
    return [
        'id' => 2,
        'password' => 'azerty123'
    ];
}

function account_informations() : array {
    return [];
}

function mail_free() : bool {
    return FALSE;
}

function mail_html( string $subject, string $message) {
    $headers = 'From: Artskory <contact@artskory.fr>' . "\r\n" ;
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8';
    
    mail( $_POST['email'], $subject, $message, $headers );
}

function password_ok() : bool {
    return TRUE;
}

function password_save( string $password = '' ) {
    $newpassword = $_POST['newpassword'] ?? $password;
    
    if ( isset( $_POST['email'] ) ) {
        // gestion pour l'oublie de mot de passse
    }
    else {
        // gestion pour changement de mot de passe
    }
}