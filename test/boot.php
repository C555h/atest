<?php
//require_once '../controller/model.php';
function __autoload($class_name) {
    require_once '../controller/'.$class_name . '.php';
}

session_start();
//session_destroy();
//echo '<br>$_SESSION ===> ', print_r($_SESSION, TRUE);
echo "ZZZZZZZ";

if (!isset($_SESSION['ususario']))
    header('Location: ../login.php');
//    exit (require_once './login.php');

$url = $_SERVER['REQUEST_URI'];//REQUEST_URI
$id = substr( $url, strrpos( $url, '/' )+1 );
//echo '<br>$id ===> ', print_r($id, TRUE);
echo getcwd(), '<br>', file_exists('images/icons/css/font-awesome.css');

include substr( $url, strrpos( $url, '/' )+1 );