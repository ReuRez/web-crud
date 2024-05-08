<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"update tb_siswa set nama='$nama', nis='$nis', alamat='$alamat' where id='$id'");

header("location:index.php");
?>