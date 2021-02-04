<?php
    include "PHP/koneksiDB.php";
    $id = $_GET['npm'];
    $ambilData = mysqli_query($koneksi,"SELECT * FROM tabel_mahasiswa WHERE npm='$id'");
    $data = mysqli_fetch_array($ambilData)
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Form Input </title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
<big><b>
    <form class="input" action="" method="post">
<table class="tabel1" border="0">
    <tr>
        <td colspan="3"><h1 class="isi"> Input Data Mahasiswa </h1></td>
    </tr>
    <tr>
        <td>Npm</td>
        <td>:</td>
        <td><Input type="text" name="npm" value="<?php echo $data['npm']?>" readonly/></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" value="<?php echo $data['nama']?>"readonly/></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td><input type="text" name="tempat" value="<?php echo $data['nama']?>"readonly/></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><input type="text" name="tanggal" value="<?php echo $data['nama']?>"readonly/></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><select name="jenis" value="<?php echo $data['jenis']?>">
            <option slected><?php echo $data['jenis']?></option> 
            <option value="laki-laki">L</option> 
            <option value="perempuan">P</option>
        </select></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="alamat" value="<?php echo $data['nama']?>"readonly/></td>
    </tr>
    <tr>
        <td>Kode Pos</td>
        <td>:</td>
        <td><input type="text" name="kode" value="<?php echo $data['nama']?>" readonly/></td>
    </tr>
    </table>
    <table class="button">
    <tr>
    <td><input type="submit" name="proses" value="Simpan">
    </tr>
    </table>
    <?php
                        include "PHP/koneksiDB.php";  
                        if(isset($_POST['proses']))
                        {
                        $npm= $_POST['npm'];
                        $nama= $_POST['nama'];
                        $tempat= $_POST['tempat'];
                        $tanggal= $_POST['tanggal'];
                        $jenis= $_POST['jenis'];
                        $alamat= $_POST['alamat'];
                        $Kode= $_POST['kode'];
                            $tambah= mysqli_query($koneksi,"UPDATE  tabel_mahasiswa SET npm='$npm',nama='$nama',tempat='$tempat',tanggal='$tanggal',alamat='$alamat',kode='$kode' WHERE npm='$npm'");
                            if($tambah){
                                ?>
                                <script type="text/javascript">
                                    alert('edit data berhasil');
                                    document.location='halaman.php';
                                </script>
                                <?php
                            }else {
                                echo "GAGAL";
                            }
    
                        }
                        ?>
    </form>
    </big></b>
</body>
</html>