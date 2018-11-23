<?php
    if(isset($_COOKIE["loginId"]) && isset($_COOKIE["username"]))
    {
        setcookie("loginId", " ", time() - 1);
        setcookie("username", " ", time() - 1);
    }
    header("Location: index.html");
    exit();
?>