<?php
function login($username, $password)
{
    if ($username == 'admin' && $password == 'secrat') {
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
