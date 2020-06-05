<?php
if(isset($_GET["id"])) {
    $getUsers = mysqli_connect("localhost", "homestead", "secret", "crud_app");
    $delete = "DELETE FROM users WHERE id = ".$_GET["id"];

    mysqli_query($getUsers, $delete);
    mysqli_close($getUsers);
    header("Location: index.php");
}