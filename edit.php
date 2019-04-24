<?php
// include database connection file
include_once("config.php");
$id = $_GET['id'];
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['kirim']))
{   
    $id=$_POST['id'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $komentar=$_POST['komentar'];

    // update user data
    $sql = "UPDATE pengguna SET id='$id', username='$username', email='$email', komentar='$komentar' WHERE id='$id'";
    $hasil = mysqli_query($koneksi, $sql);

    // Redirect to homepage to display updated user in list
    header("Location: komentar.php");
}
?>