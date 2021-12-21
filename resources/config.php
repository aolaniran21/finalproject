<?php
ob_start();

session_start();
// session_destroy();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");
defined("TEMPLATE_FRONT_UNIT") ? null : define("TEMPLATE_FRONT_UNIT", __DIR__ . DS . "templates/front/unit");
defined("TEMPLATE_FRONT_STUDENT") ? null : define("TEMPLATE_FRONT_STUDENT", __DIR__ . DS . "templates/front/student");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");
defined("FILE_DIRECTORY") ? null : define("FILE_DIRECTORY", __DIR__ . DS . "files");



$db_host = "localhost";
$db_user = "root";
$db_pass = "password";
$db_name = "comm";

$db_conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if ($db_conn->connect_error) {
  die("Connection failed: " . $db_conn->connect_error);
}
// echo 'connected';



require_once("functions.php");