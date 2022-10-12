<?php
// $_SESSION['user_name']が空だった場合、ログインページにリダイレクト
function check_user_name(){
    session_start();

    if(empty($_SESSION['user_name'])) {
        header("Location: login.php");
        exit();
    }
}