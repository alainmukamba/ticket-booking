<?php
include_once 'dbconfig.php';
if(!$staff->is_loggedin())
{
 $staff->redirect('admin_login.php');
}
$staff_id = $_SESSION['staff_session'];
$stmt = $DB_con->prepare('SELECT * FROM tbl_staff WHERE staff_id =:staff_id');
$stmt->execute(array(':staff_id' => $staff_id));
$staffRow = $stmt->fetch(PDO::FETCH_ASSOC);


?>