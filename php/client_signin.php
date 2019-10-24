<?php

require_once 'dbconfig.php';

//// /////verify if the user has logged in ///////

if ($client->is_loggedin() != '') {
    $client->redirect('admin_logout.php');
}

if (isset($_POST['btn-login'])) {
    $firstname = $_POST['txt_firstname'];
    $password = $_POST['txt_password'];

    if ($client->login( $firstname , $password )) {
        $client->redirect('client_dashboard.php');
    } else {
        $error = 'Wrong Details !';
    }
}


?>