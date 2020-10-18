$(document).ready(function () {

    // Prikaz loadera u zavinsosti od dana

    let time = Math.round(new Date().getTime() / 1000 / 60);

    if (localStorage) {

        if (!localStorage.getItem('videoShow')) {

            $('body').css('overflow-y', "auto");

            $('.preload').fadeOut();

            $('.infoBlock img').css("animation-delay", "1s");

            $('.infoBlock a').css("animation-delay", "2s");

            localStorage.setItem('videoShow', time);


        }

        else {

            let getTimeFromLocal = JSON.parse(localStorage.getItem('videoShow'));

            console.log(time - getTimeFromLocal, time, getTimeFromLocal)

            if (time - getTimeFromLocal >= 5) {

                setTimeout(function (e) {

                    $('.infoBlock img').css("animation-delay", "5s");

                    $('.infoBlock a').css("animation-delay", "6s");

                    $('.preload').fadeOut();

                    $('body').addClass('vert');

                    localStorage.removeItem('videoShow');

                }, 4500);

            }

            else {

                $('body').css('overflow-y', "auto");

                $('.preload').fadeOut();

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