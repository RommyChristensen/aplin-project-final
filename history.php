<?php
  //session_start();
    require_once("helpers/koneksi.php");
    include "tpl/header.php";
    if(isset($_SESSION['bahasa'])){
      include "tpl/navbarID.php";
      $bahasa=2;
    }else{
      include "tpl/white-navbar.php";
      $bahasa=1;
    }
?>
<script src="assets/js/jquery-3.4.1.min.js"></script>
<!-- Intro -->
<div class="card card-intro blue-gradient">

    <div class="card-body white-text rgba-black-light text-center">

        <!--Grid row-->
        <div class="row d-flex justify-content-center">

            <!--Grid column-->
            <div class="col-md-6">

                <p class="h5 mb-2">
                    <?php
                    if(isset($_SESSION['bahasa'])){
                        echo "About";
                    }
                    else{
                        echo "Tentang";
                    }
                    ?>
                </p>

                <p class="mb-0">Institut Sains & Teknologi Terpadu Surabaya</p>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>

</div>
<!-- Intro -->


<!-- HAI DEWANGGA!!, YOUR CODE GOES DOWN HERE -->

<div class="ganti">
<div class="row">
    <div class="col-md-3">
        <div class="list-group ml-3 mt-3">
            <a href="#!" class="list-group-item list-group-item-action active">
            <?php
                    if(isset($_SESSION['bahasa'])){
                        echo "About";
                    }
                    else{
                        echo "Tentang";
                    }
                    ?></a>
            <a href="" class="list-group-item list-group-item-action" id="btnGantiProfile">
            <?php
                    if(isset($_SESSION['bahasa'])){
                        echo "Profile";
                    }
                    else{
                        echo "Profil";
                    }
                    ?></a>
            <a href="" class="list-group-item list-group-item-action" id="btnGantiLokasi">
            <?php
                    if(isset($_SESSION['bahasa'])){
                        echo "Location";
                    }
                    else{
                        echo "Lokasi";
                    }
                    ?>
            </a>
            <a href="" class="list-group-item list-group-item-action" id="btnGantiGedung">
            <?php
                    if(isset($_SESSION['bahasa'])){
                        echo "Building and Facilities";
                    }
                    else{
                        echo "Gedung dan Fasilitas";
                    }
                    ?>
            </a>
            
        </div><br>
        <div style="padding:20px;">
        <h4><?php
                    if(isset($_SESSION['bahasa'])){
                        echo "Vision";
                    }
                    else{
                        echo "Visi";
                    }
                    ?></h4><hr>
                    <?php
                    if(isset($_SESSION['bahasa'])){
                        echo "In 2022, iSTTS became a college in the fields of science, technology,
                                and designs that are able to compete at the level of Southeast Asia, by promoting quality,
                                innovation, and Indonesian values.";
                    }else{
                        echo "Pada Tahun 2022, iSTTS menjadi perguruan tinggi bidang sains, teknologi,
                        dan desain yang mampu bersaing di tingkat Asia Tenggara, dengan mengedepankan kualitas, 
                        inovasi, dan nilai-nilai keindonesiaan.";
                    }
                    ?>
        </div><br>
        <div style="padding:20px;">
        <h4>
        <?php
                    if(isset($_SESSION['bahasa'])){
                        echo "Mision";
                    }
                    else{
                        echo "Misi";
                    }
        ?>
        </h4><hr>
        <ul>
        <li>
        <?php
            if (isset($_SESSION['bahasa'])) {
                echo "Providing the best educational and teaching material in the fields of science, technology, and design, with some Indonesian colors in it, referring to various international standards, adapted to the situations and conditions of needs and social, economic, and cultural development of Southeast Asian people.";
            }else{
                echo "Memberikan materi pendidikan dan pengajaran terbaik di bidang sains, teknologi, dan desain, dengan beberapa warna keindonesiaan di dalamnya, mengacu pada berbagai standar internasional, disesuaikan dengan situasi dan kondisi kebutuhan dan perkembangan sosial, ekonomi, dan budaya masyarakat Asia Tenggara.";
            }
        ?>
        </li>
        <li>
        <?php
            if (isset($_SESSION['bahasa'])) {
                echo "Conducting international standard research in the fields of science, technology and design, in accordance with the needs and social, economic, and cultural development of the Southeast Asian community, using Indonesian-ness as part of the research element.";
            }else {
                echo "Melakukan penelitian berstandar internasional di bidang sains, teknologi, dan desain, sesuai kebutuhan dan perkembangan sosial, ekonomi, dan budaya masyarakat Asia Tenggara, menggunakan keindonesiaan sebagai bagian dari elemen penelitian.";
            }
        ?>
        </li>
        <li>
        <?php
            if (isset($_SESSION['bahasa'])) {
                echo "Providing various innovative and superior solutions based on science, technology and design for various social, economic and cultural problems, referring to various international standards, especially in dealing with the ASEAN economic community (AEC) market";
            }else{
                echo "Menyediakan berbagai solusi inovatif dan unggulan berbasis sains, teknologi, dan desain bagi berbagai masalah sosial, ekonomi, dan budaya, mengacu pada berbagai standar internasional, khususnya dalam menghadapi pasar masyarakat ekonomi ASEAN (AEC)";
            }
        ?>
        </li>
        </ul>
        </div>
    </div>
