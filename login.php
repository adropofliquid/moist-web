<?php
include "function.php";

if(isset($_GET["logout"])){
    logout();
}

if(isset($_POST["username"]) && isset($_POST["password"])){

    $getJwt = login($_POST["username"],$_POST["password"]);

    if($getJwt){
//        echo $getJwt;
        logUser($getJwt);
        header("Location: dashboard.php");
    }
    else{
        echo "bad credentials";
    }
}
else{
    goHome();
}

?>