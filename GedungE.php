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
          <img src='assets/img/gedungE/gedungE.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
        </div>
  
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-6 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>E Building</h3>
  
        <p class='text-muted'>
        This building, located on the western side of STTS area, is a new building officially used since November 8, 2012. Named Tower of the Eagles, this 7-floor building is equipped with various facilities such as e-Library, classrooms, study center room, rooms for Students Associations (HIMA) of all departments, and room for Students Executive Body (BEM).
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
          <img src='assets/img/gedungE/elib.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>E-Library</h3>
  
        <p class='text-muted'>
        Sophisticated computers with high speed internet are the specific attractiveness of the e-library. This facility helps the students obtain the resources they need to do their tasks and class projects.</p>
  
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
          <img src='assets/img/gedungE/rumKls.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Classrooms</h3>
  
        <p class='text-muted'>
        Classrooms will always be classrooms. However, unlike other classrooms, all classrooms in Tower of the Eagles are equipped with ready-to-use projectors and screens. Its interior design boosts the passion to learn.</p>
  
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
          <img src='assets/img/gedungE/rumPMB.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Penerimaan Mahasiswa Baru</h3>
  
        <p class='text-muted'>
        The admissions office, the most frequently visited by new students. In this office there are staff and lecturers who specialize in serving new students. This office is also a gateway for STTS to outside communities.</p>
  
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
          <img src='assets/img/gedungE/rumTeater.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Theatre</h3>
  
        <p class='text-muted'>
        Jenis ruang kelas yang paling banyak dimininati mahasiswa maupun dosen pengajar. Ruangan ini menciptakan suasana akademik yang cukup baik sehingga meningkatkan minat belajar. Terdapat total 3 ruang kelas berjenis ini.</p>
  
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
          <img src='assets/img/gedungE/rumBAU.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Financial Administration Bureau</h3>
  
        <p class='text-muted'>
        The bureau, which is assisted by the Assistant Chairperson II, handles all forms of financial STTS activities, from receiving SPP payments to operational work within the campus. Lonely is the word that most does not fit in this room.
        </p>
  
      </div>
      <!--Grid column-->
  
    </div>
    <!--Grid row-->
  </section>
  <!--Section: Content-->
  
  
  
  </div>
  <nav>
    <ul class='pagination pg-purple'>
      
      <li class='page-item active'><a class='page-link' id='satu'>1</a></li>
      <li class='page-item'><a class='page-link' id='dua'>2</a></li>
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
        <img src='assets/img/gedungE/gedungE.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-6 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Gedung E</h3>

      <p class='text-muted'>Gedung paling barat di STTS ini merupakan gedung baru yang telah diresmikan 8 November 2012 lalu. Dinamai Tower of The Eagles, gedung 7 lantai ini dilengkapi dengan berbagai fasilitas seperti E-Library, uang Kelas, Biro Administrasi Umum, Bagian IT, PMB.</p>

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
        <img src='assets/img/gedungE/elib.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>E-Library</h3>

      <p class='text-muted'>
      Komputer canggih yang dilengkapi dengan internet berkecepatan tinggi menjadi daya tarik tersendiri bagi e-library. Kenyamanan tersebut dimanfaatkan mahasiswa untuk membantu mendapatkan segala resource yang dibutuhkan untuk menyelesaikan tugas maupun proyek perkuliahan.
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
        <img src='assets/img/gedungE/rumKls.jpg' class='img-fluid' alt=''>
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
      Ruang kelas akan selalu menjadi ruang kelas. Namun, berbeda dengan ruang kelas pada umumnya, segala kelas di Tower of The Eagles dilengkapi dengan projector screen siap pakai. Desain interiornya pun menambah semangat belajar.
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
        <img src='assets/img/gedungE/rumPMB.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Penerimaan Mahasiswa Baru</h3>

      <p class='text-muted'>
      Kantor penerimaan, yang paling sering dikunjungi mahasiswa baru. Di kantor ini bekerja beberapa staff dan dosen yang khusus melayani penerimaan mahasiswa baru. Kantor ini juga menjadi gerbang STTS ke komunitas luar.
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
        <img src='assets/img/gedungE/rumTeater.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Ruang Teater</h3>

      <p class='text-muted'>
      Jenis ruang kelas yang paling banyak dimininati mahasiswa maupun dosen pengajar. Ruangan ini menciptakan suasana akademik yang cukup baik sehingga meningkatkan minat belajar. Terdapat total 3 ruang kelas berjenis ini.                  
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
        <img src='assets/img/gedungE/rumBAU.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Biro Administrasi Keuangan</h3>

      <p class='text-muted'>
      Biro yang dibawahi oleh Pembantu Ketua II ini menangani segala bentuk kegiatan finansial STTS, mulai dari penerimaan pembayaran SPP, hingga operasional lingkup kerja kampus. Sepi merupakan kata yang paling tidak cocok dengan ruangan ini.
      </p>

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->
</section>
<!--Section: Content-->



</div>
<nav>
  <ul class='pagination pg-purple'>
    
    <li class='page-item active'><a class='page-link' id='satu'>1</a></li>
    <li class='page-item'><a class='page-link' id='dua'>2</a></li>
    <li class='page-item'><a class='page-link' id='tiga'>3</a></li>
    <li class='page-item'><a class='page-link' id='empat'>4</a></li>
    <li class='page-item'><a class='page-link' id='lima'>5</a></li>
    
  </ul>
</nav>
</div>
</div>";
}
?>