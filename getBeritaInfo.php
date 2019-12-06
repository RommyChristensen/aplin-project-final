<?php
    require_once("helpers/koneksi.php");

    $count = mysqli_query($conn, "SELECT * FROM berita_bahasa")->num_rows;
    echo $count;
    // $data['size'] = $count;
    // echo json_encode($data);
?>