<?php
function logout(){
    if(session_status() == PHP_SESSION_NONE) {
    session_start();
    }
    session_unset($_SESSION["uid"]);
    session_unset();
    session_destroy();
    return true;
}