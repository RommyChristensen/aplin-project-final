<?php
session_start();
if(isset($_SESSION['bahasa'])){
  echo "<div class='row'>
<div class='col-md-3'>
    <div class='list-group ml-3 mt-3'>
        <a href='#!' class='list-group-item list-group-item-action active'>
            ABOUT
        </a>
        <a href='' class='list-group-item list-group-item-action' id='btnGantiProfile'>Profile</a>
        <a href='' class='list-group-item list-group-item-action' id='btnGantiLokasi'>Location</a>
        <a href='' class='list-group-item list-group-item-action' id='btnGantiGedung'>Building & Facilities</a>
        
    </div><br>
    <div style='padding:20px;'>
    <h4>Vision</h4><hr>
      In 2022, STTS shall be a higher institution in science, technology, and design which can compete at Southeast Asia level, emphasizing quality, innovation, and Indonesian values
    
    </div>
    <br>
    <br>
        <div style='padding:20px;'>
        <h4>Mission</h4><hr>
        <ul>
        <li>To provide the best education and teaching material in science, technology, and design, with some Indonesian colors therein, referring to various international standards in accordance with the situation and condition of the demand and development in social, economic, and cultural aspects of Southeast Asian community</li>
        <li>To conduct reasearch with international standards in science, technology, and design, in accordance with the demand and development in social, economic, and cultural aspects of Southeast Asian community, using Indonesian values as part of the research</li>
        <li>To provide various innovative and superior solutions based on science, technology, and design for various social, economic, and cultural problems, referring to various international standards, especially in dealing with ASEAN economic community (AEC)</li>
        </ul>
        </div>
</div>
<div class='col-md-9'>
<div class='container my-5 py-5 z-depth-1'>

 
<!--Section: Content-->
<section class='px-md-5 mx-md-5 text-center text-lg-left dark-grey-text'>

  <!--Grid row-->
  <div class='row'>

    <!--Grid column-->
    <div class='col-md-6 mb-4 mb-md-0'>

      <!--Image-->
      <div class='view overlay z-depth-1-half'>
        <img src='assets/img/gedungN/gedungN.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-6 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>N Building</h3>

      <p class='text-muted'>
      The history of STTS existence is reflected by the unique design of this building. A luxurious auditorium decorated by beautiful giant trees is the center of this building. Several office rooms are located in this building, including the classroom used for graduate study.</p>

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->
  
  <br>  
  
  <!--Grid row-->
  <div class='row'>

    <!--Grid column-->
    <div class='col-md-3 mb-2 mb-md-0'>
    <div class='view overlay z-depth-1-half'>
      <!--Image-->
        <img src='assets/img/gedungN/rumAudit.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Auditorium</h3>

      <p class='text-muted'>
      A number of theatrical and choir performances, seminars, and other big events have been carried out here. Its towering ceiling, its luxurious and classical impression are the trademark of STTS Auditorium.</p>

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->
  
  <br>  
  
  <!--Grid row-->
  <div class='row'>

    <!--Grid column-->
    <div class='col-md-3 mb-2 mb-md-0'>
    <div class='view overlay z-depth-1-half'>
      <!--Image-->
        <img src='assets/img/gedungN/rumKelas.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>N-201</h3>

      <p class='text-muted'>
      This room is equipped with almost 40 notebook units with high specifications. Besides, there are 2 ready-to-use projectors to support classes. This room is often used for graduate program's classes.</p>

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->

  <br>  
 
</section>
<!--Section: Content-->



</div>
<nav>
  <ul class='pagination pg-purple'>
    
    <li class='page-item'><a class='page-link' id='satu'>1</a></li>
    <li class='page-item active'><a class='page-link' id='dua'>2</a></li>
    <li class='page-item'><a class='page-link' id='tiga'>3</a></li>
    <li class='page-item'><a class='page-link' id='empat'>4</a></li>
    <li class='page-item'><a class='page-link' id='lima'>5</a></li>
    
  </ul>
</nav>
</div>
</div>";
}
else{
echo "<div class='row'>
<div class='col-md-3'>
    <div class='list-group ml-3 mt-3'>
        <a href='#!' class='list-group-item list-group-item-action active'>
            TENTANG
        </a>
        <a href='' class='list-group-item list-group-item-action' id='btnGantiProfile'>Profil</a>
        <a href='' class='list-group-item list-group-item-action' id='btnGantiLokasi'>Lokasi</a>
        <a href='' class='list-group-item list-group-item-action' id='btnGantiGedung'>Gedung & Fasilitas</a>
        
    </div><br>
    <div style='padding:20px;'>
    <h4>Visi</h4><hr>
    Pada Tahun 2022, iSTTS menjadi perguruan tinggi bidang sains, teknologi,
    dan desain yang mampu bersaing di tingkat Asia Tenggara, dengan mengedepankan kualitas, 
    inovasi, dan nilai-nilai keindonesiaan.
    
    </div>
    <br>
        <div style='padding:20px;'>
        <h4>Misi</h4><hr>
        <ul>
        <li>Memberikan materi pendidikan dan pengajaran terbaik di bidang sains, teknologi, dan desain, dengan beberapa warna keindonesiaan di dalamnya, mengacu pada berbagai standar internasional, disesuaikan dengan situasi dan kondisi kebutuhan dan perkembangan sosial, ekonomi, dan budaya masyarakat Asia Tenggara.</li>
        <li>Melakukan penelitian berstandar internasional di bidang sains, teknologi, dan desain, sesuai kebutuhan dan perkembangan sosial, ekonomi, dan budaya masyarakat Asia Tenggara, menggunakan keindonesiaan sebagai bagian dari elemen penelitian.</li>
        <li>Menyediakan berbagai solusi inovatif dan unggulan berbasis sains, teknologi, dan desain bagi berbagai masalah sosial, ekonomi, dan budaya, mengacu pada berbagai standar internasional, khususnya dalam menghadapi pasar masyarakat ekonomi ASEAN (AEC)</li>
        </ul>
        </div>
</div>
<div class='col-md-9'>
<div class='container my-5 py-5 z-depth-1'>

 
<!--Section: Content-->
<section class='px-md-5 mx-md-5 text-center text-lg-left dark-grey-text'>

  <!--Grid row-->
  <div class='row'>

    <!--Grid column-->
    <div class='col-md-6 mb-4 mb-md-0'>

      <!--Image-->
      <div class='view overlay z-depth-1-half'>
        <img src='assets/img/gedungN/gedungN.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-6 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Gedung N</h3>

      <p class='text-muted'>
      Histori keberadaan STTS dicerminkan oleh desain khas gedung ini. Sebuah auditorium megah yang dihiasi oleh pohon-pohon raksasa nan indah menjadi pokok gedung ini. Beberapa ruang kantor berdiam di gedung ini, juga ruang kuliah yang umumnya digunakan oleh mahasiswa Strata 2.
      </p>

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->
  
  <br>  
  
  <!--Grid row-->
  <div class='row'>

    <!--Grid column-->
    <div class='col-md-3 mb-2 mb-md-0'>
    <div class='view overlay z-depth-1-half'>
      <!--Image-->
        <img src='assets/img/gedungN/rumAudit.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Auditorium</h3>

      <p class='text-muted'>
      Sejumlah pementasan teater, paduan suara, seminar, dan kegiatan besar lainnya pernah di selenggarakan di sini. Atapnya yang menjulang tinggi dengan suasana megah dan klasik menjadi trademark Auditorium STTS.
      </p>

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->
  
  <br>  
  
  <!--Grid row-->
  <div class='row'>

    <!--Grid column-->
    <div class='col-md-3 mb-2 mb-md-0'>
    <div class='view overlay z-depth-1-half'>
      <!--Image-->
        <img src='assets/img/gedungN/rumKelas.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>N-201</h3>

      <p class='text-muted'>
      Ruang ini dilengkapi dengan hampir 40 unit Notebook dengan spesifikasi tinggi. Tidak hanya itu, terdapat pula 2 buah projector siap-pakai yang dapat digunakan untuk menunjang kegiatan perkuliahan. Ruang ini kerap dimanfaatkan untuk kegiatan perkuliahan mahasiswa Strata 2.
      </p>

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->

  <br>  
 
</section>
<!--Section: Content-->



</div>
<nav>
  <ul class='pagination pg-purple'>
    
    <li class='page-item'><a class='page-link' id='satu'>1</a></li>
    <li class='page-item active'><a class='page-link' id='dua'>2</a></li>
    <li class='page-item'><a class='page-link' id='tiga'>3</a></li>
    <li class='page-item'><a class='page-link' id='empat'>4</a></li>
    <li class='page-item'><a class='page-link' id='lima'>5</a></li>
    
  </ul>
</nav>
</div>
</div>";
}
?>