<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Place Order</title>
</head>
<body>
    <div class="logo">
    </div>
    <div class="box bg-img">
      <div class="content">
        <h2>PLACE<span> ORDER</span></h2>
        <div class="forms">
            <div><p>
                Hope you are having good times.
            </p>
<form action="takeOrder.php" method="POST">
        </div>
            <div class="user-input">
            <input type="text" class="login-input" placeholder="Email Address" id="email" name="email" required>
            <i class="fas fa-user"></i>
        </div>
        <div class="user-input">
            <input type="text" class="login-input" placeholder="Name" id="name" name="Name" required>
            <i class="fas fa-user"></i>
        </div>
        <div class="user-input">
            <input type="text" class="login-input" placeholder="Phone Number" id="Phone Number" name="PhoneNumber" required>
            <i class="fas fa-user"></i>
        </div>
        <div class="user-input">
            <input type="text" class="login-input" placeholder="Address" id="Address" name="Address" required>
            <i class="fas fa-user"></i>
        </div>
        <div class="user-input">
            <input type="text" class="login-input" placeholder="OrderID" id="OrderID" name="OrderID" required>
            <i class="fas fa-user"></i>
        </div>
        <div class="user-input">
            <input type="text" class="login-input" placeholder="cc" id="cc" name="cc" required>
            <i class="fas fa-user"></i>
        </div>
            <button class="login-btn" >Buy</button>
</form>
            <p class="f-pass">
                <a href="logout.php">Logout</a>
            </p>
      </div>
    </div>
</body>
</html>