<?php
$un = $_POST["username"];
$pass = $_POST["password"];

$usersJson = file_get_contents('../data/users.json');
$usersArray = json_decode($usersJson, true);

$loggedIn = false;

foreach ($usersArray as $user) {

    if ($un == $user["username"] && $pass == $user["password"]) {
        $loggedIn = true;
        break;
    }
}

if ($loggedIn) {
    session_start();
    $_SESSION["username"] = $un;
    $_SESSION["fullname"] = $user["fullname"];
    header("location:../pages/home.php");
} else {
    header("location:../index.php");
}
?>