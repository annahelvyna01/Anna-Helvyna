<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        <h1 align="center">Laporan Data Mahasiswa</h1>
        <hr>
        <form action="" method="post" class="form-inline">
            <button type="submit" class="btn btn-primary mb-2" name="submit"><i class="fas fa-search"></i></button>
            <div class="col-sm-11">
                <input type="text" name="cari" palceholder="pencarian" autocomplete="off" class="col-sm-2 col-form-label">
            </div>
        </form>
        <table>
            <a href="tambah.php"><button type="button" class="btn btn-primary">Tambah</button>
            <a href="hapus.php"><button type="button" class="btn btn-primary">Hapus</button>
            <a href="edit.php"><button type="button" class="btn btn-primary">Edit</button>
            <br>
        </table>
            <body>
                <br>
                <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr align="center">
                    <th scope="col">No</th>
                    <th scope="col">npm</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kode Pos</th>
                </tr>
            <tbody>
        </thead>
            <?php
                include ("PHP/koneksiDB.php");
                $no=1;
                if(isset($_POST['submit'])){
                    $cari=$_POST['nama'];
                    $query = mysqli_query($koneksi,"SELECT * FROM tabel_mahasiswa WHERE nama LIKE '$cari%'");
                }else{
                    $query= mysqli_query($koneksi,"SELECT * FROM tabel_mahasiswa");
                }
                while ($data = mysqli_fetch_array($query)){
            ?>

                <tr>
                    <td align="center"><?php echo $no++;?></td>
                    <td align="center"><?php echo $data['npm'];?></td>
                    <td align="center"><?php echo $data['nama'];?></td>
                    <td align="center"><?php echo $data['tempat'];?></td>
                    <td align="center"><?php echo $data['tanggal'];?></td>
                    <td align="center"><?php echo $data['jenis'];?></td>
                    <td align="center"><?php echo $data['alamat'];?></td>
                    <td align="center"><?php echo $data['kode'];?></td>
                    <td align="center" width="80"><a href="edit.php?id=<?php echo $data['npm']; ?> ">
                    <button type="button" class="btn btn-warning">Edit</button>
                    <td align="center" width="80"><a href="hapus.php?id=<?php echo $data['npm']; ?>">
                    <button type="button" class="btn btn-danger">Delet</button>
                    </td>
                </tr>
            <?php
                }
            ?>
            </tbody>
                </table>
            </body>
        </div>
    </div>
    </body>
</html>