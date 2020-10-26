$(document).ready(() => {

    $('#registerButtonSender').on('click', checkLogin);

});

function checkLogin() {

    // Niz za greske

    let registerErrors = [];

    // Object za podatke

    let registerData = {};

    // Values of login fields

    let firstNameRegisterField = document.getElementById('firstNameRegisterField').value;

    let lastNameRegisterField = document.getElementById('lastNameRegisterField').value;

    let cityRegisterField = document.getElementById('cityRegisterField').value;

    let mailRegisterField = document.getElementById('emailRegisterField').value;

    let passRegisterField = document.getElementById('passwordRegisterField').value;

    let passRepeatRegisterField = document.getElementById('passwordRepeatRegisterField').value;

    // Paragrafi gresaka za login

    let firstNameRegisterErrorPar = document.getElementById('firstNameRegisterErrorPar');

    let lastNameRegisterErrorPar = document.getElementById('lastNameRegisterErrorPar');

    let cityRegisterErrorPar = document.getElementById('cityRegisterErrorPar');

    let mailRegisterErrorPar = document.getElementById('mailRegisterErrorPar');

    let passRegisterErrorPar = document.getElementById('passwordRegisterErrorPar');

    let passRepeatRegisterErrorPar = document.getElementById('passwordRepeatRegisterErrorPar');

    // Regexi za login

    let regexFirstLastNameRegister = /^[A-ZŠĐČĆŽ][a-zšđčćž]{2,19}(\s[A-ZŠĐČĆŽ][a-zšđčćž]{3,19})?$/;

    let regexCityRegister = /^[A-ZŠĐČĆŽ][a-zšđčćž]+(\s[A-ZŠĐČĆŽ][a-zšđčćž]+){0,2}$/;

    let regexMailRegister = /^[a-zšđčćž\,\/\.\-\_\d\.\!\?]+\@[a-z]+(\.[a-z]+){1,2}$/;

    let regexPassRegister = /^.{8,16}$/;



    function checkRegisterRegex(poljeLogin, regexLogin, errorLogin, propName) {

        if (regexLogin.test(poljeLogin)) {

            errorLogin.style.display = 'none';

            registerData[propName] = poljeLogin;

        }

        else {

            errorLogin.style.display = 'block';

            registerErrors.push("greska");

        }

    };

    checkRegisterRegex(firstNameRegisterField, regexFirstLastNameRegister, firstNameRegisterErrorPar, "firstName");

    checkRegisterRegex(lastNameRegisterField, regexFirstLastNameRegister, lastNameRegisterErrorPar, "lastName");

    checkRegisterRegex(cityRegisterField, regexCityRegister, cityRegisterErrorPar, "city");

    checkRegisterRegex(mailRegisterField, regexMailRegister, mailRegisterErrorPar, "email");

    checkRegisterRegex(passRegisterField, regexPassRegister, passRegisterErrorPar, "pass");

    if (passRepeatRegisterField != passRegisterField) {

        passRepeatRegisterErrorPar.style.display = 'block';

        registerErrors.push("greska");

    }

    else {

        passRepeatRegisterErrorPar.style.display = 'none';

    }

    if (registerErrors.length == 0) {

        // Ajax za Madica

        registerData.btnRegister = true;

        console.log(registerData);

        ajaxPost("api/user/register.php", registerData, data => {
            alert(data.responseText);

            if (data.status) {

                window.location.href = "index.php?page=login";

            } else {

                let out = "";

                for (let err of data.errors) {
                    out += `<p>${err}</p>`;
                }

                $("#registerErrorServer").show();
                $("#registerErrorServer").html(out);

            }
        })

    } else {

        console.log(registerErrors);
    }

}