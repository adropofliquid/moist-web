<?php

//eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJncm91bmQiLCJpc3MiOiJhZHJvcG9mbGlxdWlkLmNvbSIsImV4cCI6MTYzNDc1MjM2MywiaWF0IjoxNjM0NzE2MzYzfQ.eZTNB1H2CpA63xBgDC0UsZlWvnOR6j0XyY6z4QTcIAA

include "global.php";
include "apicalls.php";

function signup($user, $pass, $fname, $lname){

    $data = json_encode(array(
        'username' => $user,
        'password' => $pass,
        'fname' => $fname,
        'lname' => $lname
    ));

    $signupResponse =  CallAPI("signup", "POST",false,$data);

    if(isset($signupResponse))
        return $signupResponse;
    else
        return false;
}

function logout(){
    session_unset();
    session_destroy();
}

function login($user, $pass){

    $data = json_encode(array(
        'username' => $user,
        'password' => $pass
    ));

    $loginResponse =  CallAPI("login", "POST",false,$data);

    if(isset($loginResponse))
        return $loginResponse->jwt;
    else
        return false;
}

function logUser($jwt){
    $_SESSION["jwt"] = $jwt;
}

function isLoggedIn(){
    return isset($_SESSION["jwt"]);
}

function getJwtFromSession(){
    return $_SESSION["jwt"];
}

function goHome(){
    header("Location: index.html");
}

function getBalance(){
    //if(isLoggedIn())
    $account = CallAPI("account","GET",getJwtFromSession());

    if(isset($account))
        return $account->balance;
    else
        return 0;
}

function transfer($recipient, $amount){

    $data = json_encode(array(
        'recipient' => $recipient,
        'amount' => $amount,
    ));

    $transferResponse =  CallAPI("transfer", "POST",getJwtFromSession(),$data);

    if(isset($transferResponse))
        return $transferResponse;
    else
        return false;
}

?>