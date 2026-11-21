<?php
function check_login($username, $password){
    $users = include('simple_data.php'); ;
    foreach($users as $user){
        if ($user['user'] == $username && $user['password'] == $password){
            return $user;
        }
    }
    return false;
}
function is_login(){
    return isset($_SESSION['user']);
}
function get_login(){
    return $_SESSION['user'];
}
function user_logout(){
    if(is_login()){
        unset($_SESSION['user']);
    }
    return true;
}