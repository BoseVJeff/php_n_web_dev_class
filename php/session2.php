<?php declare(strict_types=1);
session_start();

if (!isset($_SESSION["user"])) {
    echo "No user is logged in";
} else {
    if (!isset($_SESSION["counter"])) {
        $_SESSION["counter"]=0;
    }
    $_SESSION["counter"]++;

    echo $_SESSION["user"]." has visited this page ".$_SESSION["counter"]." times!";
}

?>