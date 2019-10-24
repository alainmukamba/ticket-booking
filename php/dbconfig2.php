 <?php

/////database inputs///////////////

$DB_host = 'localhost';
$DB_user = 'root';
$DB_pass = '';
$DB_name = 'ticket_db';

//////connection creation///////////////
try {
    $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}", $DB_user, $DB_pass);
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}


include_once 'Class.Client.php';
include_once 'Class.Staff.php';
$client = new CLIENT($DB_con);
$staff = new  STAFF($DB_con);

