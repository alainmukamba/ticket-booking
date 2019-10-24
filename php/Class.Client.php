<?php

//include_once'Dbconfig.php';

///////check if the user exist on the database ////////

class CLIENT {
   
    private $db;

    function __construct($DB_con) {
        $this->db = $DB_con;
    }


    ////////////create register function/////////////////
   
    public function register($firstName, $lastName,$phoneNumber,$address,$email,$password) {
        try {

         $saltedPass ="442288jjrahdtew".$password.'hgasfcxcxzzxz';

            $new_password = password_hash($password , PASSWORD_DEFAULT);

            $stmt = $this->db->prepare("INSERT INTO tbl_client(firstName,lastName,phonenumber,address,email,password)
                                                       VALUES(:firstName,:lastName,:phoneNumber,:address,:email,:password)");

            $stmt->bindparam(":firstName", $firstName);
            $stmt->bindparam(":lastName", $lastName);
            $stmt->bindparam(":phoneNumber",$phoneNumber);
            $stmt->bindparam(":address",$address);
            $stmt->bindparam(":email",$email);
            $stmt->bindparam(":password", $new_password);
            $stmt->execute();


            return $stmt;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /////selecting everything from the current client ///

    public function login($firstName,$pass) {
        try {
            $stmt = $this->db->prepare("SELECT * FROM tbl_client WHERE firstName = :firstName  LIMIT 1");
            $stmt->execute(array(':firstName' =>$firstName));
            $clientRow = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() > 0) {
                if (password_verify($pass, $clientRow['password'])) {

                    $_SESSION['client_session'] = $clientRow['client_id'];
                    return true;
                } else {
                    return false;
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function is_loggedin() {
        if (isset($_SESSION['client_session'])) {

            return true;
        }
    }

    public function redirect($url) {
        header("Location: $url");
    }

    public function logout() {
        session_destroy();
        unset($_SESSION['client_session']);
        return true;
    }

}
