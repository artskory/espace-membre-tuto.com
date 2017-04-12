<?php
try {
    $bdd = new PDO( 'mysql:host=localhost;dbname=tuto', 'root', 'root' );
} catch ( PDOException $e ) {
    die( 'Erreur : ' . $e->getMessage() );
}

