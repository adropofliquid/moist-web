<?php

include "function.php";

if(isset($_POST["username"])
    && isset($_POST["password"])
    && isset($_POST["fname"])
    && isset($_POST["lname"]) ){

    $signUpResponse = signup(
        $_POST["username"],
        $_POST["password"],
        $_POST["fname"],
        $_POST["lname"]);

    if($signUpResponse){
        header("Location: dashboard.php");
    }
    else{
        echo "Please fill all input forms";
    }
}
else{
    goHome();
}

?>