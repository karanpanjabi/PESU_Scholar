<?php
    if(isset($_COOKIE["username"]) && isset($_COOKIE["loginId"]))
    {
        //read existing projects into an array
        require("dbinfo.php");
        $table = "accountinfo";
        $getprojs = "SELECT projectdata FROM $table WHERE username='{$_COOKIE["username"]}'";
        $projectdata = json_decode(mysqli_fetch_assoc(mysqli_query($db, $getprojs))["projectdata"]);
        
        if($projectdata == NULL)
        {
            $projectdata = array();
        }

        $newproject = new \stdClass();
        $newproject->title = $_REQUEST["title"];
        $newproject->desc = $_REQUEST["desc"];

        array_push($projectdata, $newproject);
        $toBeUpdated = addslashes(json_encode($projectdata)); //addslashes is very important else JSON.parse starts crying
        $updateQuery = "UPDATE $table SET projectdata='$toBeUpdated' WHERE username='{$_COOKIE["username"]}'";
        mysqli_query($db, $updateQuery);
    }

    header("Location: profile_page.php");
    exit();
?>
