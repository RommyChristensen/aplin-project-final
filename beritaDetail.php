<?php
    require_once("helpers/koneksi.php");
    $id = $_GET['id'];
    $query = "SELECT * FROM berita_bahasa bb LEFT JOIN berita b ON b.berita_id = bb.berita_id WHERE bb.berita_id = $id";
    $result = mysqli_query($conn, $query)->fetch_assoc();

    echo "<pre>";
    print_r($result);
?>