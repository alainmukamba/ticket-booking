<?php
require_once 'dbconfig.php';

	
include ("../Html-Email/email_UpdateStatus.php");
	if($_POST)
	{



		$status= $_POST['status'];
		
		 $ticket_id = $_POST["ticket_id"];
		
				
		// $stmt = $DB_con->prepare("UPDATE user SET allocation='$company' WHERE userid='$id'");
		
		// $stmt->execute();

		$stmt =  $DB_con->prepare("UPDATE tbl_ticket SET status=:en WHERE ticket_id=:id");
		$stmt->bindParam(":en", $status);
		$stmt->bindParam(":id",  $ticket_id);
		$stmt->execute(); 
		header("Location: ../pages/admin_dashboard.php");


	}
?>