<?php
if (isset($_POST['update'])) {
    $id     = $_POST['id'];
    $nim    = $_POST['nim'];
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk     = $_POST['jenis_kelamin'];
    $email  = $_POST['email'];
    $telepon = $_POST['telepon'];

    //update user data
    $result = mysqli_query($con, "UPDATE mahasiswa SET nim='$nim',nama='$nama',alamat='$alamat',jenis_kelamin='$jk',email='$email',telepon='$telepon' WHERE id=$id");

    //redirect to homepage to display updater user in list
    header("Location:?page=mahasiswa-show");
}
?>