    <!-- Login/Register -->

    

    <div class="loginRegister">

        <p>
            <?php if(!$session->isSignedIn()): ?>
                <a href="index.php?page=login">Uloguj Se</a> / <a href="index.php?page=register">Registruj Se</a>
            <?php else: ?>
                <a href="index.php?page=logout">Odjavite se </a>
            <?php endif; ?>
        </p>

    </div>


    <!-- Main navigacija -->

    <nav>

        <div class="logoNav allLogos">

        </div>

        <div class="menuNav">

            <ul class='menu mainMenu'>


            </ul>

        </div>

    </nav>

    <!-- Side navigacija trigger -->

    <a href="#!" id='triggerSideNav'><i class="fa fa-bars" aria-hidden="true"></i></a>

    <!-- Side navigacija -->

    <div class="sideNav">

        <ul class="menu sideMenu"></ul>

        <div class="allLogos logoSideNav"></div>

    </div>

    <!-- Preload -->

    <div class="preloader">

        <video id='playMeNow' src="assets/videos/preloadVideoNew.mp4" autoplay muted
            onloadedmetadata="this.muted = true" playsinline>

            <!-- <source src="assets/videos/preloadVideoNew.mp4" type="video/mp4" /> -->
            <!-- <source src="assets/videos/preloadVideo.ogg" type="video/ogg" />
        <source src="assets/videos/preloadVideo.webm" type="video/webm" /> -->
            <!-- Your browser does not support the video tag. -->

        </video>

        <script>
            document.getElementById('playMeNow').play();
        </script>

    </div>

    <!-- Go to top strelica -->

    <a href="#!" class='goTop'>

        <i class="fas fa-chevron-up"></i>

    </a>

    <!-- Youtube button -->

    <a href="https://www.youtube.com/channel/UC-QIbqxqc3HUu2piUkplyyw" target="_blank" class='ytButton'><i
            class="fab fa-youtube"></i></a>