<?php
session_start();
require_once "config.php";
require_once "function.php";
require_once 'smarty/libs/Smarty.class.php';
$smarty = new Smarty;

$mysqli = new mysqli(_DB_HOST, _DB_ID, _DB_PW, _DB_NAME);
if ($mysqli->connect_error) {
    die('無法連上資料庫 (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");

$isAdmin = $isUser = false;
if (isset($_SESSION['user_sn'])) {
    $isUser = true;
    $smarty->assign('login_user', $_SESSION['user']);
    if (in_array($_SESSION['user']['user_id'], $admin_array)) {
        $isAdmin = true;
    }
}
$smarty->assign('isAdmin', $isAdmin);
$smarty->assign('isUser', $isUser);
