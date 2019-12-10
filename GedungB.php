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
          <img src='assets/img/gedungB/gedungB.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
        </div>
  
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-6 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>B Building</h3>
  
        <p class='text-muted'>
        The building located on the rear side of STTS has several classrooms used for teaching and learning process. Besides, this building is also equipped with library, basketball court, DKV studio, cafetaria, and some other rooms. This building is often used by students for resting, relaxing while playing pingpong.</p>
  
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
          <img src='assets/img/gedungB/b100.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>B-100</h3>
  
        <p class='text-muted'>
        Being close to the cafetaria makes this area always crowded by students, be it those having lunch, those waiting for next class schedules, or those spending time by playing pingpong.</p>
  
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
          <img src='assets/img/gedungB/kantin.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Canteen</h3>
  
        <p class='text-muted'>
        Although there are some restaurants providing various kinds of food starting from Indonesian food to Chinese food around STTS campus, the STTS cafetaria is still the favorite choice of STTS students and faculty staff for lunch.</p>
  
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
          <img src='assets/img/gedungB/rumStudDKV.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>VCD Studio</h3>
  
        <p class='text-muted'>
        Originated from engineering, all STTS departments are inseparable from computers. Located on the ground floor of B building, instead of being equipped with wooden tables, this DKV studio is equipped with a number of iMac and Waccom to support DKV students in their lab work.</p>
  
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
          <img src='assets/img/gedungB/Perpus.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Library</h3>
  
        <p class='text-muted'>
        To help the students better comprehend their class material, a complete library with a collection of more than 100 thousand books is provided in this building. The comfort inside its rooms makes this place one of the students' favorite places to study or just relax while reading and browsing.</p>
  
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
          <img src='assets/img/gedungB/rumKls.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Class Rooms</h3>
  
        <p class='text-muted'>
        Most classes at STTS use the rooms in this building. Equipped with a projector, whiteboard, a number of desks, and carpeted floor, the classrooms in this building support the teaching and learning process.</p>
  
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
          <img src='assets/img/gedungB/lapBasket.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Basketball Field</h3>
  
        <p class='text-muted'>
        Not only focusing on the academic world, STTS also pays attention to the students' interests and talents. Various available facilities such as basketball ring, futsal goal, badminton net, and tribune for spectators make the top floor of B building a sports center.</p>
  
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
      <li class='page-item active'><a class='page-link' id='tiga'>3</a></li>
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
        <img src='assets/img/gedungB/gedungB.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-6 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Gedung B</h3>

      <p class='text-muted'>
      Gedung yang terletak di sisi belakang STTS ini memiliki beberapa ruang kelas yang juga dipergunakan untuk proses belajar mengajar. Tak hanya itu, gedung ini juga dilengkapi dengan perpustakaan, lapangan basket, studio DKV, kantin, dan beberapa ruang lainnya. Gedung ini kerap kali dimanfaatkan oleh mahasiswa untuk beristirahat, melepas penat sembari bermain ping pong.
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
        <img src='assets/img/gedungB/b100.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>B-100</h3>

      <p class='text-muted'>
      Lokasinya yang dekat dengan kantin, menyebabkan daerah ini selalu ramai dipenuhi oleh mahasiswa, mulai dari mahasiswa yang sedang bersantap siang, mahasiswa yang sedang menunggu jadwal kuliah berikutnya maupun yang sedang menghabiskan waktu dengan bermain ping pong.
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
        <img src='assets/img/gedungB/kantin.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Kantin</h3>

      <p class='text-muted'>
      Walaupun di sekitar kampus STTS terdapat sejumlah tempat makan yang menyediakan berbagai jenis masakan, dari masakan Indonesia hingga Chinese Food, kantin STTS tetap menjadi pilihan favorit mahasiswa dan dosen STTS untuk melewatkan santap siangnya.
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
        <img src='assets/img/gedungB/rumStudDKV.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Studio DKV</h3>

      <p class='text-muted'>
      Berangkat dari jurusan teknik, semua jurusan yang ada di STTS tidak dapat lepas dari komputer. Terletak di lantai dasar gedung B, alih-alih dilengkapi dengan meja kayu, ruang studio DKV ini dilengkapi dengan sejumlah iMac dan Waccom yang dapat mendukung mahasiswa dalam praktikum.
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
        <img src='assets/img/gedungB/Perpus.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Perpustakaan</h3>

      <p class='text-muted'>
      Berusaha membantu mahasiswa dalam memperdalam materi kuliah, sebuah perpustakaan lengkap dengan koleksi lebih dari 100 ribu judul tersedia perpustakaan ini. Kenyamanan ruangan ini membuatnya menjadi salah satu tempat favorit mahasiswa untuk belajar ataupun sekadar melepas lelah sambil membaca maupun browsing.
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
        <img src='assets/img/gedungB/rumKls.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Ruang Kelas</h3>

      <p class='text-muted'>
      Sebagian besar perkuliahan yang ada di STTS, menggunakan ruang kelas yang ada gedung ini. Dilengkapi dengan sebuah projector, papan tulis, dan sejumlah meja kursi, serta lantainya yang berkarpet, ruang kelas yang ada di gedung ini mendukung proses belajar mengajar.
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
        <img src='assets/img/gedungB/lapBasket.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Lapangan Basket</h3>

      <p class='text-muted'>
      Tidak hanya fokus pada dunia akademik, STTS juga turut memperhatikan minat dan bakat masing-masing mahasiswa. Berbagai fasilitas yang tersedia, seperti ring basket, gawang futsal, net badminton, serta podium penonton, membuat lantai teratas dari gedung B ini sebagai pusat kegiatan olahraga.
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
    <li class='page-item active'><a class='page-link' id='tiga'>3</a></li>
    <li class='page-item'><a class='page-link' id='empat'>4</a></li>
    <li class='page-item'><a class='page-link' id='lima'>5</a></li>
    
  </ul>
</nav>
</div>
</div>";
}
?>