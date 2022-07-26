<?php session_start();

include_once("dbhelper.php");

// This file will allow us to login or register a new account.

    include("wedboiler.php");
    echo "<body>";
    include("wedlabheader.php");


    if ($_SERVER["REQUEST_METHOD"] != "POST"
        || (empty($_POST["username"])
        && empty($_POST["newusername"]))){

    // we know it is not post, so new user.

    connectdb();

    echo "CONNECTED!";

    closedb();
  
?>

<form action="register.php" method="post" id="loginform">

    <p class="bodytext">
        username: <input type="text" 
            name="username" id="username">
    </p>

    <p class="bodytext">
        password: <input type="password" 
            name="userpassword" id="userpassword">
    </p>

    <p class="bodytext">
        <button type="submit">LOGIN</button>
    </p>

</form>

<hr>

<form action="register.php" method="post" id="registerform">

    <p class="bodytext">
        username: <input type="text" 
            name="newusername" id="newusername">
    </p>

    <p class="bodytext">
        password: <input type="password" 
            name="newuserpassword" id="newuserpassword">
    </p>

    <p class="bodytext">
        <button type="submit">LOGIN</button>
    </p>


</form>

<?php

    } else {




    }

?>



