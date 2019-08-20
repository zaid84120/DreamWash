<?php

session_start();
unset($_SESSION['employee_type']);
unset($_SESSION['employee_id']);
session_destroy();
header("location:employees_logins.php");
?>
