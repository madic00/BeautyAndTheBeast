$(document).ready(function () {

    // Animacija za side navigation

    $('#triggerSideNav').click(() => {

        $('.sideNav').toggleClass('sideNav1');

    });

    $(document).on('click', '.sideMenu li a', () => {

        $('.sideNav').removeClass('sideNav1');

    });

    $(document).on('click', '.logoSideNav', () => {


        $('.sideNav').removeClass('sideNav1');

    });

    // Ispis menija pomocu json-a

    $.ajax({

        url: "assets/json/nav.json",
        method: "GET",
        dataType: "json",
        success: function (data) {

            printMenu(data);

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

    // Menjanje navigacije kada se skroluje na sajtu

    $(window).scroll(function () {

        const scroll = $(window).scrollTop();

        if (scroll > 50) {

            $('nav').css('background-color', 'black');

            $('nav .logoNav .logoImage img').css('width', '130px');

            $('.ytButton').css('top', '5.6%');

        }

        else {

            $('nav').css('background', 'transparent');

            $('.ytButton').css('top', '6.5%');

            $('nav .logoNav .logoImage img').css('width', '150px');

        }

    });

});

// Funkcije

function printMenu(data) {

    let printer = '';

    let allTheMenusCollection = document.getElementsByClassName('menu');

    let allTheMenus = Array.from(allTheMenusCollection);

    for (let el of allTheMenus) {

        for (let link of data) {

            printer += `<li><a href="${link.putanja}">${link.naziv}</a></li>`;

        }

        el.innerHTML = printer;

        printer = '';

    }

}

// Prikaz logoa svuda gde je ta klasa postavljena

let logosCollection = document.getElementsByClassName('allLogos');

let logos = Array.from(logosCollection);

for (let el of logos) {

    el.innerHTML = ` <a href="#!" class='logoImage'><img src="assets/images/milosLogo.png" alt="Logo" class='img-fluid' /></a>`;

}