<?php include "tpl/header.php"; ?>
<?php include "tpl/white-navbar.php"; ?>
<script src="assets/js/jquery-3.4.1.min.js"></script>
<!-- Intro -->
<div class="card card-intro blue-gradient">

    <div class="card-body white-text rgba-black-light text-center">

        <!--Grid row-->
        <div class="row d-flex justify-content-center">

            <!--Grid column-->
            <div class="col-md-6">

                <p class="h5 mb-2">
                    Tentang
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
                TENTANG
            </a>
            <a href="" class="list-group-item list-group-item-action" id="btnGantiProfile">Profil</a>
            <a href="" class="list-group-item list-group-item-action" id="btnGantiLokasi">Lokasi</a>
            <a href="" class="list-group-item list-group-item-action" onclick="gantiGedung()">Gedung & Fasilitas</a>
            <a href="" class="list-group-item list-group-item-action" onclick="gantiLembaga()">Lembaga</a>
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
                                <h5 class="font-weight-bold dark-grey-text mb-3">Pertama Kali Berdiri</h5>
                                <p class="grey-text font-small"><time datetime="2017-02-08">1979</time></p>
                                <p class="text-muted">
                                        STTS pada mulanya dikenal dengan Institut Teknisi Elektro Surabaya (ITES) yang didirikan pada tanggal 1 Maret 1979.
                                         ITES berlokasi di jalan Bali no. 17 Surabaya dan dibawah naungan Yayasan Perguruan Tinggi Teknik Nusantara.
                                         Penyelenggaraan perguruan tinggi ini didasarkan atas kesadaran untuk ikut berperan serta dalam memenuhi kebutuhan pendidikan tinggi khususnya di bidang teknik elektro.
                                </p>
                            </div>
                        </li>
    
                        <li class="timeline-element">
                            <div class="wow fadeIn">
                                <h5 class="font-weight-bold dark-grey-text mb-3">Mahasiswa Bertambah Banyak Setiap Tahun Dan Berpindah Lokasi</h5>
                                <p class="grey-text font-small"><time datetime="2017-08-17">1980</time></p>
                                <p><img class="img-fluid z-depth-1-half rounded" src="assets/pcb.jpg" alt="..."></p>
                                <p class="text-muted">
                                        Dengan jumlah mahasiswa yang semakin banyak, kampus ITES pindah ke jalan Gubeng Pojok no. 15 Surabaya.
                                        Sekarang Tempat itu di pakai oleh SMP dan SMA Gracia Surabaya.
                                </p>
                            </div>
                        </li>
    
                        <li class="timeline-element">
                            <div class="wow fadeIn">
                                <h5 class="font-weight-bold dark-grey-text mb-3">Berubah Nama Menjadi STIELS</h5>
                                <p class="grey-text font-small"><time datetime="2018-03-26">1982</time></p>
                                <p class="text-muted">
                                        ITES berubah nama menjadi Sekolah Tinggi ElektroTeknik Surabaya (STIELS) dan memperoleh status TERDAFTAR hingga program sarjana lengkap S1 (insinyur).
                                        Untuk memenuhi kebutuhan masyarakat akan tenaga ahli bidang komputer dengan masa pendidikan yang cepat, tahun ini juga STIELS menyelenggarakan program Diploma 3 jurusan Manajemen Informatika dan Teknik Komputer.
                                </p>
                            </div>
                        </li>
    
                        <li class="timeline-element">
                            <div class="wow fadeIn">
                                <h5 class="font-weight-bold dark-grey-text mb-3">Pengesahan Program Sarjana</h5>
                                <p class="grey-text font-small"><time datetime="2018-04-14">1983</time></p>
                                <p class="text-muted">
                                        Dengan pengesahan dari Kopertis Wilayah VII, STIELS menyelenggarakan program sarjana penuh melalui SK Menteri Pendidikan dan Kebudayaan RI No. 261/O/1983. Pada bulan Desember 1983,
                                        STIELS mulai mengikuti ujian sarjana muda dan pada tahun berikutnya mulai mengikuti ujian sarjana negara.
                                        STIELS merupakan perguruan tinggi swasta pertama di luar Jakarta dan Bandung yang mengikuti ujian sarjana negara.
                                </p>
                            </div>
                        </li>
    
                        <li class="timeline-element">
                            <div class="wow fadeIn">
                                <h5 class="font-weight-bold dark-grey-text mb-3">Berubah Nama Menjadi STTS dan Berpindah Lokasi</h5>
                                <p class="grey-text font-small"><time datetime="2017-08-17">1985</time></p>
                                <p><img class="img-fluid z-depth-1-half rounded" src="assets/sekolahTinggi.jpg" alt="..."></p>
                                <p class="text-muted">
                                STIELS berganti nama menjadi Sekolah Tinggi Teknik Surabaya (STTS) dan membuka jurusan baru, yaitu Strata-1 Teknik Informatika dan Komputer.
                                Sejak itu pula kegiatan belajar mengajar secara bertahap dipindahkan ke kampus baru di jalan Ngagel Jaya Tengah no. 73-77 yang dilengkapi dengan gedung laboratorium.
                                </p>
                            </div>
                        </li>
    
                        <li class="timeline-element">
                            <div class="wow fadeIn">
                                <h5 class="font-weight-bold dark-grey-text mb-3">Terakreditasi dan Diakui Negara</h5>
                                <p class="grey-text font-small"><time datetime="2017-08-17">1988</time></p>
                                <p class="text-muted">
                                Tim Akreditasi Direktorat Jendral Pendidikan Tinggi Republik Indonesia memutuskan kenaikan status TERDAFTAR menjadi DIAKUI untuk semua program studi yang ada di STTS, yaitu:
                                <br>
                                - Strata-1 Teknik Elektro
                                <br>
                                - Strata-1 Teknik Informatika dan Komputer
                                <br>
                                - Diploma-3 Manajemen Informatika dan Teknik Komputer
                                </p>
                            </div>
                        </li>
    
                        <li class="timeline-element">
                            <div class="wow fadeIn">
                                <h5 class="font-weight-bold dark-grey-text mb-3">Membuka Jurusan Industri</h5>
                                <p class="grey-text font-small"><time datetime="2018-04-14">1992</time></p>
                                <p><img class="img-fluid z-depth-1-half rounded" src="assets/teknikIndustri.jpg" alt="..."></p>
                                <p class="text-muted">
                                STTS membuka jurusan Strata-1 Teknik dan Manajemen Industri, yang membekali mahasiswa dengan sejumlah teknik dan ilmu manajemen di bidang industri.
                                Selain itu program ini juga menekankan penggunaan komputer sebagai unsur pengendalian.
                                </p>
                            </div>
                        </li>
    
                        <li class="timeline-element">
                            <div class="wow fadeIn">
                                <h5 class="font-weight-bold dark-grey-text mb-3">Pemerintah Menaikan Status dari DIAKUI menjadi DISAMAKAN</h5>
                                <p class="grey-text font-small"><time datetime="2018-04-14">1993</time></p>
                                <p class="text-muted">
                                    Pemerintah melalui Direktorat Jendral Pendidikan Tinggi Republik Indonesia memutuskan kenaikan status dari DIAKUI menjadi DISAMAKAN untuk 3 (tiga) program studi, yaitu:
                                    <br>
                                    - Strata-1 Teknik Elektro
                                    <br>
                                    - Strata-1 Teknik Informatika dan Komputer
                                    <br>
                                    - Diploma-3 Manajemen Informatika dan Teknik Komputer
                                </p>
                            </div>
                        </li>
                        
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">Pertama Kali Sekolah Tinggi Swasta di Indonesia Timur menjadi Sekolah Tinggi Terakreditas</h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">1997</time></p>
                            <p class="text-muted">
                                Pertama kali Depdikbud menerapkan akreditasi, STTS ditetapkan sebagai Perguruan Tinggi Terakreditasi (yang pertama di Indonesia Timur diantara perguruan tinggi swasta jurusan sejenis)
                            </p>
                        </div>
                        </li>
    
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">Pertama Kali Menyelenggarakan Kerja Sama dengan Universitas Luar Negeri untuk mendapatkan jenjang Sarjana di Luar Negeri</h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2000</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="assets/swinburneUniversity.jpg" alt="..."></p>
                            <p class="text-muted">
                            STTS bekerja sama dengan Swinburne University of Technology (SUT) - Melbourne Australia , menyelenggarakan link program Bachelor of Science Information Technology (BIT) dan program studi lanjut untuk jenjang master di SUT.
                            </p>
                        </div>
                        </li>
    
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">Pertama Kali Membuka program pascasarjana swasta di Jawa Timur</h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2003</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="assets/logoINF.png" alt="..."></p>
                            <p class="text-muted">
                            Untuk menghasilkan sumber daya manusia di bidang teknologi informasi, STTS menyelenggarakan Program Pascasarjana. 
                            Program Pascasarjana program studi Teknologi Informasi STTS merupakan program pascasarjana perguruan tinggi swasta pertama di Jatim yang berbasiskan teknologi informasi.
                            </p>
                        </div>
                        </li>
    
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">Tahun Terbuka Jurusan Sistem Informasi Bisnis</h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2006</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="assets/logoSIB.jpg" alt="..."></p>
                            <p class="text-muted">
                            STTS menyelenggarakan program strata-1 Sistem Informasi Bisnis, dengan tujuan menghasilkan sarjana dengan kemampuan yang merupakan perpaduan antara ilmu informatika dan manajemen.
                            </p>
                        </div>
                        </li>
                        
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">Tahun Terbuka Jurusan Desain</h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2008</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="assets/desainIMG.jpg" alt="..."></p>
                            <p class="text-muted">
                            STTS merupakan Perguruan Tinggi berbasis teknologi informasi yang tentunya mampu memberikan kontribusi di bidang desain. 
                            Selaras dengan kebutuhan dan permintaan tenaga desain yang semakin banyak masuk ke STTS pada tahun 2008 STTS membuka jurusan Desain Komunikasi Visual dan tiga tahun kemudian , di tahun 2011 STTS membuka jurusan Desain Produk.
                            </p>
                        </div>
                        </li>
    
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">Membuka Kelas Malam Sarjana Teknik Informatika</h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2009</time></p>
                            <p class="text-muted">
                            Tahun 2009, STTS membuka program Studi S1 Teknik Informatika untuk tenaga professional di bidang IT, dimana perkuliahan diselenggrakan pada sore hingga malam hari. Kegiatan ini tetap diselenggrakan dengan kualitas sama dengan program S1 Teknik Informatika yang diselenggrakan pada siang hari.
                            </p>
                        </div>
                        </li>
    
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">Penambahan Fasilitas Gedung Tower of Eagle dan Kerjasama dengan 2 Universitas</h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2011</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="assets/gedungE.jpg" alt="..."></p>
                            <p class="text-muted">
                            Pada tahun 2011 STTS bekerja sama dengan 2 univesitas di Netherland yaitu fontys Univesity of Technologi dan Saxion university of Technology. 
                            Kerjasama yang dilakukan adalah Join degree sehingga mahasiswa bisa mendapatkan 2 gelar sejenis yaitu Gelar sarjana STTS dan gelar Bachelor dari Fontys University/ Saxion University dalam waktu kurang lebih 4 tahun. 
                            Pada tahun 2011 pula STTS menambah fasilitas satu gedung baru berlantai tujuh yang diberi nama Tower of Eagle. 
                            Gedung ini dipakai untuk layanan E-library, ruang pertemuan, ruang kuliah, ruang kuliah model theater dan ruang pertemuan bagi kegiatan kemahasiswaan.
                        </p>
                        </div>
                        </li>
                        
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">Bekerja Sama dengan Universitas of New Castle</h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2012</time></p>
                            <p class="text-muted">
                            Pada tahun 2012 STTS bekerja sama dengan University of New Castle, Australia untuk kerjasama transfer kredit mata kuliah bagi jurusan Informatika, sehingga mahasiswa STTS dapat melanjutkan studi untuk meraih gelar Bachelor of ICT di University of New Castle Australia, baik di Australia Campus atau di Singapore Campus.
                            </p>
                        </div>
                        </li>
    
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">Bekerja Sama dengan Universitas dan 5 dari 6 Program Study dengan Akreditas B</h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2014</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="assets/jurusan.jpg" alt="..."></p>
                            <p class="text-muted">
                            Kerjasama STTS dan Malaysia University of Science and Technology(MUST) terjalin. Kerjasama tersebut mencakup: <br>
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
                            - S1 Sistem Informasi (C) * Sedang dalam proses pengajuan rekareditasi.
                            </p>
                        </div>
                        </li>
    
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">Mendapatkan Akreditas B dari Badan Akreditas Nasional Perguruan Tinggi</h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2015</time></p>
                            <p class="text-muted">
                            STTS mendapat akreditasi B dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) NoSK: 401/SK/BAN-PT/Akred/V/2015 dan di tahun yang sama, STTS menjalin kerjasama dengan Universitas Dong Eui,Busan, Korea Selatan.
                            </p>
                        </div>
                        </li>
    
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">Mendapatkan Sertifikasi Profesi, Peningkatan Status dan Meraih Predikat PT Unggulan</h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2016</time></p>
                            <p class="text-muted">
                            <ul>
                            <li> Didirikan Lembaga Sertifikasi Profesi (LSP) STTS yang bernaung di bawah Badan Nasional Sertifikasi Nasional (BNSP). </li>
                            <li> Memperoleh peningkatan status dari Perguruan Tinggi kelompok Binaan menjadi Perguruan Tinggi kelompok Madya. </li>
                            <li> Meraih predikat PT Unggulan.</li>
                            </ul>
                            </p>
                        </div>
                        </li>
                        
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">Mendapatkan Fasilitas dan Mendapatkan Predikat selama 8 kali</h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2017</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="assets/lingkunganSTTS.jpg" alt="..."></p>
                            <p class="text-muted">
                            <ul>
                            <li>STTS meresmikan unit baru yaitu Kantor Urusan Internasional (KUI). KUI ini bertugas mengurusi berbagai macam kegiatan STTS yang bersifat internasional,misalnya seminar internasional, studi ke luar negeri, pertukaran mahasiswa, dan lain sebagainya.</li>
                            <li>Kembali meraih predikat Perguruan Tinggi Unggulan. Predikat tersebut sudah diraih sebanyak 8 kali.</li>
                            </ul>
                        </p>
                        </div>
                        </li>
    
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">Penyambutan Kepala LL-Dikti wilayah VII Jawa Timur dalam Wisuda XXXV</h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2018</time></p>
                            <p class="text-muted">
                            Dalam Sambutan pada acara Wisuda STTS XXXV bulan November 2018, Kepala LL-Dikti wilayah VII Jawa Timur menyatakan bahwa STTS telah mencapai
                            prestasi menjadi Sekolah Tinggi bidang Teknik terbaik di lingkungan LL-Dikti wilayah VII JawaTimur dan diminta untuk terus berkembang dan memberikan kontribusi
                            bagi pendidikan di Indonesia.
                            </p>
                        </div>
                        </li>
                        <li class="timeline-element">
                        <div class="wow fadeIn">
                            <h5 class="font-weight-bold dark-grey-text mb-3">Perubahan Nama Menjadi Institut Sains dan Teknologi Terpadu Surabaya(<i>i</i>STTS)</h5>
                            <p class="grey-text font-small"><time datetime="2018-04-14">2019</time></p>
                            <p><img class="img-fluid z-depth-1-half rounded" src="assets/iSTTS.jpg" alt="..."></p>
                            <p class="text-muted">
                            Pada tanggal 24 Juni 2019, SK Menteri Nomor 481/KPT/ I /2019 tentang Izin perubahan bentuk nama Sekolah Tinggi Teknik Surabaya (STTS) telah resmi
                            berubah menjadi Institut Sains dan Teknologi Terpadu Surabaya (iSTTS).
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

      $(document).ready(function(){
        $("#btnGantiLokasi").click(function(e){
            e.preventDefault();
            gantiLokasi();
        });
        $("#btnGantiProfile").click(function(e){
            e.preventDefault();
            gantiProfile();
        });
      });
  </script>
<!-- HAPPY CODING!!! KEEP FIGHTING!!! -->

<?php include "tpl/footer.php"; ?>

</body>
</html>