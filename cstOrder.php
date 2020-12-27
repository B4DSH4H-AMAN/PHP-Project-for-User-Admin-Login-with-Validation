<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/table.css">
    <title>Document</title>
</head>
<body>
    <div class="logo">
    </div>
    <div class="box bg-img">
      <div class="content">
        <h2>Customer<span> Order</span></h2>
        <div class="forms">
        <?php
        echo "<table style = 'width:99%; border:1px white solid;'>";
        echo "<tr><th>ID</th><th>Email</th><th>Name</th><th>Phone Number</th><th>Address</th><th>Order ID</th></tr>";
        class TableRows extends RecursiveIteratorIterator{
            function __construct($values){
                parent::__construct($values, self::LEAVES_ONLY);
            }
            function current() {
                return "<td>".parent::current(). "</td>";
            }
            function beginChildren() {
                echo "<tr>";
                }
                function endChildren() {
                    echo "</tr>" . "\n";
                }
            }
            $server = "localhost";
            $username = "root";
            $password = "";
            $dbname = "multiuser";
            try {
                $ConnectionDB = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
                $ConnectionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $Statment = $ConnectionDB->prepare("SELECT ID,email,Name,PhoneNumber,Address,OrderID FROM `ordercst`");
                $Statment->execute();
                $result = $Statment->setFetchMode(PDO::FETCH_ASSOC);
                foreach(new TableRows(new RecursiveArrayIterator($Statment->fetchAll())) as $k=>$variable) {
                    echo $variable;
                }
            } catch (PDOException $th) {
                echo "Connection Failed!: ".$th->getMessage();
            }
            $ConnectionDB =  null;
            echo "</table></center><p>";
            ?>
            <button class="login-btn" onclick="document.location='welcomeAdmin.php'">Back</button>
      </div>
    </div>
</body>
</html>