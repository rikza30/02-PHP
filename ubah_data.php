<?php
    include './koneksi.php';
    $id_buku = $_GET["id_buku"];

    $sql = "SELECT * FROM buku WHERE id=".$id_buku;
    $result =$conn->query($sql);

    $result= $result->fetch_assoc();
?>

<form action="ubah.php" method="post">
    <input type="hidden" name="id" value="<?php echo $result['id']?>">
    <table>
        <tr>
            <td>Judul Buku</td>
            <td>:</td>
            <td><input type="text" name="judul_buku"></td>
        </tr>
        <tr>
            <td>Penulis</td>
            <td>:</td>
            <td><input type="text" name ="penulis"></td>
        </tr>
        <tr>
            <td>Jenis Buku</td>
            <td>:</td>
            <td><input type="text" name="jenis_buku"></td>
        </tr>
        <tr>
            <td>Gambar Buku</td>
            <td>:</td>
            <td><input type="file" name="gambar_buku" accept="image/*">
        </tr>
    </table>
    <input type="submit" name="simpan" value="UBAH">
</form>