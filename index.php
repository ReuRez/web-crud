!DOCTYPE html>
<html>
    <head>
        <title>CRUD Data Siswa SMK</title>
    </head>
    <body>
        <h2>Data Siswa SMK N 1 WONOSOBO</h2>
        <br/>
        <a href="tambahdata.php">+ TAMBAH SISWA</a>
        
        <br/>
        <br/>
        <table border="1">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Alamat</th>
                <th>OPSI</th>
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from tb_siswa");
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['nis']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td>
                <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                <a href="proses_hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin ingin menghapus?')">HAPUS</a>
               
                </td>
                </tr>
                <?php 
                }
                ?>

        </table>
    </body>
</html>