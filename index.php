<?php
// Little Coding PHP //
$connection = mysqli_connect('localhost', 'mysql_user', 'mysql_password');

if (!$connection) {
    die('Could not connect: ' . mysqli_error());
}

if (strtolower(isset($_GET['action'])) === "login") {
    $res = mysqli_fetch_all(mysqli_query($connection, 'INSERT into `users` (`lastname`,`firstname`) VALUES (`lastname`, `firstname`, `password`, `timestamp`)'));
    in_array($_GET["email"], $res);
    if ($res["email"] == " ") {
        mysqli_query($connection, 'INSERT into `users` VALUES(`lastname`, `firstname`, `password`, `timestamp`)');
    }
}

if (strtolower(isset($_GET['action'])) === "signup") {
    mysqli_fetch_all(mysqli_query($connection, 'SELECT `login`, `password` FROM `users`'));
    in_array($_GET["email"], $res);
    if ($res["email"] == " ") {
        mysqli_query($connection, 'INSERT into `users` VALUES(`lastname`, `firstname`, `password`, `timestamp`)');
    }
}

echo 'Connected successfully';
mysqli_close($connection);

