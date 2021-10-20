<?php
    include "function.php";

    if (!isLoggedIn())
        goHome();
?>
<html>
<head>
    <meta charset="utf-8">

    <title>Moist - Dashboard</title>
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    <link href="resource/moist.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="resource/favicon.ico">
</head>

<body>

<div class="dashboard">

    <div class="dash-sidebar">
        <div class="logo">
            <img src="resource/logo.png" alt="nuthin">
        </div>

        <ul class="dash-sidebar-list">
            <li><a href="#">Dashboard</a></li>
            <li><a href="transfer.php">Transfer</a></li>
            <li><a href="login.php?logout=1">Logout</a></li>
        </ul>
    </div>

    <div class="dash-main">
        <div class="card balance-card">
            <div style="color: #e8e8e8;">Balance</div>
            <div>
                <h3>$<?=number_format(getBalance())?></h3>
            </div>
        </div>

        <div class="card transactions-card">
            <div>Transactions</div>
            <div>
                <ul class="transactions-list">

                    <li>
                        <div class="transaction-detail">
                            <b>Netflix</b>
                            <span>27 March 2020, at 04:30 AM</span>
                        </div>
                        <div class="transaction-amount">
                            <span>+$5,300</span>
                        </div>
                    </li>
                    <li>
                        <div class="transaction-detail">
                            <b>Apple</b>
                            <span>26 March 2020, at 13:45 PM</span>
                        </div>
                        <div class="transaction-amount">
                            <span>-$2,300</span>
                        </div>
                    </li>
                    <li>
                        <div class="transaction-detail">
                            <b>Strip Club</b>
                            <span>27 June 2021, at 04:30 AM</span>
                        </div>
                        <div class="transaction-amount">
                            <span>-$20,300</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">
    function showLogin() {
        showModal();
        document.getElementById("login-form").style.display="block";
        document.getElementById("signup-form").style.display="none";
    }
    function showRegister() {
        showModal();
        document.getElementById("login-form").style.display="none";
        document.getElementById("signup-form").style.display="block";
    }
    function showModal() {
        document.getElementById("login-pop").style.display="block";
        document.getElementById("mick").style.display="none";
    }
    function hideModal() {
        document.getElementById("login-pop").style.display="none";
        document.getElementById("mick").style.display="block";
    }
</script>
</body>
</html>
