<!-- Footer -->
<footer class="page-footer font-small bg-primary pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-uppercase">Footer Content</h5>
                <p>Here you can use rows and columns to organize your footer content.</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Links</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Jurusan</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">S1 - Teknik Informatika</a>
                    </li>
                    <li>
                        <a href="#!">S1 - Sistem Informasi Bisnis</a>
                    </li>
                    <li>
                        <a href="#!">S1 - Desain Komunikasi Visual</a>
                    </li>
                    <li>
                        <a href="#!">S1 - Teknik Industri</a>
                    </li>
                    <li>
                        <a href="#!">S1 - Desain Produk</a>
                    </li>
                    <li>
                        <a href="#!">S1 - Teknik Elektro</a>
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
</script>

</body>

</html>