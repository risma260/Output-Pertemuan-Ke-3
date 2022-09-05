<?php

$nama_depan = $_POST["nama_depan"];
echo $nama_depan . " ";
$nama_belakang = $_POST["nama_belakang"];
echo $nama_belakang . " ";
$username = $_POST["username"];
echo $username . " ";
$telepon = $_POST["telepon"];
echo $telepon . " ";

session_start();
$_SESSION["nama_depan"]="$nama_depan";
$_SESSION["nama_belakang"]="$nama_belakang";
$_SESSION["username"]="$username";
$_SESSION["telepon"]="$telepon";
?>