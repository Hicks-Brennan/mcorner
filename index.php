<?php

//lindy's corner controller

//create a session
session_start();

$action = filter_input(INPUT_POST, 'action');
if(!$action){
    $action = filter_input(INPUT_GET, 'action');
}

   // Get the database connection file
   require_once 'library/connections.php';
   // Get the acme model for use as needed
//    require_once 'model/lindy-model.php';
   // Get the functions library
   require_once 'library/functions.php';

    if (isset($_SESSION['loggedin'])) {
    $clientFirstname = $_SESSION['clientData']['clientFirstname'];
    $clientLastname = $_SESSION['clientData']['clientLastname'];
    $clientEmail = $_SESSION['clientData']['clientEmail'];
    $clientLevel = $_SESSION['clientData']['clientLevel'];
    }

switch($action) {
    case 'aboutMe':
        include 'view/aboutMe.php';
    break;

    case 'comingSoon':
        include 'view/comingSoon.php';
    break;
    
    default:
        include 'view/home.php';

}


?>