<!DOCTYPE html>
<html>
    <head>
        <title>Form Input </title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body background="images.jfif">
<big><b>
    <form class="input" action="simpan_data.php" method="post">
<table class="tabel1" border="0">
    <tr>
        <td colspan="3"><h1 class="isi"> Input Data Mahasiswa</h1></td>
    </tr>
    <tr>
        <td>Npm</td>
        <td>:</td>
        <td><Input type="text" name="npm" /> </td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" /></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td><input type="text" name="tempat" /></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><input type="date" name="tanggal" /></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><select name="Jenis">
            <option value=""></option> 
            <option value="laki-laki">L</option> 
            <option value="perempuan">P</option>
        </select></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="alamat" /></td>
    </tr>
    <tr>
        <td>Kode Pos</td>
        <td>:</td>
        <td><input type="text" name="kode" /></td>
    </tr>
    </table>
    <table class="button">
    <tr>
    <td><input type="submit" value="Simpan">
    <input type="reset" value="Hapus" /></td>
    </tr>
    </table>
    </form>
    </big></b>
</body>
</html>