<?php

require_once 'dbconfig.php';

//// /////verify if the user has logged in ///////

// if (!$staff->is_loggedin()) {
//     $staff->redirect('admin_login.php');
// }

if (isset($_POST['btn-login'])) {
    $firstname = $_POST['txt_firstname'];
    $password = $_POST['txt_password'];

    if ($staff->login( $firstname , $password )) {
        $staff->redirect('admin_dashboard.php');
    } else {
        $error = 'Wrong Details !';
    }
}


?>