<?php
    
    include "tambah.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Laporan</title>
    <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>   
    <table id="tabel2" border="1" align="center"> 
    <tr>
    <th h1 class="title" colspan="7">Laporan Data Mahasiswa</th>
    </tr>
    <tr>
            <th>Npm</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Kode Pos</th>
        </tr>
<?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td>
                <a href=""> Ubah </a>
                <a href=""> Hapus </a>
            </td>
            <td><?php echo $npm++;?></td>
            <td><?php echo $row["nama"];?></td>
            <td><?php echo $row["tempat"];?></td>
            <td><?php echo $row["tanggal"];?></td>
            <td><?php echo $row["jenis"];?></td>
            <td><?php echo $row["alamat"];?></td>
            <td><?php echo $row["kode"];?></td>
        </tr>
        <?php endwhile ; ?>
</table>
    </body>
</html>