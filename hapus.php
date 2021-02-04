<?php
      include "PHP/koneksiDB.php";
      $id = $_GET['npm'];
      $ambilData = mysqli_query($koneksi,"DELETE FROM tabel_mahasiswa WHERE npm='$id'");

      echo "<script>alert('Data Berhasil Di Hapus');document.location='halaman.php'</script>";
?> 

