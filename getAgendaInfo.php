<?php
    require_once("helpers/koneksi.php");
    if(isset($_SESSION['bahasa'])){
        $bahasa=2;
      }
      else{
        $bahasa=1;
      }
    $count = mysqli_query($conn, "SELECT * FROM agenda_bahasa where bahasa_id=$bahasa")->num_rows;
    echo $count;
    // $data['size'] = $count;
    // echo json_encode($data);
?>