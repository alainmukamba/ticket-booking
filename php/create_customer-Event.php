<?php
require_once 'dbconfig.php';



if($staff->is_loggedin())
{
    // $staff->redirect('sign_in.php');
   }

///////validating the inputs ////////

if (isset($_POST['create'])) {
    $startDate= $_POST['txt_startDate'];
    $endDate =$_POST['txt_endDate'];
     
     $event_desc= $_POST['txt_Eventdesc'];
     $seatNumber= $_POST['txt_seatNumber'];
     $event_desc= $_POST['txt_Eventdesc'];
     $seatPrice= $_POST['txt_seatPrice'];
     $staff_id = $_SESSION['staff_session'];
     $time_cust= $_POST['txt_time'] ; 
     $defaultStatus = 'newly logged'; 
    
    $sql= "INSERT INTO `tbl_event` ( `description`, `time`, `starting_date`, `end_date`, `staff_id`) VALUES ('$event_desc','$time_cust','$startDate','$endDate','$staff_id')"; 
    $stmt = $DB_con->prepare($sql);
    $stmt->execute();
    $stmt2 = $DB_con ->prepare("SELECT * FROM tbl_event WHERE description = '$event_desc'");
    $stmt2->execute();
    while($row1=$stmt2->fetch(PDO::FETCH_ASSOC)){

        $event_id = $row1['event_id']; 
        for ($i=1; $i <=$seatNumber ; $i++) { 

    $sql1 ="INSERT INTO `tbl_ticket`( `amount`, `status`,`event_id`) VALUES ('$seatPrice','$defaultStatus', '$event_id')";    
    $stmt1 = $DB_con->prepare($sql1);
    $stmt1->execute();
        }
    


 
    }
}

header("Location: ../pages/admin_dashboard.php");
?>