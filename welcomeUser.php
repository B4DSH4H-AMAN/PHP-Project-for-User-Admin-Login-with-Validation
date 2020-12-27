<?php
include("Uservalidation.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Welcome - <?php echo $login_session; ?></title>
</head>
<body>
    <div class="logo">
    </div>
    <div class="box bg-img">
      <div class="content">
        <h2>Welcome<span> <?php echo $login_session ?></span></h2>
        <div class="forms">
            <div><p>
                Hope you are having good times.
            </p></div>
            <button class="login-btn" onclick="document.location='giveOrder.php'">Give Orders</button>
            <p class="f-pass">
                <a href="logout.php">Logout</a>
            </p>
      </div>
    </div>
</body>
</html>