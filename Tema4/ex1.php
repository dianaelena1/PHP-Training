<?php

// Faceti script, care sa defineasca o sesiunea cu durata de 1 minut,
// si dispara.

// Pastrati 5 useri intr-o sesiune , si cand expira sesiune stergeti toti useri, dupa 5 minute

session_start();
$_SESSION['start_time'] = time();

if (isset($_SESSION['start_time']) && time() - $_SESSION['start_time'] >= 60) {

    session_unset(); 
}


if (!isset($_SESSION['users'])) { 
    $_SESSION['users'] = [];
}

$users = ['User1', 'User2', 'User3', 'User4', 'User5'];

//check number of users present in a session
foreach ($users as $user) {
    if (count($_SESSION['users']) <= 5) {
        echo("Add more users!");
        $_SESSION['users'][] = $user;
        
    } else {

        echo("No need to add more users!");
    }
}

if (isset($_SESSION['start_time']) && time() - $_SESSION['start_time'] >= 300) {
    unset($_SESSION['users']); //delete all users
    echo('Successfully deleted all data from session!');
}

?>