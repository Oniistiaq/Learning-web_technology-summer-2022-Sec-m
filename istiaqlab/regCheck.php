<?php
    session_start();

    $userId = $_POST['regId'];
    $password = $_POST['regPass'];
    $confirmPassword = $_POST['regConfirmPass'];
    $username = $_POST['regName'];
    $userType = $_POST['regType'];

    if ($userId == null || $password == null || $confirmPassword == null || $username == null || $userType == null) {
        echo "Invalid Input.";
    }elseif($password != $confirmPassword) {
        echo "Password did not match.";
    }else {
        $user = $userId."|".$password."|".$username."|".$userType."\r\n";
        $file = fopen('user.txt','a');
        fwrite($file, $user);
        header('location: login.html');
    }
?>