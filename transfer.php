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
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="#">Transfer</a></li>
            <li><a href="login.php?logout=1">Logout</a></li>
        </ul>
    </div>

    <div class="dash-main">

        <div class="card transactions-card">
            <div >Transfer</div><br><br>
            <div>
                <form method="post" action="movemoney.php">
                    <div class="transfer-input">
                        <label>Account User</label><br>
                        <input type="text" name="recipient">
                    </div>

                    <div class="transfer-input">
                        <label> Amount</label><br>
                        <input type="text" name="amount">
                    </div>


                    <br>
                    <button style="width: 15%;">Transfer</button>
                </form>
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
