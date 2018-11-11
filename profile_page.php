<!DOCTYPE html>
<?php
    require("dbinfo.php");

    $table = "accountinfo";
    $userdataquery = <<< Q
    SELECT * FROM $table WHERE username='{$_COOKIE["profgetusername"]}'
Q;
    $userdata = mysqli_fetch_assoc(mysqli_query($db, $userdataquery));
    
    unset($userdata["username"]);
    unset($userdata["password"]);
    unset($userdata["loginid"]);
    
    $jsonRep = json_encode($userdata);

    echo <<< S
    <script>
    var accountData = $jsonRep;
    </script>
S;
?>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PESU_Scholar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="profile_page_css.css" />
    <!-- <script src="main.js"></script> -->
</head>

<body>

    <div id="navbar">
        <h1>PESU_Scholar</h1>
        <nav>
            Home | About | Logout
        </nav>
    </div>

    <hr>

    <div id="div_profile">
        <section>
            <div id="div_profpic">
                <img id="img_profile" style="width: 128px;" src="profile-image-placeholder.png">
            </div>
            <div id="div_accinfo">
                <h3 class="white_text inlineob" id="prof_name">ABC</h3>
                <h6 class="white_text" id="acc_type">Student</h6>
            </div>
        </section>
        <hr style="margin-right: 20px;">
        <section>
            <h2 class="white_text">Research/Projects</h2>
            <div id="res_proj">
                <a href="#">
                    <div id="res_proj_new">
                        <p>+</p>
                    </div>
                </a>
            </div>
        </section>
    </div>

    <div id="contact_info">
        <h2 class="white_text">Contact info</h2>
        <hr>
        <p id="contact_info_p" class="white_text">
            E-mail: <span id="prof_email">abc@xyz.com</span> <br>
            Phone: <span id="prof_phone">1800-XYZ-ABCD</span>
        </p>
    </div>

    <template id="proj_data_template">
        <div class="res_proj_el">
            <h3>Project title</h5>
            <p>Project description</p>
        </div>
        <hr>
    </template>

    <script src="profile_page.js">

    </script>
</body>

</html>