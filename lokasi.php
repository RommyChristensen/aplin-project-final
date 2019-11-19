<?php
    echo "<div class='row'>
    <div class='col-md-3'>
        <div class='list-group ml-3 mt-3'>
            <a href='#!' class='list-group-item list-group-item-action active'>
                TENTANG
            </a>
            <a href='' class='list-group-item list-group-item-action' id='btnGantiProfile'>Profil</a>
            <a href='' class='list-group-item list-group-item-action' id='btnGantiLokasi'>Lokasi</a>
            <a href='' class='list-group-item list-group-item-action' onclick='gantiGedung()'>Gedung & Fasilitas</a>
            <a href='' class='list-group-item list-group-item-action' onclick='gantiLembaga()'>Lembaga</a>
        </div><br>
        <div>
        <h4>Visi</h4><hr>
        Pada Tahun 2022, iSTTS menjadi perguruan tinggi bidang sains, teknologi,
        dan desain yang mampu bersaing di tingkat Asia Tenggara, dengan mengedepankan kualitas, 
        inovasi, dan nilai-nilai keindonesiaan.
        
        </div>
    </div>
<div class='col-md-9'>";
    echo "<div class='jumbotron mr-3 mt-3'>
    <div class='container-fluid mt-3 mb-5'>

    <section>
      
      <style>
        .map-container {
          overflow:hidden;
          position:relative;
          height:0;
        }
        .map-container iframe {
          left:0;
          top:0;
          height:100%;
          width:100%;
          position:absolute;
        }
      </style>
  
      <!-- Card -->
      <div class='card mb-5'>
  
        <!-- Grid row -->
        <div class='row'>
  
          <!-- Grid column -->
          <div class='col-md-6'>
  
            <!-- Google map -->
            <div id='map-container-google-1' class='map-container rounded-left' style='height: 400px'>
            <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5554996577603!2d112.75664031472269!3d-7.291305994737402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbb476048727%3A0x5f5f7cf736ae643e!2sInstitut%20Sains%20dan%20Teknologi%20Terpadu%20Surabaya%20(iSTTS)!5e0!3m2!1sen!2sid!4v1574069939259!5m2!1sen!2sid' width='800' height='400' frameborder='0' style='border:0;' allowfullscreen=''></iframe>
              
            </div>
            <!-- Google Maps -->
  
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class='col-10 col-md-4 mx-auto align-self-center py-4'>
  
            <p class='text-uppercase small grey-text'><strong>Location</strong></p>
            <h5 class='font-weight-normal mb-4'>Surabaya, Indonesia</h5>
            <p class='text-muted font-weight-light'>Jalan Ngagel Jaya Tengah No.73-77, Baratajaya , Kec.Gubeng, Kota SBY, Jawa Timur 60284</p>
            <p class='text-muted font-weight-light mb-0'>Phone: +62 31 502 7920<br>Email: web_admin@istts.ac.id</p>
  
          </div>
          <!-- Grid column -->
  
        </div>
        <!-- Grid row -->
  
      </div>
      <!-- Card -->
  
    </section>
  
  </div></div>";
?>