<?php

if (isset($_POST["submit"])) {
    $user = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $secondPwd = $_POST["pwdRepeat"];

    if ($pwd !== $secondPwd) {
        header("location: ../login.php?login=nopwdmatch");
        exit();
    } 
    if (empty($user) || empty($pwd) || empty($secondPwd)) {
        header("location: ../login.php?login=fieldempty");
        exit();
    }
    require_once 'database-handler.php';
    require_once 'helper-functions.php';
    
    loginUser($conn, $user, $pwd);    
} else {
    header("location: ../login.php");
    exit();
}