 <?php
include_once("config.php"); 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['kirim'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];

        // Insert user data into table
        $hasil = mysqli_query($koneksi, "INSERT INTO pengguna (id,username,email,komentar,info) VALUES('','$username','$email','$komentar','')");
    
        header("Location:komentar.php");
}?>