<?php
function login($username, $password)
{
    if ($username == LAZY_USER && $password == LAZY_PASSWORD) {
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
        return false;
    }
}
function logout()
{
    session_start();
    session_destroy();
    return true;
    header('location:' . $_SERVER['DOCUMENT_ROOT']);
}
