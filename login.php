<?php
    $adminpass = "21232f297a57a5a743894a0e4a801fc3";
    if($_REQUEST["username"] == "admin" && $_REQUEST["password"] == $adminpass) //TODO: replace this with sql queries
    {
        //set cookie to logged in and redirect
        //TODO: set cookie to logged in for the user, and update last login in db as well?

        //redirecting to profile on login
        header("Location: profile_page.html");
        exit();
    }
    else
    {
        echo "Could not log you on <br>"; //TODO: replace this with error logging in page
    }
?>