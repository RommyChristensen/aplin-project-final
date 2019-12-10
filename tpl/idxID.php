<nav class="navbar navbar-trans fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href=""><img src="assets/img/logo_stts.png" width="200" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="agenda.php">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="berita.php">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aktivitasMahasiswa.php">Aktivitas Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="akademik.php">Akademik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dosen.php">Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="history.php">Tentang</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdownBahasa" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Bahasa</a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="dropdownBahasa">
                            <a class="dropdown-item bahasa" name='id' modeBahasa='test' onclick='cekBahasa("id")'>Indonesia</a>
                            <a class="dropdown-item bahasa" name="en" modeBahasa='en' onclick='cekBahasa("en")'>English</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        function cekBahasa(e){
            var param=e;
            //alert(param);
            refresh(param);
        }
    </script>