<div class="col-md-9">
<div class="jumbotron mr-3 mt-3">
            <div class="container z-depth-1 my-5">
    
                <!-- Section -->
                <section>
                    
                    <style>
                    .timeline {
                        position: relative;
                        list-style: none;
                        padding: 1rem 0;
                        margin: 0;
                    }
    
                    .timeline::before {
                        content: '';
                        position: absolute;
                        left: 50%;
                        top: 0;
                        bottom: 0;
                        width: 2px;
                        margin-left: -1px;
                        background-color: #50a1ff;
                    }
    
                    .timeline-element {
                        position: relative;
                        width: 50%;
                        padding: 1rem 0;
                        padding-right: 2.5rem;
                        text-align: right;
                    }
    
                    .timeline-element::before {
                        content: '';
                        position: absolute;
                        right: -8px;
                        top: 1.35rem;
                        display: inline-block;
                        width: 16px;
                        height: 16px;
                        border-radius: 50%;
                        border: 2px solid #50a1ff;
                        background-color: #fff;
                    }
    
                    .timeline-element:nth-child(even)::before {
                        right: auto;
                        left: -8px;
                    }
    
                    .timeline-element:nth-child(even) {
                        margin-left: 50%;
                        padding-left: 2.5rem;
                        padding-right: 0;
                        text-align: left;
                    }
    
                    @media (max-width: 767.98px) {
                        .timeline::before {
                        left: 8px;
                        }
                    }
    
                    @media (max-width: 767.98px) {
                        .timeline-element {
                        width: 100%;
                        text-align: left;
                        padding-left: 2.5rem;
                        padding-right: 0;
                        }
                    }
    
                    @media (max-width: 767.98px) {
                        .timeline-element::before {
                        top: 1.25rem;
                        left: 1px;
                        }
                    }
    
                    @media (max-width: 767.98px) {
                        .timeline-element:nth-child(even) {
                        margin-left: 0rem;
                        }
                    }
    
                    @media (max-width: 767.98px) {
                        .timeline-element {
                        width: 100%;
                        text-align: left;
                        padding-left: 2.5rem;
                        padding-right: 0;
                        }
                    }
    
                    @media (max-width: 767.98px) {
                        .timeline-element:nth-child(even)::before {
                        left: 1px;
                        }
                    }
    
                    @media (max-width: 767.98px) {
                        .timeline-element::before {
                        top: 1.25rem;
                        }
                    }
                    </style>
                    
                    <hr class="w-header my-4">
                    <!-- <p class="lead text-center text-muted pt-2 mb-5">His</p> -->
                    
                    <div class="row">
                    <div class="col-lg-8 mx-auto">
    
                        <ol class="timeline">
                        <li class="timeline-element wow fadeIn">
                            <div class="wow fadeIn">
                                <h5 class="font-weight-bold dark-grey-text mb-3">
                                <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "First Standing";
                                }else{
                                    echo "Pertama Kali Berdiri";
                                }
                                ?>
                                </h5>
                                <p class="grey-text font-small"><time datetime="2017-02-08">1979</time></p>
                                <p class="text-muted">
                                <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "STTS was originally known as the Surabaya Institute of Electrical Technicians (ITES) which was established on March 1, 1979.
                                                                        ITES is located on Bali Street no. 17 Surabaya and under the auspices of the Nusantara Technical College Foundation.
                                                                        The implementation of this tertiary institution is based on awareness to participate in meeting the needs of higher education, especially in the field of electrical engineering.";
                                }else{
                                echo "STTS pada mulanya dikenal dengan Institut Teknisi Elektro Surabaya (ITES) yang didirikan pada tanggal 1 Maret 1979.
                                    ITES berlokasi di jalan Bali no. 17 Surabaya dan dibawah naungan Yayasan Perguruan Tinggi Teknik Nusantara.
                                    Penyelenggaraan perguruan tinggi ini didasarkan atas kesadaran untuk ikut berperan serta dalam memenuhi kebutuhan pendidikan tinggi khususnya di bidang teknik elektro.";
                                }
                                ?>
                                </p>
                            </div>
                        </li>
    
                        <li class="timeline-element">
                            <div class="wow fadeIn">
                                <h5 class="font-weight-bold dark-grey-text mb-3">
                                <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "Students Increase Many Every Year And Change Locations";
                                }else{
                                    echo "Mahasiswa Bertambah Banyak Setiap Tahun Dan Berpindah Lokasi";
                                }
                                ?>
                                
                                </h5>
                                <p class="grey-text font-small"><time datetime="2017-08-17">1980</time></p>
                                <p><img class="img-fluid z-depth-1-half rounded" src="assets/pcb.jpg" alt="..."></p>
                                <p class="text-muted">
                                <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "With the increasing number of students, the ITES campus has moved to Gubeng Pojok street no. 15 Surabaya.
                                                                            Now the place is used by Gracia Surabaya Middle School and High School.";
                                }else{
                                    echo "Dengan jumlah mahasiswa yang semakin banyak, kampus ITES pindah ke jalan Gubeng Pojok no. 15 Surabaya.
                                    Sekarang Tempat itu di pakai oleh SMP dan SMA Gracia Surabaya.";
                                }
                                ?>
                                        
                                </p>
                            </div>
                        </li>
    
                        <li class="timeline-element">
                            <div class="wow fadeIn">
                                <h5 class="font-weight-bold dark-grey-text mb-3">
                                <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "Changed Name to STIELS";
                                }else{
                                    echo "Berubah Nama Menjadi STIELS";
                                }
                                ?>
                                </h5>
                                <p class="grey-text font-small"><time datetime="2018-03-26">1982</time></p>
                                <p class="text-muted">
                                <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "ITES changed its name to Surabaya Electrical Engineering School (STIELS) and gained REGISTERED status to a complete bachelor program (engineer).
                                          To meet the public's need for computer experts with a fast education period, this year STIELS also held a Diploma 3 program in Information Management and Computer Engineering.";
                                }else{
                                    echo "ITES berubah nama menjadi Sekolah Tinggi ElektroTeknik Surabaya (STIELS) dan memperoleh status TERDAFTAR hingga program sarjana lengkap S1 (insinyur).
                                    Untuk memenuhi kebutuhan masyarakat akan tenaga ahli bidang komputer dengan masa pendidikan yang cepat, tahun ini juga STIELS menyelenggarakan program Diploma 3 jurusan Manajemen Informatika dan Teknik Komputer.";
                                }
                                ?>
                                        
                                </p>
                            </div>
                        </li>
    
                        <li class="timeline-element">
                            <div class="wow fadeIn">
                                <h5 class="font-weight-bold dark-grey-text mb-3">
                                <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "Ratification of the Undergraduate Program";
                                }else{
                                    echo "Pengesahan Program Sarjana";
                                }
                                
                                ?>
                                </h5>
                                <p class="grey-text font-small"><time datetime="2018-04-14">1983</time></p>
                                <p class="text-muted">
                                <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "With the endorsement from Kopertis Region VII, STIELS conducted a full degree program through the Minister of Education and Culture Decree No. RI. 261 / O / 1983. In December 1983,
                                                                            STIELS began taking the baccalaureate exam and the following year began taking the state bachelor's examination.
                                                                            STIELS is the first private tertiary institution outside Jakarta and Bandung to take the state undergraduate examination.";
                                }else{
                                    echo "Dengan pengesahan dari Kopertis Wilayah VII, STIELS menyelenggarakan program sarjana penuh melalui SK Menteri Pendidikan dan Kebudayaan RI No. 261/O/1983. Pada bulan Desember 1983,
                                    STIELS mulai mengikuti ujian sarjana muda dan pada tahun berikutnya mulai mengikuti ujian sarjana negara.
                                    STIELS merupakan perguruan tinggi swasta pertama di luar Jakarta dan Bandung yang mengikuti ujian sarjana negara.
                                    ";
                                }
                                ?>
                                        </p>
                            </div>
                        </li>
    
                        <li class="timeline-element">
                            <div class="wow fadeIn">
                                <h5 class="font-weight-bold dark-grey-text mb-3">
                                <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "Changed the name to STTS and changed locations";
                                }else{
                                    echo "Berubah Nama Menjadi STTS dan Berpindah Lokasi";
                                }
                                ?>
                                </h5>
                                <p class="grey-text font-small"><time datetime="2017-08-17">1985</time></p>
                                <p><img class="img-fluid z-depth-1-half rounded" src="assets/sekolahTinggi.jpg" alt="..."></p>
                                <p class="text-muted">
                                <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "STIELS changed its name to Surabaya Technical College (STTS) and opened a new major, namely Strata-1 Informatics and Computer Engineering.
                                                                    Since then the teaching and learning activities have been gradually transferred to the new campus on Jalan Ngagel Jaya Tengah no. 73-77 which is equipped with a laboratory building.";
                                }else{
                                    echo "STIELS berganti nama menjadi Sekolah Tinggi Teknik Surabaya (STTS) dan membuka jurusan baru, yaitu Strata-1 Teknik Informatika dan Komputer.
                                    Sejak itu pula kegiatan belajar mengajar secara bertahap dipindahkan ke kampus baru di jalan Ngagel Jaya Tengah no. 73-77 yang dilengkapi dengan gedung laboratorium.";
                                }
                                ?>
                                
                                </p>
                            </div>
                        </li>
    
                        <li class="timeline-element">
                            <div class="wow fadeIn">
                                <h5 class="font-weight-bold dark-grey-text mb-3">
                                <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "State Accredited and Recognized";
                                }else{
                                    echo "Terakreditasi dan Diakui Negara";
                                }
                                ?>
                                </h5>
                                <p class="grey-text font-small"><time datetime="2017-08-17">1988</time></p>
                                <p class="text-muted">
                                <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "The Accreditation Team of the Directorate General of Higher Education of the Republic of Indonesia decided to raise the status of REGISTERED to RECOGNIZED for all study programs at STTS, namely:
                                                                        <br>
                                                                        - Strata-1 Electrical Engineering
                                                                        <br>
                                                                        - Strata-1 Informatics and Computer Engineering
                                                                        <br>
                                                                        - Diploma-3 in Informatics Management and Computer Engineering";
                                }else{
                                    echo "Tim Akreditasi Direktorat Jendral Pendidikan Tinggi Republik Indonesia memutuskan kenaikan status TERDAFTAR menjadi DIAKUI untuk semua program studi yang ada di STTS, yaitu:
                                    <br>
                                    - Strata-1 Teknik Elektro
                                    <br>
                                    - Strata-1 Teknik Informatika dan Komputer
                                    <br>
                                    - Diploma-3 Manajemen Informatika dan Teknik Komputer";
                                }
                                ?>
                                
                                </p>
                            </div>
                        </li>
    
                        <li class="timeline-element">
                            <div class="wow fadeIn">
                                <h5 class="font-weight-bold dark-grey-text mb-3">
                                <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "Opened the Department of Industry";
                                }else{
                                    echo "Membuka Jurusan Industri";
                                }
                                ?>
                                </h5>
                                <p class="grey-text font-small"><time datetime="2018-04-14">1992</time></p>
                                <p><img class="img-fluid z-depth-1-half rounded" src="assets/teknikIndustri.jpg" alt="..."></p>
                                <p class="text-muted">
                                <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "STTS opens the Department of Industrial Engineering and Management, which equips students with a number of engineering and management sciences in the industrial field.
                                                                    Besides this program also emphasizes the use of computers as an element of control.";
                                }else{
                                    echo "STTS membuka jurusan Strata-1 Teknik dan Manajemen Industri, yang membekali mahasiswa dengan sejumlah teknik dan ilmu manajemen di bidang industri.
                                    Selain itu program ini juga menekankan penggunaan komputer sebagai unsur pengendalian.";
                                }
                                ?>
                                
                                </p>
                            </div>
                        </li>
    
                        <li class="timeline-element">
                            <div class="wow fadeIn">
                                <h5 class="font-weight-bold dark-grey-text mb-3">
                                <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "Government Increases Status from RECOGNIZED to AMED";
                                }else{
                                    echo "Pemerintah Menaikan Status dari DIAKUI menjadi DISAMAKAN";
                                }
                                ?>
                                </h5>
                                <p class="grey-text font-small"><time datetime="2018-04-14">1993</time></p>
                                <p class="text-muted">
                                <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "The Government through the Directorate General of Higher Education of the Republic of Indonesia has decided to increase the status from ACKNOWLEDGED to RECOMMENDED for 3 (three) study programs, namely:
                                                                            <br>
                                                                            - Strata-1 Electrical Engineering
                                                                            <br>
                                                                            - Strata-1 Informatics and Computer Engineering
                                                                            <br>
                                                                            - Diploma-3 in Informatics Management and Computer Engineering";
                                }else{
                                    echo "Pemerintah melalui Direktorat Jendral Pendidikan Tinggi Republik Indonesia memutuskan kenaikan status dari DIAKUI menjadi DISAMAKAN untuk 3 (tiga) program studi, yaitu:
                                    <br>
                                    - Strata-1 Teknik Elektro
                                    <br>
                                    - Strata-1 Teknik Informatika dan Komputer
                                    <br>
                                    - Diploma-3 Manajemen Informatika dan Teknik Komputer";
                                }
                                ?>
                                    
                                </p>
                            </div>
                        </li>
                        
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "The First Private Colleges in Eastern Indonesia became Accredited Colleges";
                            }else{
                                echo "Pertama Kali Sekolah Tinggi Swasta di Indonesia Timur menjadi Sekolah Tinggi Terakreditas";
                            }
                            ?>
                            </h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">1997</time></p>
                            <p class="text-muted">
                            <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "Opened the Department of Industry";
                                }else{
                                    echo "Membuka Jurusan Industri";
                                }
                                ?>
                                </h5>
                                <p class="grey-text font-small"><time datetime="2018-04-14">1992</time></p>
                                <p><img class="img-fluid z-depth-1-half rounded" src="assets/teknikIndustri.jpg" alt="..."></p>
                                <p class="text-muted">
                                <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "The first time the Ministry of Education and Culture implemented accreditation, STTS was established as an Accredited Higher Education Institution (the first in Eastern Indonesia among private universities of similar majors)";
                                }else{
                                    echo "Pertama kali Depdikbud menerapkan akreditasi, STTS ditetapkan sebagai Perguruan Tinggi Terakreditasi (yang pertama di Indonesia Timur diantara perguruan tinggi swasta jurusan sejenis)";
                                }
                                ?>
                            
                            </p>
                        </div>
                        </li>
    
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "First held a partnership with foreign universities to get a Bachelor's degree abroad";
                            }else{
                                echo "Pertama Kali Menyelenggarakan Kerja Sama dengan Universitas Luar Negeri untuk mendapatkan jenjang Sarjana di Luar Negeri";
                            }
                            
                            ?>
                            </h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2000</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="assets/swinburneUniversity.jpg" alt="..."></p>
                            <p class="text-muted">
                            <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "STTS is collaborating with Swinburne University of Technology (SUT) - Melbourne Australia, organizing the Bachelor of Science Information Technology (BIT) program links and further study programs for master's degrees at SUT.";
                                }else{
                                    echo "STTS bekerja sama dengan Swinburne University of Technology (SUT) - Melbourne Australia , menyelenggarakan link program Bachelor of Science Information Technology (BIT) dan program studi lanjut untuk jenjang master di SUT.";
                                }
                                ?>
                            
                            </p>
                        </div>
                        </li>
    
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "First Time Opened a private postgraduate program in East Java";
                            }else{
                                echo "Pertama Kali Membuka program pascasarjana swasta di Jawa Timur";
                            }
                            
                            ?>
                            </h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2003</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="assets/logoINF.png" alt="..."></p>
                            <p class="text-muted">
                            <?php
                                if (isset($_SESSION['bahasa'])) {
                                    echo "To produce human resources in the field of information technology, STTS holds a Postgraduate Program.
                                                                Postgraduate Program STTS Information Technology study program is the first private tertiary education graduate program in East Java based on information technology.";
                                }else{
                                    echo " Untuk menghasilkan sumber daya manusia di bidang teknologi informasi, STTS menyelenggarakan Program Pascasarjana. 
                                    Program Pascasarjana program studi Teknologi Informasi STTS merupakan program pascasarjana perguruan tinggi swasta pertama di Jatim yang berbasiskan teknologi informasi.";
                                }
                                ?>
                            </p>
                        </div>
                        </li>
    
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "Open Year Department of Business Information Systems";
                            }else{
                                echo "Tahun Terbuka Jurusan Sistem Informasi Bisnis";
                            }
                            ?>
                            </h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2006</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="assets/logoSIB.jpg" alt="..."></p>
                            <p class="text-muted">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "STTS runs a Business Information System undergraduate program, with the aim of producing graduates with abilities that are a blend of information science and management.";
                            }else{
                                echo "STTS menyelenggarakan program strata-1 Sistem Informasi Bisnis, dengan tujuan menghasilkan sarjana dengan kemampuan yang merupakan perpaduan antara ilmu informatika dan manajemen.";
                            }
                            ?>
                            </p>
                        </div>
                        </li>
                        
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "Open Year of Design";
                            }else{
                                echo "Tahun Terbuka Jurusan Desain";
                            }
                            ?>
                            </h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2008</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="assets/desainIMG.jpg" alt="..."></p>
                            <p class="text-muted">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "STTS is an information technology based university which is certainly able to contribute in the design field.
                                                            In line with the needs and demands of design workers who increasingly entered STTS in 2008 STTS opened the Visual Communication Design department and three years later, in 2011 STTS opened the Product Design department.";
                            }else{
                                echo "STTS merupakan Perguruan Tinggi berbasis teknologi informasi yang tentunya mampu memberikan kontribusi di bidang desain. 
                                Selaras dengan kebutuhan dan permintaan tenaga desain yang semakin banyak masuk ke STTS pada tahun 2008 STTS membuka jurusan Desain Komunikasi Visual dan tiga tahun kemudian , di tahun 2011 STTS membuka jurusan Desain Produk.";
                            }
                            ?>
                            </p>
                        </div>
                        </li>
    
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "Opened Informatics Engineering Bachelor Night Class";
                            }else{
                                echo "Membuka Kelas Malam Sarjana Teknik Informatika";
                            }
                            ?>
                            </h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2009</time></p>
                            <p class="text-muted">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "In 2009, STTS opened the S1 Informatics Engineering Study Program for IT professionals, where lectures were held in the afternoon until the evening. This activity is still carried out with the same quality as the S1 Informatics Engineering program held in the afternoon.";
                            }else{
                                echo "Tahun 2009, STTS membuka program Studi S1 Teknik Informatika untuk tenaga professional di bidang IT, dimana perkuliahan diselenggrakan pada sore hingga malam hari. Kegiatan ini tetap diselenggrakan dengan kualitas sama dengan program S1 Teknik Informatika yang diselenggrakan pada siang hari.";
                            }
                            ?>
                            
                            </p>
                        </div>
                        </li>
    
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "Addition of Tower of Eagle Building Facilities and Collaboration with 2 Universities";
                            }else{
                                echo "Penambahan Fasilitas Gedung Tower of Eagle dan Kerjasama dengan 2 Universitas";
                            }
                            
                            ?>
                            </h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2011</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="assets/gedungE.jpg" alt="..."></p>
                            <p class="text-muted">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "In 2011 STTS collaborated with 2 universities in the Netherlands, namely the University of Technology fonts and Saxion university of Technology.
                                                            The collaboration carried out is a Join degree so that students can get 2 similar degrees, namely an STTS bachelor's degree and a Bachelor's degree from Fontys University / Saxion University in approximately 4 years.
                                                            In 2011 STTS also added a new seven-story building facility named Tower of Eagle.
                                                            This building is used for E-library services, meeting rooms, lecture halls, theater-style lecture halls and meeting rooms for student activities.";
                            }else{
                                echo "Pada tahun 2011 STTS bekerja sama dengan 2 univesitas di Netherland yaitu fontys Univesity of Technologi dan Saxion university of Technology. 
                                Kerjasama yang dilakukan adalah Join degree sehingga mahasiswa bisa mendapatkan 2 gelar sejenis yaitu Gelar sarjana STTS dan gelar Bachelor dari Fontys University/ Saxion University dalam waktu kurang lebih 4 tahun. 
                                Pada tahun 2011 pula STTS menambah fasilitas satu gedung baru berlantai tujuh yang diberi nama Tower of Eagle. 
                                Gedung ini dipakai untuk layanan E-library, ruang pertemuan, ruang kuliah, ruang kuliah model theater dan ruang pertemuan bagi kegiatan kemahasiswaan.";
                            }
                            
                            ?>
                        </p>
                        </div>
                        </li>
                        
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "Collaborating with the University of New Castle";
                            }else{
                                echo "Bekerja Sama dengan Universitas of New Castle";
                            }
                            ?></h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2012</time></p>
                            <p class="text-muted">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "In 2012 STTS collaborated with the University of New Castle, Australia for cooperation in credit transfer courses for the Department of Informatics, so that STTS students can continue their studies to obtain a Bachelor of ICT at the University of New Castle Australia, both at the Australia Campus or at the Singapore Campus .";
                            }else{
                                echo "Pada tahun 2012 STTS bekerja sama dengan University of New Castle, Australia untuk kerjasama transfer kredit mata kuliah bagi jurusan Informatika, sehingga mahasiswa STTS dapat melanjutkan studi untuk meraih gelar Bachelor of ICT di University of New Castle Australia, baik di Australia Campus atau di Singapore Campus.";
                            }
                            ?>
                            
                            </p>
                        </div>
                        </li>
    
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "Collaborating with Universities and 5 of 6 Study Programs with Accreditation B";
                            }else{
                                echo "Bekerja Sama dengan Universitas dan 5 dari 6 Program Study dengan Akreditas B"; 
                            }
                            ?>
                            </h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2014</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="assets/jurusan.jpg" alt="..."></p>
                            <p class="text-muted">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "Cooperation between STTS and Malaysia University of Science and Technology (MUST) is established. The collaboration includes: <br>
                                                            - Offering undergraduate and postgraduate students to take joint or dual
                                                            degrees from MUST and STTS
                                                            - Placement of intern students
                                                            - Hold conferences, seminars, or workshops together, both for
                                                            internal or general <br>
                                                            - Hold a guest lecture
                                                            - Research collaboration and information exchange
                                                            <br>
                                                            <br>
                                                            5 of the 6 Undergraduate Study Programs at STTS have been accredited B: <br>
                                                            - S1 Electrical Engineering (B) <br>
                                                            - S1 Informatics Engineering (B)
                                                            - S1 Industrial Engineering (B)
                                                            - S1 Visual Communication Design (B) <br>
                                                            - S1 Product Design (B)
                                                            - S1 Information System (C) * Currently in the process of filing a recommendation.";
                            }else{
                                echo "Kerjasama STTS dan Malaysia University of Science and Technology(MUST) terjalin. Kerjasama tersebut mencakup: <br>
                                - Menawarkan mahasiswa S1 maupun S2 untuk mengambil joint atau dual 
                                degree dari MUST dan STTS <br>
                                - Penempatan mahasiswa magang <br>
                                - Mengadakan konferensi, seminar, atau workshop bersama, baik untuk 
                                internal maupun umum <br>
                                - Mengadakan kuliah tamu <br>
                                - Kerjasama penelitian dan tukar menukar informasi 
                                <br>
                                <br>
                                5 dari 6 Program Studi Sarjana di STTS telah terakreditasi B : <br>
                                - S1 Teknik Elektro (B) <br>
                                - S1 Teknik Informatika (B) <br>
                                - S1 Teknik Industri (B) <br>
                                - S1 Desain Komunikasi Visual (B) <br>
                                - S1 Desain Produk (B) <br>
                                - S1 Sistem Informasi (C) * Sedang dalam proses pengajuan rekareditasi.";
                            }
                            ?>
                            
                            </p>
                        </div>
                        </li>
    
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "Obtain Accreditation B from the National College Accreditation Agency";
                            }else{
                                echo "Mendapatkan Akreditas B dari Badan Akreditas Nasional Perguruan Tinggi";
                            }
                            
                            ?>
                            </h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2015</time></p>
                            <p class="text-muted">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "STTS was accredited B from the National Higher Education Accreditation Agency (BAN-PT) NoSK: 401 / SK / BAN-PT / Akred / V / 2015 and in the same year, STTS formed a collaboration with Dong Eui University, Busan, South Korea.";
                            }else{
                                echo "STTS mendapat akreditasi B dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) NoSK: 401/SK/BAN-PT/Akred/V/2015 dan di tahun yang sama, STTS menjalin kerjasama dengan Universitas Dong Eui,Busan, Korea Selatan.";
                            }
                            
                            ?>
                            
                            </p>
                        </div>
                        </li>
    
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "Get Professional Certification, Status Enhancement and Achieve Outstanding PT";
                            }else{
                                echo "Mendapatkan Sertifikasi Profesi, Peningkatan Status dan Meraih Predikat PT Unggulan";
                            }
                            
                            ?>
                            
                            </h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2016</time></p>
                            <p class="text-muted">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "<ul>
                                                            <li> Established the STTS Professional Certification Institute (LSP) under the National Certification Agency (BNSP). </li>
                                                            <li> Obtained status enhancement from the College of the Fostered group to the College of the Middle group. </li>
                                                            <li> Achieved the title of PT Unggulan. </li>
                                                            </ul>";
                            }else{
                                echo "<ul>
                                <li> Didirikan Lembaga Sertifikasi Profesi (LSP) STTS yang bernaung di bawah Badan Nasional Sertifikasi Nasional (BNSP). </li>
                                <li> Memperoleh peningkatan status dari Perguruan Tinggi kelompok Binaan menjadi Perguruan Tinggi kelompok Madya. </li>
                                <li> Meraih predikat PT Unggulan.</li>
                                </ul>";
                            }
                            
                            ?>
                            </p>
                        </div>
                        </li>
                        
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "Getting Facilities and Getting Predicate for 8 times";
                            }else{
                                echo "Mendapatkan Fasilitas dan Mendapatkan Predikat selama 8 kali";
                            }
                            
                            ?>
                            
                            </h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2017</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="assets/lingkunganSTTS.jpg" alt="..."></p>
                            <p class="text-muted">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "<ul>
                                                            <li> STTS inaugurated a new unit, the Office of International Affairs (KUI). This KUI is tasked with managing various kinds of STTS activities that are international in nature, for example international seminars, study abroad, student exchanges, and so on. </li>
                                                            <li> Once again won the title of Higher Education. The predicate has been won 8 times. </li>
                                                            </ul>";
                            }else{
                                echo "<ul>
                                <li>STTS meresmikan unit baru yaitu Kantor Urusan Internasional (KUI). KUI ini bertugas mengurusi berbagai macam kegiatan STTS yang bersifat internasional,misalnya seminar internasional, studi ke luar negeri, pertukaran mahasiswa, dan lain sebagainya.</li>
                                <li>Kembali meraih predikat Perguruan Tinggi Unggulan. Predikat tersebut sudah diraih sebanyak 8 kali.</li>
                                </ul>";
                            }
                            
                            ?>
                        </p>
                        </div>
                        </li>
    
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "Welcoming Head of LL-Dikti Region VII East Java in Graduation XXXV";
                            }else{
                                echo "Penyambutan Kepala LL-Dikti wilayah VII Jawa Timur dalam Wisuda XXXV";
                            }
                            
                            ?>
                            
                            </h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2018</time></p>
                            <p class="text-muted">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "In his remarks at the Graduation Ceremony of STTS XXXV in November 2018, the Head of LL-Dikti region VII East Java stated that STTS had reached
                                                            achievement to be the best Technical High School in the LL-Dikti area of ​​East Java VII region and was asked to continue to grow and contribute
                                                            for education in Indonesia.";
                            }else{
                                echo "Dalam Sambutan pada acara Wisuda STTS XXXV bulan November 2018, Kepala LL-Dikti wilayah VII Jawa Timur menyatakan bahwa STTS telah mencapai
                                prestasi menjadi Sekolah Tinggi bidang Teknik terbaik di lingkungan LL-Dikti wilayah VII JawaTimur dan diminta untuk terus berkembang dan memberikan kontribusi
                                bagi pendidikan di Indonesia.";
                            }
                            
                            ?>
                            
                            </p>
                        </div>
                        </li>
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "Change of name to Surabaya Integrated Science and Technology Institute (<i> i </i> STTS)";
                            }else{
                                echo "Perubahan Nama Menjadi Institut Sains dan Teknologi Terpadu Surabaya(<i>i</i>STTS)";
                            }
                            
                            ?>
                            </h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2019</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="assets/iSTTS.jpg" alt="..."></p>
                            <p class="text-muted">
                            <?php
                            if (isset($_SESSION['bahasa'])) {
                                echo "On June 24, 2019, Ministerial Decree Number 481 / KPT / I / 2019 concerning the Permit to change the name of the Surabaya Technical College (STTS) was officially
                                                            changed to Surabaya Integrated Science and Technology Institute (iSTTS).    ";
                            }else{
                                echo "Pada tanggal 24 Juni 2019, SK Menteri Nomor 481/KPT/ I /2019 tentang Izin perubahan bentuk nama Sekolah Tinggi Teknik Surabaya (STTS) telah resmi
                                berubah menjadi Institut Sains dan Teknologi Terpadu Surabaya (iSTTS).";
                            }
                            
                            ?>
                            
                            </p>
                    </div>
                        </li>
    
                        </ol>
    
                    </div>
                    </div>
                    
                </section>
                <!-- Section -->
                </div>
    
            </div>
