    <!-- Footer -->

    <footer class='container-fluid'>

        <div class="row rowFooter">

            <div class="col-lg-4 colSocialsFooter">

                <div class="socialsFooter">

                    <p>Pratite me :</p>

                    <div class="socialsIcons">

                        <a href="https://www.instagram.com/milos_premcevic/" id='igIcon' target="_blank"><i
                                class="fab fa-instagram"></i></a>

                        <a href="https://www.youtube.com/channel/UC-QIbqxqc3HUu2piUkplyyw" target="_blank"><i
                                class="fab fa-youtube"></i></a>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 colSocialsNav">

                <p>Navigacija</p>

                <div class="footerNav">

                    <ul class='menu footerMenu'>


                    </ul>

                </div>

            </div>

            <div class="col-lg-4 colLogoFooter">

                <div class="logoFooter">

                    <div class="allLogos">

                    </div>

                    <p>Copyright &copy; 2020 Beauty And The Beast. <br />All rights reserved.</p>

                </div>

            </div>

        </div>

    </footer>

    <!-- jQuery -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Bootstrap -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JS fajlovi -->

    <script src="assets/js/nav.js"></script>
    
    <?php 
        $filename = "assets/js/$page.js";

        if(file_exists($filename)): ?>

    <script src="assets/js/<?= $page ?>.js"></script>

    <?php endif; ?>
    
    <script src="assets/js/preloader.js"></script>

</body>

</html>