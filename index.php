<?php
// Little Coding PHP //
$connection = mysqli_connect('localhost', 'mysql_user', 'mysql_password');

if (!$connection) {
    die('Could not connect: ' . mysqli_error($connection));
}

if (strtolower(isset($_GET['action'])) === "login") {
    mysqli_fetch_all(mysqli_query($connection, 'INSERT into `users` (`lastname`,`firstname`) VALUES (`lastname`, `firstname`, `password`, `timestamp`)'));
    $res = mysqli_fetch_all(mysqli_query($connection, 'SELECT into `users` (`lastname`,`firstname`) VALUES (`lastname`, `firstname`, `password`, `timestamp`)'));

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


if (strtolower(isset($_GET['action'])) === "graphapi") {


    $res = mysqli_fetch_all(mysqli_query($connection, "SELECT id, email FORM `users`", MYSQLI_ASSOC));
    var_dump($res);
    header('Cache-Control: no-cache, must-revalidate');
    header('Content-type: application/json');

    echo json_encode($result_json);
}

/*
//    lastname varchar(255)     //
//    firstname varchar(255)    //
//    password varchar(255)     //
//    created current_timestamp //
//    update current_timestamp  //
*/