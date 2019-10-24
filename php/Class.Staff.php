<?php

//include_once'Dbconfig.php';

///////check if the user exist on the database ////////

class STAFF {
   
    private $db;

    function __construct($DB_con) {
        $this->db = $DB_con;
    }


    ////////////create register function/////////////////
   
    public function register($firstName, $lastName,$email,$password) {
        try {

         $saltedPass ="442288jjrahdtew".$password.'hgasfcxcxzzxz';

            $new_password = password_hash($password , PASSWORD_DEFAULT);

            $stmt = $this->db->prepare("INSERT INTO tbl_staff(firstName,lastName,email,password)
                                                       VALUES(:firstName,:lastName,:email,:password)");

            $stmt->bindparam(":firstName", $firstName);
            $stmt->bindparam(":lastName", $lastName);
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
            $stmt = $this->db->prepare("SELECT * FROM tbl_staff WHERE firstName = :firstName  LIMIT 1");
            $stmt->execute(array(':firstName' =>$firstName));
            $staffRow = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() > 0) {
                if (password_verify($pass, $staffRow['password'])) {

                    $_SESSION['staff_session'] = $staffRow['staff_id'];
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
        if (isset($_SESSION['staff_session'])) {

            return true;
        }
    }

    public function redirect($url) {
        header("Location: $url");
    }

    public function logout() {
        session_destroy();
        unset($_SESSION['staff_session']);
        return true;
    }

}
