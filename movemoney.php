<?php

include "function.php";

if(isset($_POST["recipient"]) && isset($_POST["amount"])){

    $transferResponse = transfer($_POST["recipient"], $_POST["amount"]);

    if($transferResponse){
        header("Location: dashboard.php");
    }
    else{
        echo "Please fill all input forms";
    }
}
else{
    header("Location: dashboard.php");
}

?>