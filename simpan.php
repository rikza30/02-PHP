<?php
    include './koneksi.php';

    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $jenis_buku = $_POST['jenis_buku'];
    $gambar_buku = $_POST['gambar_buku'];

    $sql = "INSERT INTO buku (judul_buku,penulis,jenis_buku,gambar_buku) VALUES ('$judul_buku','$penulis','$jenis_buku','$gambar_buku')";
    if($conn->query($sql) === TRUE){
        echo "Simpan berhasil <br>";
        echo "<a href='formulir.php'>Kembali</a><br>";
        echo "<a href='tampil.php'>Tampilkan Data</a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>