<?php
    require_once("helpers/koneksi.php");

    $count = mysqli_query($conn, "SELECT * FROM agenda_bahasa where bahasa_id=1")->num_rows;
    echo $count;
    // $data['size'] = $count;
    // echo json_encode($data);
?>