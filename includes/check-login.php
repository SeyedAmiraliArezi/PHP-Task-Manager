<?php
$error = '';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (strlen($username) < 5 || strlen($password) < 8) {
        $error = " نام کاربری و رمز عبور را به درستی وارد کنید";
    } else{
        $user = check_login($username, $password);
        if ( $user ) {
            $_SESSION['user'] = $user;
        }else
            $error = "نام کاربری یا کلمه عبور اشتباه است ";
    }
}