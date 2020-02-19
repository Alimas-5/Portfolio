<?php

try
{
    //$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    $bdd = new PDO('mysql:host=localhost;dbname=id12626456_formulaire;charset=utf8', 'id12626456_alima', '123456');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>
