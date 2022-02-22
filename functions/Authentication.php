<?php
function login($username, $password)
{
    if(isset($_SESSION['login']) && $_SESSION['login'] = true){
        return true;
    }
    if ($username == USERNAME && $password == PASSWORD ) {
        session_start();
        $_SESSION['login'] = true;
        return true;
    } else {
        return false;
    }
}
function auth()
{
    session_start();
    if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
        return true;
    } else {
        logout();
    }
}
function logout()
{
    session_start();
    session_destroy();
    header('location:' . $_SERVER['DOCUMENT_ROOT']);
}
