<?php
    require("dbinfo.php");
    $table = "accountinfo";
    $passquery = <<< Q
    SELECT password FROM $table WHERE username='{$_REQUEST["username"]}'
Q;
    $passqres = mysqli_query($db, $passquery);
    $pass = mysqli_fetch_assoc($passqres)["password"];

    if($_REQUEST["password"] == $pass) //TODO: replace this with sql queries
    {
        //set cookie to logged in and redirect
        $loginid = md5(time().$_REQUEST["username"]);
        setcookie("loginId", $loginid, time() + 60*60); //logged in for an hour
        setcookie("username", $_REQUEST["username"], time() + 60*60);
        setcookie("profgetusername", $_REQUEST["username"]);

        $loginUpdateQuery = <<< Q
        UPDATE $table SET loginid='$loginid' WHERE username='{$_REQUEST["username"]}'
Q;
        mysqli_query($db, $loginUpdateQuery);


        //redirecting to profile on login
        header("Location: profile_page.php");
        exit();
    }
    else
    {
        echo "Could not log you on <br>"; //TODO: replace this with error logging in page
    }
?>