<?php
session_start();
logoff();
include('views/base.php');

function logoff()
{
    if(isset($_GET['action']) && $_GET['action'] == 'logoff') {
        session_destroy();
        header('Location: http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
    }
}