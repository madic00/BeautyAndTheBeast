    <!-- Main sekcija -->

    <main id='goTopMain'>

        <div class="fader">

            <div class="container infoMain">

                <div class="infoBlock">

                    <img src="assets/images/milosLogo.png" class='img-fluid' alt="Logo" />

                    <a href="#goTopKoSamJa">Vreme je za promenu</a>

                </div>

            </div>

        </div>

    </main>

    <!-- Ko sam ja sekcija -->

    <section class="container-fluid koSamJa specialSection" id="goTopKoSamJa">

        <div class="row rowKoSamJa rowSpec">

            <div class="col-lg-6 colKoSamJa1">

                <div class="koSamJaInfo">

                    <h2>Ko Sam Ja ? </h2>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quae numquam, animi itaque
                        ullam
                        hic
                        eos sed vitae accusantium minima qui magnam. Libero consequuntur eum amet, beatae dolorem
                        eos
                        aut.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam iusto est esse nobis cum quia
                        cupiditate alias, beatae magni aperiam ipsa eveniet ratione earum magnam expedita officiis
                        corporis
                        quam sapiente.
                    </p>

                </div>

            </div>

            <div class="col-lg-6 colKoSamJa2">

                <div class="koSamJaSlika">

                    <img src="assets/images/milosPremcevicPictureOne.jpg" class='img-fluid' alt="Milos Premcevic" />

                </div>

            </div>

        </div>

    </section>

    <!-- Zasto bas ja sekcija -->

    <section class="container-fluid zastoBasJa specialSection" id='goTopZastoBasJa'>

        <div class="row rowZastoBasJa rowSpec">

            <div class="col-lg-6 colZastoBasJa1">

                <video id='videoZastoBasJa' autoplay muted src="assets/videos/workoutVideoNew.mp4" loop
                    playsinline></video>

            </div>

            <div class="col-lg-6 colZastoBasJa2 colKoSamJa1">

                <div class="zastoBasJaInfo koSamJaInfo">

                    <h2>Zašto Baš Ja ?</h2>

                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, odio doloremque perferendis
                        qui
                        ut iste illum vero recusandae ipsa, molestiae earum veritatis quae illo ratione sint
                        excepturi
                        consequatur a repellendus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam
                        blanditiis ratione culpa enim voluptatum voluptatibus. Voluptatum at, veritatis sed tempore
                        iure
                        amet, minima numquam cupiditate voluptatem cum accusamus aspernatur voluptatibus?</p>

                    <a href="#!" id='rezultatiKlijenata'>Rezultati Klijenata</a>

                </div>

            </div>

        </div>

    </section>

    <!-- Planovi -->

    <section class="container-fluid plans" id='goTopPlans'>

        <h2>Planovi</h2>

        <div class="plansCont container">

            <div class="row rowPlans">

                <!-- <div class="col-lg-4 colPlanIshrane">

                    <div class="planBox planIshrane">

                        <div class="planPictureHolder">

                            <img src="assets/images/planIshrane.jpg" class='img-fluid' alt="Plan Ishrane" />

                        </div>

                        <div class="aboutPlan">

                            <h3>Plan Ishrane</h3>

                            <p>Cena plana<br><span>30&euro;</span></p>

                            <a href="#!" class='orderPlanButton'>Naruči Plan</a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 colPlanIshrane colSpecialPlan">

                    <h3>BEST SELLER</h3>

                    <div class="planBox planIshraneITreninga">

                        <div class="planPictureHolder">

                            <img src="assets/images/planIshrane.jpg" class='img-fluid' alt="Plan Ishrane" />

                        </div>

                        <div class="aboutPlan">

                            <h3>Trening<br>+<br>Ishrana</h3>

                            <p>Cena plana<br><span>40&euro;</span></p>

                            <a href="#!" class='orderPlanButton'>Naruči Plan</a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 colPlanIshrane colPlanTreninga">

                    <div class="planBox planTreninga">

                        <div class="aboutPlan">

                            <h3>Plan Treninga</h3>

                            <p>Cena plana<br><span>35&euro;</span></p>

                            <a href="#!" class='orderPlanButton'>Naruči Plan</a>

                        </div>

                        <div class="planPictureHolder">

                            <img src="assets/images/planTreninga.jpg" class='img-fluid' alt="Plan Treninga" />

                        </div>

                    </div>

                </div> -->

            </div>

        </div>

    </section>

    <!-- Kontakt forma -->

    <section class="contactMe container-fluid" id='goTopContact'>

        <h2>Imate Pitanje ?</h2>

        <div class="container contactMeContainer">

            <div class="topPartContact">

                <p>Kontaktirajte me putem Instagrama :</p>

                <div class="instagramInfo">
                    <p><a href="https://www.instagram.com/milos_premcevic/" id='igName'
                            target="_blank">@milos_premcevic</a> ili kliknite na ikonicu Instagrama
                        <a href="https://www.instagram.com/milos_premcevic/" id='igIcon' target="_blank"><i
                                class="fab fa-instagram"></i></a>
                    <p>
                </div>

            </div>

            <p id='midPartContact'>ILI</p>

            <div class="bottomPartContact">

                <p>Popunite Formu</p>

                <input type="text" id='imePrezimeContact' class="formField" name="fullName"
                    placeholder="Vaše ime i prezime ..." />

                <p id='firstLastNameContactError' class="contactFormErrorPar">Ime i prezime nije dobro uneto.
                    <br>Primer
                    pravilno unetog imena i
                    prezimena : Jasmina Lukić, Nikola Hadzi Ristić, ...</p>

                <br>

                <textarea placeholder="Vaše pitanje ..." class="formField" name="questionForMilos" id="pitanjeZaMilosa"
                    cols="30" rows="10"></textarea>

                <p id='sendMessageContactError' class="contactFormErrorPar">Morate napisati barem karaktera u polju
                    za
                    pitanje.
                </p>

                <br>

                <button id='posaljiPitanje'>Pošaljite Pitanje</button>


            </div>

        </div>

    </section>