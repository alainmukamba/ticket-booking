<?php
include_once 'dbconfig.php';
include_once 'Class.Staff.php';

$staff->logout(); 

header('Location: ../pages/admin_login.php');