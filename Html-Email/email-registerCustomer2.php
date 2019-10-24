<?php
     include("phpmailer/class.phpmailer.php");
    //  include 'output.php';
      

     if($_POST){

      // $email = $_POST['email'];

      $email= "alainmukamba@gmail.com";
  $account="alainmukamba@gmail.com";
  $password="magossas1991";
  
  $to=$email;
  $from_name="Traveland Application";
  $msg="Dear applicant, <br>

  Thank you for your interest in traveland <br>
You have been successfully registered in  traveland system  <br> 
  <br>
  <br>
  Regards <br>
 Traveland  "; // HTML message
  $subject="Application Status";
  /*End Config*/


  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->CharSet = 'UTF-8';
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth= true;
  $mail->Port = 465; // Or 587 //465
  $mail->Username= $account;
  $mail->Password= $password;
  $mail->SMTPSecure = 'ssl';
  // $mail->From = $from;
  $mail->FromName= $from_name;
  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body = $msg;
  $mail->addAddress($to);

    if(!$mail->send()){
      // $data[]="fail".$mail->ErrorInfo;
      $data[]="fail";
      print json_encode($data);

    }else{
       $data[]="success";
       print json_encode($data);
    }  
 
  };  
