<?php

$error =[];


if (!array_key_exists('nom', $_POST) || $_POST['nom'] == '' ){
    $error['nom'] = "Vous n'avez pas renseingé votre nom";    
}
if (!array_key_exists('prénom', $_POST) ||  $_POST['prénom'] == '' ){
    $error['prénom'] = "Vous n'avez pas renseingé votre prénom";    
}


if (!array_key_exists('Genre', $_POST) || $_POST['Genre'] == '' ){
    $error['Genre'] = "Vous n'avez pas renseingé votre Genre";    
}

if (!array_key_exists('trip-start', $_POST) || $_POST['trip-start'] == '' ){
    $error['trip-start'] = "Vous n'avez pas renseingé votre date de naissance";    
}


if (!array_key_exists('CP', $_POST) || $_POST['CP'] == '' ){
    $error['CP'] = "Vous n'avez pas renseingé votre CP";    
}
if (!array_key_exists('adresse', $_POST) || $_POST['adresse'] == '' ){
    $error['adress'] = "Vous n'avez pas renseingé votre adresse";    
}
if (!array_key_exists('ville', $_POST) || $_POST['ville'] == '' ){
    $error['ville'] = "Vous n'avez pas renseingé votre ville";    
}
if (!array_key_exists('email', $_POST) || $_POST['email'] == '' || filter_var('email', FILTER_VALIDATE_EMAIL)){
    $error['email'] = "Vous n'avez pas renseingé votre email";    
}

if (!array_key_exists('sélection', $_POST) || $_POST['sélection'] == '' ){
    $error['sélection'] = "Vous n'avez pas renseingé votre sélection";    
}

if (!array_key_exists('commentaire', $_POST) || $_POST['commentaire'] == '' ){
    $error['commentaire'] = "Vous n'avez pas renseingé votre message";    
}

session_start();

if (!empty($error)){
  
    $_SESSION['error'] = $error;
    $_SESSION['inputs'] = $_POST;
    header('Location: http://localhost/PHP%20-%20MySQL/PHP/Exo%20php/Formulaire/Exo1%20Fromulaire/Test%205/Contact_4_T5.php');
}else{
    $_SESSION['success'] = 1;
    header('Location: http://localhost/PHP%20-%20MySQL/PHP/Exo%20php/Formulaire/Exo1%20Fromulaire/Test%205/Contact_4_T5.php');
}



