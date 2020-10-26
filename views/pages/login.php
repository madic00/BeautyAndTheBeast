    <?php 
        if($session->isSignedIn()) {
            redirect("index.php");
        }

    ?>    
    
    <div class="loginRegisterBlock">

        <h2>Uloguj Se</h2>

        <div id='loginErrorServer' class="loginErrorPar"></div>

        <input type="email" required="required" class='loginField' id="emailLoginField" placeholder="Email..." />

        <p id='emailLoginErrorPar' class="loginErrorPar">Email nije u dobrom formatu.</p>

        <input type="password" placeholder="Lozinika..." class="loginField" id="passLoginField" required="required" />

        <p id="passLoginErrorPar" class="loginErrorPar">Lozinka mora da sadrži između 8 i 16 karaktera.</p>

        <button id='loginButtonSender' class='buttonLoginRegister'>Uloguj Se</button>

    </div>
