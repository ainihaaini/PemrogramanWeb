<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "12345") {

    header("Location: praktikum1_modul7.php");

} else {

    echo "Username atau Password Salah";

}

?>