    <?php 
        if($session->isSignedIn()) {
            redirect("index.php");
        }

    ?>
    
    <div class="loginRegisterBlock">

        <h2>Registruj Se</h2>

        <div id='registerErrorServer' class="loginErrorPar"></div>

        <input type="text" required="required" class='loginField' id="firstNameRegisterField"
            placeholder="Vaše ime..." />

        <p id='firstNameRegisterErrorPar' class="loginErrorPar">Vaše ime mora početi velikim slovom i ne sme imati
            brojeve. <br /> Mora imati više od 2 slova, i manje od 20 slova. <br /> Ako vaše ime sadrži dve reči,
            svaka reč počinje velikim slovom. Npr : Ana Marija</p>

        <input type="text" placeholder="Vaše prezime..." class="loginField" id="lastNameRegisterField"
            required="required" />

        <p id="lastNameRegisterErrorPar" class="loginErrorPar">Vaše prezime mora početi velikim slovom i ne sme imati
            brojeve. <br /> Mora imati više od 2 slova, i manje od 20 slova. <br /> Ako vaše prezime sadrži dve reči,
            svaka reč počinje velikim slovom. Npr : Hadzi Ristić</p>

        <input type="text" placeholder="Vaš grad..." class="loginField" id="cityRegisterField" required="required" />

        <p id="cityRegisterErrorPar" class="loginErrorPar">Grad mora početi velikim slovom. <br /> Ako Vaš grad ima više
            reči u imenu, svaka reč mora početi velikim slovom, npr : Novi Pazar, Novi Sad, ...</p>

        <input type="email" placeholder="Vaš email..." class="loginField" id="emailRegisterField" required="required" />

        <p id="mailRegisterErrorPar" class="loginErrorPar">Email koji ste uneli nije u dobrom formatu, ili već postoji
            nalog sa ovakim mailom.</p>

        <input type="password" placeholder="Vaša lozinka..." class="loginField" id="passwordRegisterField"
            required="required" />

        <p id="passwordRegisterErrorPar" class="loginErrorPar">Lozinka mora da sadrži između 8 i 16 karaktera.</p>

        <input type="password" placeholder="Vaša lozinka..." class="loginField" id="passwordRepeatRegisterField"
            required="required" />

        <p id="passwordRepeatRegisterErrorPar" class="loginErrorPar">Ponovljena lozinka se ne poklapa sa lozinkom koju
            ste uneli.</p>

        <button id='registerButtonSender' class='buttonLoginRegister'>Registruj Se</button>

    </div>