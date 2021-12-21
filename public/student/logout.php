<?php require_once("../../resources/config.php"); ?>
<?php
// session_start();
$logout_time = query("UPDATE student SET logout_time = now() WHERE matric = '{$_SESSION['matric']}'");
session_destroy();

header("Location: student_login.php");