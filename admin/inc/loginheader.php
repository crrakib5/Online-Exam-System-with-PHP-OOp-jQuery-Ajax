<?php
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: pre-check=0, post-check=0, max-age=0");
header("Pragma: no-cache");
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
include_once("../lib/Session.php");
Session::checkAdminLogin();
require_once("../config/config.php");
require_once("../lib/Database.php");
require_once("../helpers/Format.php");
?>
<!doctype html>
<html>

<head>
    <title>Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Cache-Control" content="no-cache">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="phpcoding">
        <section class="headeroption"></section>
        <section class="maincontent">