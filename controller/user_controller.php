<?php

// include '../config/database.php';
include '../model/user.php';

// $db = new database();
$user = new user();

$aksi = $_GET['aksi'];
if($aksi == "tambah") {
    $user->input($_POST['nama'], $_POST['alamat'], $_POST['usia']);
    header("location:../view/show_data.php");
} elseif($aksi == "hapus") {
    $user->hapus($_GET['id']);
    header("location:../view/show_data.php");
} elseif($aksi == "update") {
    $user->update($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['usia']);
    header("location:../view/show_data.php");
}
