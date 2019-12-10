<?php
session_start();
if(isset($_SESSION['bahasa'])){
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
        <img src='assets/img/gedungL/gedungL.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-6 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>L Building</h3>

      <p class='text-muted'>
      The building which is located on the back side of the STTS has several classrooms which are also used for teaching and learning. Not only that, this building is also equipped with a library, basketball court, DKV studio, canteen, and several other spaces. This building is often used by students to rest, unwind while playing ping pong.
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
        <img src='assets/img/gedungL/labCisco.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Cisco Laboratory</h3>

      <p class='text-muted'>
      Also located on the ground floor of lab building, there is a room used for CISCO training. As shown by its name, this training room is equipped with some supporting facilities such as switch, router, and several CISCO devices which are used for supporting the training activities.
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
        <img src='assets/img/gedungL/labKomp.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Computer Laboratory</h3>

      <p class='text-muted'>
      Equipped with more than 35 computers, the three biggest laboratories located on the 2nd to 4th floors are used not only for online classes and lab works by the departments, but also for faculty staff training.
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
        <img src='assets/img/gedungL/labPengukurElek.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Electronic Measurement Laboratory</h3>

      <p class='text-muted'>
      This laboratory is equipped with various devices to support the Electric Circuits, Basic Electronics, and Power Electronics lab works.
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
        <img src='assets/img/gedungL/labTST.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Power System Laboratory</h3>

      <p class='text-muted'>
      Power System (TST) and Control System Laboratory provides the students a facility to do the lab works in Electrical Energy Conversion, Industrial Automation System, and Control System.
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
        <img src='assets/img/gedungL/labMicro.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Microprocessor Laboratory</h3>

      <p class='text-muted'>
      This room is designed to carry out the Microprocessor I and Microprocessor II lab works. Microprocessor I gives the understanding of microprocessing and the programming language to operate the processor, Microprocessor II is a course about learning and designing with a microcontroller.
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
        <img src='assets/img/gedungL/labDig.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Digital Laboratory</h3>

      <p class='text-muted'>
      This is a lab to carry out lab works in digital science family such as Logic Algebra, Digital Circuits, and Digital Systems. Here the students practice with digital circuits as a system such as decoders, memory organization, digital clock, frequency counters, ADC and DAC</p>

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
        <img src='assets/img/gedungL/labWorkIndus.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Industrial Workshop Laboratory</h3>

      <p class='text-muted'>
      As a department which also emphasizes entrepreneurship, the Department of Industrial Engineering of STTS is equipped with Industrial Workshop Laboratory which is supported by digital screen printing machine, pressing machine for making pins, cutting plotter for making stickers, and various chemical materials.</p>

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
        <img src='assets/img/gedungL/labCAD.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>CAD/CAM Laboratory</h3>

      <p class='text-muted'>
      Equipped with modern industrial instruments such as CNC mill, laser cutting machine, CNC 3D modeller, and CAD/CAM software, this laboratory supports the classes and lab works in Computer Aided Manufacturing, Production Processes, and Product Design and Development.</p>

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
        <img src='assets/img/gedungL/labAPK.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Work Analysis and Design Laboratory</h3>

      <p class='text-muted'>
      As a department that pays a lot of attention to productivity, the Industrial Engineering Department of STTS is equipped with Work Analysis and Design Laboratory which is supported by instruments such as conveyor, sound level meter, antropometer, tensionmeter, earplug, and various instruments for the study of motion economy in the workplace.</p>

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
        <img src='assets/img/gedungL/studModelDig.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Digital Modeling Studio</h3>

      <p class='text-muted'>
      A digital modelling laboratory supported by 3D printer, CNC 3D modeller, and Solidworks CAD software, established for modelling and rapid prototyping. This laboratory supports the students to comprehend the theory of modelling and products designing.</p>

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
        <img src='assets/img/gedungL/studDesain.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Design Studio</h3>

      <p class='text-muted'>
      Equipped with instruments for woodworking processes such as circular saw, heavy duty saw machine, and other instruments such as grinder, belt disk sander, drilling machine, hacksaw, hand saw, lathe, chisel, antropometer, and various other instruments to support manual 3D modelling processes.</p>

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
        <img src='assets/img/gedungL/studFotografi.jpg' class='img-fluid' alt=''>
        <a href=''>
          <div class='mask rgba-white-light' id='btnGambarRincian'></div>
        </a>
    </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class='col-md-9 mb-4 mb-md-0'>

      <h3 class='font-weight-bold'>Photography Laboratory</h3>

      <p class='text-muted'>
      This laboratory is equipped with various photography instruments. It is usually used by Photography UKM (students activity unit) for practicing indoor pictures taking. It is also used for Photography lab work by Visual Communication Design and Business Information System students.</p>

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
    <li class='page-item active'><a class='page-link' id='empat'>4</a></li>
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
          <img src='assets/img/gedungL/gedungL.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
        </div>
  
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-6 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Gedung L</h3>
  
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
          <img src='assets/img/gedungL/labCisco.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Laboratorium Cisco</h3>
  
        <p class='text-muted'>
        Masih pada lantai dasar laboratorium, terdapat sebuah ruangan yang digunakan untuk training CISCO. Sesuai dengan namanya, ruang training ini dilengkapi dengan beberapa fasilitas penunjang seperti switch, router, dan beberapa piranti CISCO lainnya yang digunakan sebagai penunjang kegiatan training.
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
          <img src='assets/img/gedungL/labKomp.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Laboratorium Komputer</h3>
  
        <p class='text-muted'>
        Dilengkapi dengan lebih dari 35 komputer, ketiga laboratorium yang tersebar di lantai 2 hingga 4 ini tidak hanya dimanfaatkan sebagai ruang kelas online dan ruang praktikum oleh berbagai jurusan tetapi juga sering dimanfaatkan sebagai ruang training dosen.
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
          <img src='assets/img/gedungL/labPengukurElek.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Laboratorium Pengukuran Elektronika</h3>
  
        <p class='text-muted'>
        Laboratorium ini dilengkapi dengan berbagai perangkat yang ditujukan untuk mendukung praktikum Rangkaian Listrik, praktikum Elektronika Dasar, dan Praktikum Elektronika Daya.
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
          <img src='assets/img/gedungL/labTST.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Laboratorium TST</h3>
  
        <p class='text-muted'>
        Laboratorium Teknik Sistem Tenaga (TST) dan Sistem kontrol memberi fasilitas bagi mahasiswa untuk melaksanakan kegiatan praktikum yang mendukung mata kuliah-mata kuliah Konversi Energi Listrik, Sistem Otomasi Industri, dan Sistem Kontrol.
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
          <img src='assets/img/gedungL/labMicro.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Laboratorium Mikroprosesor</h3>
  
        <p class='text-muted'>
        Ruangan ini didesain untuk penyelenggaraan praktikum matakuliah Mikroprosesor I dan Mikroprosessor II. Mikroprosessor I memberikan pengertian tentang mikroproses beserta bahasa pemrograman untuk mengoperasikannya sedangkan Mikroprosesor II mengenai pembelajaran dan perancangan mikrokontroler.
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
          <img src='assets/img/gedungL/labDig.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Laboratorium Digital</h3>
  
        <p class='text-muted'>
        Merupakan laboratorium yang menyelenggarakan praktikum untuk rumpun ilmu-ilmu digital, seperti matakuliah Aljabar Logika, Rangkaian Digital, dan Sistem Digital. Diruangan ini mahasiswa mempraktekan digital secara sistem, mulai dari sistem dekoder, organisasi memori, digital clock, frequency counter, ADC dan DAC.
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
          <img src='assets/img/gedungL/labWorkIndus.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Laboratorium Workshop Industri</h3>
  
        <p class='text-muted'>
        Sebagai jurusan yang juga mengutamakan kemampuan berwirausaha, Teknik Industri STTS dilengkapi dengan Laboratorium Workshop Industri yang ditunjang dengan peralatan digital sablon, alat press untuk pembuatan pin, cutting plotter untuk pembuatan stiker, dan berbagai bahan kimia.
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
          <img src='assets/img/gedungL/labCAD.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Laboratorium CAD/CAM</h3>
  
        <p class='text-muted'>
        Dilengkapi dengan peralatan modern industri seperti mill CNC, Laser Cutting, CNC 3D Modeller, dan software CAD/CAM. Laboratorium CAD/CAM berfungsi sebagai penunjang kegiatan perkuliahan dan praktikum (Computer Aided Manufacturing), proses produksi, serta perancangan & pengembangan produk.
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
          <img src='assets/img/gedungL/labAPK.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Laboratorium APK</h3>
  
        <p class='text-muted'>
        Sebagai jurusan yang sangat memperhatikan produktivitas , Teknik Industri STTS dilengkapi dengan Laboratorium Analisa dan Perancangan Kerja yang ditunjang dengan peralatan seperti conveyor, sound level meter, antropometer, tensimeter, earplug, berbagai perlatan untuk memperagakan peta tangan kiri & kanan yang baik.
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
          <img src='assets/img/gedungL/studModelDig.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Studio Pemodelan Digital</h3>
  
        <p class='text-muted'>
        Laboratorium pemodelan digital yang ditunjang dengan dengan 3D Printer, CNC 3D Modeller, dan software CAD seperti Solidworks dibangun untuk keperluan pemodelan dan rapid protoyping. Laboratorium ini berfungsi untuk mendukung mahasiswa mendalami teori mengenai modeling dan perancangan produk.
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
          <img src='assets/img/gedungL/studDesain.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Studio Desain (WORKSHOP)</h3>
  
        <p class='text-muted'>
        Dilengkapi dengan peralatan woodworking process seperti circular saw, heavy duty saw machine, dan peralatan kerja lain seperti gerinda, belt disk sander, bor duduk, hack saw, gergaji tangan, mesin bubut, alat pahat, antropometer, serta berbagai macam perlatan lain yang mendukung proses modeling 3D secara manual.
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
          <img src='assets/img/gedungL/studFotografi.jpg' class='img-fluid' alt=''>
          <a href=''>
            <div class='mask rgba-white-light' id='btnGambarRincian'></div>
          </a>
      </div>
      </div>
      <!--Grid column-->
  
      <!--Grid column-->
      <div class='col-md-9 mb-4 mb-md-0'>
  
        <h3 class='font-weight-bold'>Laboratorium Fotografi</h3>
  
        <p class='text-muted'>
        Laboratorium ini dilengkapi dengan berbagai peralatan untuk keperluan fotografi. Laboratorium ini biasa digunakan oleh UKM (Unit Kegiatan Mahasiswa) Fotografi untuk berlatih pemotretan indoor. Selain itu, laboratorium ini juga digunakan sebagai tempat praktek mata kuliah Fotografi oleh mahasiswa DKV dan SI.
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
      <li class='page-item active'><a class='page-link' id='empat'>4</a></li>
      <li class='page-item'><a class='page-link' id='lima'>5</a></li>
      
    </ul>
  </nav>
  </div>
  </div>";
}
?>