</div>
</div>

</div>


<script>
      function gantiProfile() {
          $.get("profile.php",{},function (e){
            $(".ganti").html(e);
          });
      }
      function gantiLokasi() {
          $.get("lokasi.php",{},function (e){
            $(".ganti").html(e);
          });
      }
      function gantiGedung() {
          $.get("GedungFasilitas.php",{},function (e){
            $(".ganti").html(e);
          });
      }
      function GedungE() {
          $.get("GedungE.php",{},function (e){
            $(".ganti").html(e);
          });
      }
      function GedungN() {
          $.get("GedungN.php",{},function (e){
            $(".ganti").html(e);
          });
      }
      function GedungB() {
          $.get("GedungB.php",{},function (e){
            $(".ganti").html(e);
          });
      }
      function GedungL() {
          $.get("GedungL.php",{},function (e){
            $(".ganti").html(e);
          });
      }
      function GedungU() {
          $.get("GedungU.php",{},function (e){
            $(".ganti").html(e);
          });
      }

        $(document).on("click", "#btnGantiLokasi",function(e){
            e.preventDefault();
            gantiLokasi();
        })
        $(document).on("click", "#btnGantiGedung",function(e){
            e.preventDefault();
            gantiGedung();
        })
        $(document).on("click", "#btnGambarRincian",function(e){
            e.preventDefault();
            GedungE();
        })
        $(document).on("click", "#btnGambarRincian",function(e){
            e.preventDefault();
            GedungE();
        })
        $(document).on("click", "#btnRincianGedung",function(e){
            e.preventDefault();
            GedungE();
        })
        $(document).on("click", "#satu",function(e){
            e.preventDefault();
            GedungE();
        })
        $(document).on("click", "#dua",function(e){
            e.preventDefault();
            GedungN();
        })
        $(document).on("click", "#tiga",function(e){
            e.preventDefault();
            GedungB();
        })
        $(document).on("click", "#empat",function(e){
            e.preventDefault();
            GedungL();
        })
        $(document).on("click", "#lima",function(e){
            e.preventDefault();
            GedungU();
        })

      function rincianGedung(){
        $("#btnRincianGedung").click(function(){
            RincianGedung();
        });
        $("#btnGambarRincian").click(function(e){
            RincianGedung();
        });
      }
  </script>
<!-- HAPPY CODING!!! KEEP FIGHTING!!! -->

<?php include "tpl/footer.php"; ?>

</body>
</html>