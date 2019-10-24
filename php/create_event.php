<?php
require_once 'dbconfig.php';

include ("../Html-Email/email-registerCustomer2.php");

// if ($client->is_loggedin() != '') {
//     $client->redirect('client_signup.php');
// }

///////validating the inputs ////////

if (isset($_POST['register'])) {
    $firstName = trim($_POST['txt_firstName']);
    $firstName; 
     $lastName = trim($_POST['txt_lastName']);
    $telephone = trim($_POST['txt_phoneNumber']);
    $address = trim($_POST['txt_address']);
  $email = trim($_POST['txt_email']);
    echo   $password = trim($_POST['txt_password']);

    if (  $firstName == '') {
        $error[] = 'provide  your firstname';
    } elseif ($lastName == '') {
        $error[] = 'provide your lastname !';
    } elseif ( $telephone == '') {
        $error[] = 'provide  the  phone number!';
    } elseif ( $email  == '') {
        $error[] = 'provide  your email!';
    } elseif (  $address   == '') {
        $error[] = 'provide  your physical address';
    } elseif ( $password  == '') {
        $error[] = 'provide password !';
    } elseif (strlen( $password ) < 6) {
        $error[] = 'Password must be atleast 6 characters';
    } else {
        /////// insering the valid inputs///////////
        try {






            $stmt = $DB_con->prepare('SELECT * FROM tbl_client WHERE  email =:email');
            $stmt->execute(array(':email' => $email));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row['email'] == $email) {
                $error[] = 'sorry your email already exist';
            } else {
                if ($client->register( $firstName, $lastName, $telephone,$address ,$email,$password)) {
                    $client->redirect('../pages/admin_dashboard.php');
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}



$staff_id = $_SESSION['client_session']; 

$seat_number;

for ($x= 0; $x <=$seat_number; $x++){

}




?>