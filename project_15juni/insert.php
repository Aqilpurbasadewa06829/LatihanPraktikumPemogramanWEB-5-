<?php
    include("dbconnect.php");

    $user = $_POST['username'];
    $paswd = ['paswd'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $progdi = $_POST['progdi'];

    $insert = $k->query("INSERT INTO mhs (username,nama,email,paswd,progdi,active) VALUES ('".$user."','".$nama."','".$email."','".$paswd."',1)");
    if($insert)
    {
       header("Location: main.php");
    }
    else
    {
        echo "insert data gagal";
    }