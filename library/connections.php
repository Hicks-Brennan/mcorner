<?php

/*
*Database connections
*/

function lindyConnect() {
$server = "localhost";
$database = "lindy_corner";
$user = "iClient";
$password = "rzusSSzc0M0q3n2t";
$dsn = 'mysql:host=' . $server . ';dbname=' . $database;
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $acmeLink = new PDO($dsn, $user, $password, $options);
    return $acmeLink;
    } catch (PDOException $exc){
        header('location: /mcorner/view/500.php');
        exit;
    }
}
lindyConnect();
?>