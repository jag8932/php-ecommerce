<?php
// Checks for valid submission
if (isset($_POST['submit'])) {
    include_once './database-handler.php';
    include_once './helper-functions.php';

    $first = mysqli_real_escape_string($conn, $_POST['first']) ;
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    
    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
        header("Location: ../signup.php?signup=empty&first=$first&last=$last&uid=$uid&email=$email");
    }
    else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../signup.php?signup=invalidemail&first=$first&last=$last&uid=$uid&email=$email");
            exit();
        }
        if (checkUserExists($conn, $uid, $email) !== false) {
            header("location: ../signup.php?signup=usernametaken");
            exit();
        }
        /*
        $secure_pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd)
        VALUES ('$first', '$last', '$email', '$uid', '$secure_pwd');";
        mysqli_query($conn, $sql);
        header("Location: ../index.php?signup=success"); */
        createUser($conn, $first, $last,$uid, $email, $pwd);
        
    }

} else {
    header("Location: ../index.php?signup=error");
}


