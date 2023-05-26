<?php
require 'koneksi.php';
$namalengkap = $_POST["namalengkap"];
$username = $_POST["username"];
$instansi = $_POST["instansi"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO tbl_users (namalengkap, username, instansi, email, password)
            VALUES ('$namalengkap', '$username', '$instansi', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: index.html");
} else {
    echo "pendaftaran gagal : " . mysqli_error($conn);
}