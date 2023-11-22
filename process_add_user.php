<?php
// process_add_user.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require('koneksi.php');

    $new_username = mysqli_real_escape_string($koneksi, $_POST['new_username']);
    $new_password = md5(mysqli_real_escape_string($koneksi, $_POST['new_password']));
    $role = mysqli_real_escape_string($koneksi, $_POST['role']);

    $query = "INSERT INTO users (username, password, role) VALUES ('$new_username', '$new_password', '$role')";
    $result = mysqli_query($koneksi, $query);

    mysqli_close($koneksi);

    if ($result) {
        header("location: dashboard.php");
    } else {
        echo "Gagal menambahkan pengguna.";
    }
}
?>
