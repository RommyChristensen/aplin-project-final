<?php
    require_once("helpers/koneksi.php");
    $tags = $_POST['tags'];

    $query = "SELECT * FROM konten_tag WHERE tag_id = ";
    for($i = 0; $i < count($tags); $i++){
        $query .= $tags[$i];
        if($i != count($tags) - 1){
            $query .= " OR tag_id = ";
        }
    }
    $res = mysqli_query($conn, $query);
    $dataTemp = array();
    while($data = $res->fetch_array()){
        $dataTemp[] = $data;
    }
    
    $dataFinal = array();

    foreach($dataTemp as $data){
        $idBerita = $data['konten_parent'];
        $queryData = "SELECT * FROM berita_bahasa WHERE berita_id = $idBerita";
        $resData = mysqli_query($conn, $queryData)->fetch_assoc();

        $dataFinal[$data['konten_parent']] = $resData;
        //$dataFinal[$data['konten_parent']]['tags'][$data['tag_id']] = '';
    }
?>

<?php foreach($dataFinal as $data) { ?>

<div class="row align-items-center mb-5">

    <!-- Grid column -->
    <div class="col-lg-5 col-xl-4">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" alt="Sample image">
            <a>
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7 col-xl-8">

        <!-- Post title -->
        <h4 class="font-weight-bold mb-3"><strong><?= $data['berita_judul']; ?></strong></h4>
        <!-- Excerpt -->
        <p class="dark-grey-text"><?= substr($data['berita_deskripsi'], 0, 50); ?>...</p>
        <!-- Post data -->
        <p>by <a class="font-weight-bold">Admin</a>, <?= $data['berita_tanggal'] ?></p>
        <!-- Read more button -->
        <a class="btn btn-primary btn-md mx-0 btn-rounded btn-read-more" id="<?= $data['berita_id']; ?>">Read
            more</a>

    </div>
    <!-- Grid column -->

</div>
<!-- Grid row -->
<hr class="my-5">

<?php } ?>