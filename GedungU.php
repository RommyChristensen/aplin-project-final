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
          <img src='assets/img/gedungU/gedungU.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
        </div>
  
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-6 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>U Building</h3>
  
        <p class='text-muted'>
        This building is the center of administrative activities at STTS. Academic Administration Office, Finance Administration Office, and faculty rooms dominate this building. Sometimes some classes are carried out in this building, also in room U-401, the largest and the tallest room in this building.
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
          <img src='assets/img/gedungU/BAA.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>ACADEMIC ADMINISTRATIVE OFFICE</h3>
  
        <p class='text-muted'>
        Managed by Vice Dean I, the Academic Administration Office administers all academic activities and scheduling at STTS.
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
          <img src='assets/img/gedungU/rumKls.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Classrooms (U-401)</h3>
  
        <p class='text-muted'>
        Located on U building's top floor, room U-401 is often used as a classroom. This large room is equipped with desks, LCD projector, and a whiteboard, enabling it to be used for meetings with the students' parents, seminar, and other activities.</p>
  
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
          <img src='assets/img/gedungU/rumRapat.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Meeting Room</h3>
  
        <p class='text-muted'>
        Faculty staff meetings are often held in this room. Equipped with a large, elliptic table, LCD projector and whiteboard, this meeting room is suitable for discussions and exchanging ideas. Many big ideas are produced in this room.</p>
  
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
      <li class='page-item'><a class='page-link' id='dua'>2</a></li>
      <li class='page-item'><a class='page-link' id='tiga'>3</a></li>
      <li class='page-item'><a class='page-link' id='empat'>4</a></li>
      <li class='page-item active'><a class='page-link' id='lima'>5</a></li>
      
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
          <img src='assets/img/gedungU/gedungU.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
        </div>
  
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-6 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Gedung U</h3>
  
        <p class='text-muted'>
        Gedung ini merupakan pusat kegiatan administrasi di STTS. Biro Administrasi Akademik dan ruang dosen mendominasi ruang-ruang dalam gedung ini. Namun terkadang, beberapa kuliah diselenggarakan di gedung ini, termasuk U-401, ruangan terbesar dan tertinggi di gedung ini.
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
          <img src='assets/img/gedungU/BAA.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Biro Akademik Administrasi (BAA)</h3>
  
        <p class='text-muted'>
        Dibawahi oleh Pembantu Ketua I, Biro Administrasi Akademik merupakan biro yang mengelola seluruh kegiatan perkuliahan dan penjadwalan kegiatan akademis di STTS.
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
          <img src='assets/img/gedungU/rumKls.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Ruang Kelas (U-401)</h3>
  
        <p class='text-muted'>
        Berada di lantai teratas gedung U, ruang U-401 sering juga digunakan sebagai ruang belajar mengajar. Ruangnya yang luas dilengkapi dengan sejumlah kursi, LCD projector, serta sebuah papan tulis, memungkinkan ruangan ini digunakan untuk acara pertemuan orang tua, kegiatan seminar dan beberapa kegiatan lainnya.
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
          <img src='assets/img/gedungU/rumRapat.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Ruang Rapat</h3>
  
        <p class='text-muted'>
        Rapat dosen sering digelar di ruang ini. Dilengkapi dengan meja elips yang besar, LCD projector dan whiteboard, ruang rapat menjadi ruang yang cocok untuk bertukar pikiran maupun diskusi. Banyak ide-ide besar yang dihasilkan di ruangan ini.
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
      <li class='page-item'><a class='page-link' id='dua'>2</a></li>
      <li class='page-item'><a class='page-link' id='tiga'>3</a></li>
      <li class='page-item'><a class='page-link' id='empat'>4</a></li>
      <li class='page-item active'><a class='page-link' id='lima'>5</a></li>
      
    </ul>
  </nav>
  </div>
  </div>";
}

?>