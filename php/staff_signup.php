<?php
require_once 'dbconfig.php';

// if (!$staff->is_loggedin() != '') {
//     $staff->redirect('admin_dashboard.php');
// }

///////validating the inputs ////////


if (isset($_POST['register'])) {
    $firstName = trim($_POST['txt_firstName']);
    echo  $firstName; 
    echo  $lastName = trim($_POST['txt_lastName']);

echo  $email = trim($_POST['txt_email']);
    echo   $password = trim($_POST['txt_password']);

    if (  $firstName == '') {
        $error[] = 'provide  your firstname';
    } elseif ($lastName == '') {
        $error[] = 'provide your lastname !';
    } elseif ( $email  == '') {
        $error[] = 'provide  your email!';
    } elseif ( $password  == '') {
        $error[] = 'provide password !';
    } elseif (strlen( $password ) < 6) {
        $error[] = 'Password must be atleast 6 characters';
    } else {
        /////// insering the valid inputs///////////
        try {
            $stmt = $DB_con->prepare('SELECT * FROM tbl_staff WHERE  email =:email');
            $stmt->execute(array(':email' => $email));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row['email'] == $email) {
                $error[] = 'sorry your email already exist';
            } else {
                if ($staff->register( $firstName, $lastName,$email,$password)) {
                    $staff->redirect('../pages/admin_dashboard.php');
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}


?>