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
      <h4>VISION</h4>
      In 2022, STTS shall be a higher institution in science, technology, and design which can compete at Southeast Asia level, emphasizing quality, innovation, and Indonesian values
    
      </div>
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
          <img src='assets/img/denahKampus.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
        </div>
  
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-6 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Map & Building</h3>
  
        <p class='text-muted'>There are 5 Buildings in the Integrated Science and Technology Institute in Surabaya. If You Want to Know Deeper. Double Click the Below Button / Image Plan:</p>
  
        <a class='btn btn-brown btn-md ml-0' href='' role='button' id='btnRincianGedung'>TRAVEL<i class='fa fa-plane ml-2'></i></a>
  
      </div>
      <!--Grid column-->
  
    </div>
    <!--Grid row-->
  
  
  </section>
  <!--Section: Content-->
  
  
  </div>
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
        <img src='assets/img/denahKampus.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-6 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Denah dan Gedung</h3>

      <p class='text-muted'>Denah yang berada di Institut Sains dan Teknologi Terpadu Surabaya Terdapat 5 Gedung, Jika Ingin Tahu Lebih dalam. Double Klik Tombol Di Bawah/Gambar Denah:</p>

      <a class='btn btn-brown btn-md ml-0' href='' role='button' id='btnRincianGedung'>Jelajahi<i class='fa fa-plane ml-2'></i></a>

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->


</section>
<!--Section: Content-->


</div>
</div>
</div>";
}
?>