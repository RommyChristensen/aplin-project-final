<?php

    function getLatestNews(){
        $query = "SELECT * FROM berita b JOIN berita_bahasa bb ON bb.berita_id = b.berita_id LIMIT 3 ORDER BY b.berita_tanggal DESC";
        $res = mysqli_query($conn, $query);
        return $res;
    }

?>