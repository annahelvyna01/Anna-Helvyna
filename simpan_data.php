<?php
//koneksi kedatabase
include 'PHP/koneksiDB.php';
//menangkap data yang dikirim dari form
    $npm       =$_POST['npm'];
    $nama     =$_POST['nama'];
    $tempat      =$_POST['tempat'];
    $tanggal     =$_POST['tanggal'];
    $jenis    =$_POST['jenis'];
    $alamat   =$_POST['alamat'];
    $kode   =$_POST['kode'];

    mysql_query("INSERT INTO tabel_mahasiswa values ('$npm','$nama','$tempat','$tanggal','$jenis','$alamat','$kode')");
    header ("location: laporan.php");
    ?>