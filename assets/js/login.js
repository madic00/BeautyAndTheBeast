$(document).ready(() => {

    $('#loginButtonSender').on('click', checkLogin);

});

function checkLogin() {

    // Niz za greske

    let loginErrors = [];

    // Object za data;

    let loginData = {};

    // Values of login fields

    let mailLoginField = document.getElementById('emailLoginField').value;

    let passLoginField = document.getElementById('passLoginField').value;

    // Paragrafi gresaka za login

    let emailLoginErrorPar = document.getElementById('emailLoginErrorPar');

    let passLoginErrorPar = document.getElementById('passLoginErrorPar');

    // Regexi za login

    let regexMailLogin = /^[a-zšđčćž\,\/\.\-\_\d\.\!\?]+\@[a-z]+(\.[a-z]+){1,2}$/;

    let regexPassLogin = /^.{8,16}$/;

    function checkLoginRegex(poljeLogin, regexLogin, errorLogin, propName) {

        if (regexLogin.test(poljeLogin)) {

            errorLogin.style.display = 'none';

            loginData[propName] = poljeLogin;

        }

        else {

            errorLogin.style.display = 'block';

            loginErrors.push("greska");

        }

    };

    checkLoginRegex(passLoginField, regexPassLogin, passLoginErrorPar, "pass");

    checkLoginRegex(mailLoginField, regexMailLogin, emailLoginErrorPar, "email");

    if (loginErrors.length == 0) {

        // Ajax za Madica

        loginData.btnLogin = true;

        // console.log(loginData);

        ajaxPost("api/user/login.php", loginData, data => {
            alert(data.responseText);

            if (data.status) {

                console.log(data.responseText + " Upada u ovaj if");

                window.location.href = "index.php";
            } else {
                let out = "";

                for (let err of data.errors) {

                    out += `<p>${err}</p>`;

                }

                $("#loginErrorServer").show();
                $("#loginErrorServer").html(out);

            }
        });

    } else {

        console.log(loginErrors);

    }

}