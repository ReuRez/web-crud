 <?php
 include('koneksi.php');
 $id = $_GET['id'];
 $query = "DELETE from tb_siswa where id='$id'";
 mysqli_query($koneksi, $query);

 
 header("location:index.php");
 
 ?>