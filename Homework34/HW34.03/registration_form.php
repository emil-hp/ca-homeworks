<?php

include "select.php";
include "database.php";

$browsers = ["Firefox", "Chrome", "Internet Explorer", "Safari", "Opera"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class select - $browsers</title>
</head>
<body>
    <h2>User Registration - Browsers</h2>
    <?php if(!isset($_POST['submit'])):?>

    <form method="post" action="">
    <p>Name:<br/>
    <input type="text" name="name" size="60" /></p>
    <p>Username:<br/>
    <input type="text" name="username" size="60" /></p>
    <p>Email:<br/>
    <input type="text" name="email" size="60" /></p>
    <p>Browser:
    <?php
    $browser = new select;
    $browser->setName("browsers");
    $browser->setValue($browsers);
    $browser->makeSelect();
    ?>
    </p>
    <input type="submit" name="submit" value="Go" />
    </form>

    <?php elseif (isset($_POST['submit'])): ?>
    <?php
        if (!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['browsers'])) {
            $name = trim($_POST['name']);
            $username = trim($_POST['username']);
            $email = trim($_POST['email']);
            $browser =$_POST['browsers'];
            $created_at = date("Y-m-d H:m:s");

            $database = new database();
            $database->createUser(trim($_POST['name']), trim($_POST['username']), trim($_POST['email']), $_POST['browsers'], date("Y-m-d H:m:s"));

            echo "<p>Username: <b>".$username."</b></p>";
            echo "<p>Browser: <b>".$browser."</b></p>";
            echo "<p>Time: <b>".$created_at."</b></p>";

        }else {
            echo "<script> alert('All fields are required!')</script>";
        }

        ?>
        <?php endif; ?>



    </form>
</body>
</html>