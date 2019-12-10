<!-- Footer -->
<footer class="page-footer font-small deep-purple darken-4 pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-uppercase">LINK TO MANY PAGE</h5>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">LAYANAN MAHASISWA</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="sim.stts.edu">Sistem Informasi Mahasiswa</a>
                    </li>
                    <li>
                        <a href="http://e-resources.perpusnas.go.id/">Perpustakaan Nasional (PNRI)</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">WEBSITE JURUSAN</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="https://d3inf.stts.edu/">D3 - Sistem Informasi</a>
                    </li>
					<li>
                        <a href="https://informatika.istts.ac.id/">S1 - Teknik Informatika</a>
                    </li>
					<li>
                        <a href="http://s1infpro.stts.edu/">S1 - Teknik Informatika Profesional (kelas malam)</a>
                    </li>
                    <li>
                        <a href="http://sib.stts.edu/">S1 - Sistem Informasi Bisnis</a>
                    </li>
                    <li>
                        <a href="http://dkv.stts.edu/">S1 - Desain Komunikasi Visual</a>
                    </li>
                    <li>
                        <a href="http://industri.stts.edu/">S1 - Teknik Industri</a>
                    </li>
                    <li>
                        <a href="http://despro.stts.edu/">S1 - Desain Produk</a>
                    </li>
                    <li>
                        <a href="http://elektro.stts.edu/">S1 - Teknik Elektro</a>
                    </li>
					<li>
                        <a href="https://www.istts.ac.id/s2teknologiinformasi.php">S2 - Teknologi Informasi</a>
                    </li>
					<li>
                        <a href="https://bit.stts.edu/">Bachelor of Information Technology</a>
                    </li>
					<li>
                        <a href="https://bit.stts.edu/">Bachelor of Science in Cyber Forensic</a>
                    </li>
					<li>
                        <a href="https://bit.stts.edu/">Joint Degree</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> ISTTS and Made With Love</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="assets/js/mdb.min.js"></script>
<script type="text/javascript" src="assets/js/pagination.js"></script>
<script>
    new WOW().init();

    $(document).ready(function(){
        $("#section2").hide();
        $(".page1").addClass("active");

        $(".page2").click(function(){
            $("#section1").hide();
            $("#section2").show();
            $(".page2").addClass("active");
            $(".page1").removeClass("active");
        });

        $(".page1").click(function(){
            $("#section1").show();
            $("#section2").hide();
            $(".page1").addClass("active");
            $(".page2").removeClass("active");
        });
        
    });

    function refresh(e) {
    var param=e;
    $.post("bahasa.php",
      {param:param},
      function(result){
        location.reload(true);
      }
    );
  }
</script>
