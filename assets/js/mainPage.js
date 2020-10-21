$(document).ready(function () {

    // Slanje pitanja Milosu, preko contact forme

    $('#posaljiPitanje').on('click', posaljiPitanjeMilosu);

    // Prikaz planova iz json-a

    $.ajax({

        url: "assets/json/plans.json",
        method: "GET",
        dataType: "json",
        success: function (data) {

            printPlans(data);

        },
        error: function (err, msg, type) {

            console.log(msg);

        }

    })

    // Prikaz loadera u zavinsosti od vremena

    let time = Math.round(new Date().getTime() / 1000 / 60);

    if (localStorage) {

        if (!localStorage.getItem('videoShow')) {

            setTimeout(function (e) {

                $('.infoBlock img').css("animation-delay", "5s");

                $('.infoBlock a').css("animation-delay", "6s");

                $('.preloader').fadeOut();

                $('body').addClass('vert');

                localStorage.setItem('videoShow', time);

            }, 4500);

            // $('body').css('overflow-y', "hidden");

            // $('.preloader').fadeOut();

            // $('.infoBlock img').css("animation-delay", "1s");

            // $('.infoBlock a').css("animation-delay", "2s");

            // $('body').addClass('vert');

        }

        else {

            let getTimeFromLocal = JSON.parse(localStorage.getItem('videoShow'));

            console.log(time - getTimeFromLocal, time, getTimeFromLocal)

            if (time - getTimeFromLocal >= 5) {

                setTimeout(function (e) {

                    $('.infoBlock img').css("animation-delay", "5s");

                    $('.infoBlock a').css("animation-delay", "6s");

                    $('.preloader').fadeOut();

                    $('body').addClass('vert');

                    localStorage.removeItem('videoShow');

                }, 4500);

            }

            else {

                $('body').css('overflow-y', "auto");

                $('.preloader').fadeOut();

                $('.infoBlock img').css("animation-delay", "1s");

                $('.infoBlock a').css("animation-delay", "2s");

            }

        }

    }

    else {

        alert('Local Storage is not supported on your browser !');

    }

});


// Funkcije

function posaljiPitanjeMilosu() {

    // Niz greski

    let greskaContactNiz = [];

    // Hvatanje polja

    let imeIPrezimeContact = document.getElementById('imePrezimeContact').value;

    let porukaContact = document.getElementById('pitanjeZaMilosa').value;

    // Hvatanje paragrafa greski

    let greskaImeIPrezimeContact = document.getElementById('firstLastNameContactError');

    let greskaPorukaContact = document.getElementById('sendMessageContactError');

    // Regexi

    let imeIPrezimeContactRegex = /^[A-ZŠĐČĆŽ][a-zšđčćž]{2,}\s[A-ZŠĐČĆŽ][a-zšđčćž]{2,}(\s[A-ZŠĐČĆŽ][a-zšđčćž]{2,}){0,2}$/;

    let porukaContactRegex = /^.{10,}$/;

    // Funckija za proveru

    function proveriPoljaZaContact(imePolja, regexPolja, paragrafGreske) {

        if (regexPolja.test(imePolja)) {

            paragrafGreske.style.display = 'none';

        }

        else {

            paragrafGreske.style.display = 'block';

            greskaContactNiz.push("greska");

        }

    }

    proveriPoljaZaContact(imeIPrezimeContact, imeIPrezimeContactRegex, greskaImeIPrezimeContact);

    proveriPoljaZaContact(porukaContact, porukaContactRegex, greskaPorukaContact);

    console.log(greskaContactNiz.length);

    if (greskaContactNiz.length == 0) {

        // Salji Ajax Jankeli

    }

}

function printPlans(data) {

    let print = '';

    for (let el of data) {

        if (el.specialPlan) {

            print += `<div class="col-lg-4 colPlanIshrane colSpecialPlan">

            <h3>BEST SELLER</h3>

            <div class="planBox planIshraneITreninga">`;

            if (el.slika != '') {

                print += `<div class="planPictureHolder">

                <!-- <img src="assets/images/${el.slika}" class='img-fluid' alt="${el.imePlana}" /> -->

            </div>`

            }

            print += `<div class="aboutPlan">

                    <h3>${el.imePlana}</h3>

                    <p>Cena plana<br><span>${el.cena}&euro;</span></p>

                    <a href="#!" class='orderPlanButton' data-idPlana="${el.id}">Naruči Plan</a>

                </div>

            </div>

        </div>`;

        }

        else {

            print += `<div class="col-lg-4 colPlanIshrane">

            <div class="planBox">

                <div class="planPictureHolder">

                    <img src="assets/images/${el.slika}" class='img-fluid' alt="${el.imePlana}" />

                </div>

                <div class="aboutPlan">

                    <h3>${el.imePlana}</h3>

                    <p>Cena plana<br><span>${el.cena}&euro;</span></p>

                    <a href="#!" class='orderPlanButton' data-idPlana="${el.id}">Naruči Plan</a>

                </div>

            </div>

        </div>`;

        }

    }

    document.querySelector('.rowPlans').innerHTML = print;

}
