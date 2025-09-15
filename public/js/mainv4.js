$(document).ready(function(){
    const mainButton = $('#subscribe');
    const stickyBar = $('#sticky-bar');
    const animationSection = $('#animation-section');
    const slideButtons = $('.slide-button');
    const delay = 100;

    $('.subscribe').click(function(){
        // Smooth scroll to the target section
        $('html, body').animate({
            scrollTop: $('#form').offset().top
        }, 100);
    });

    function isInViewport(elem) {
        const rect = elem[0].getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
        );
    }

    function toggleStickyBar() {
        if (!isInViewport(mainButton)) {
            stickyBar.fadeIn(200);
        } else {
            stickyBar.fadeOut(200);
        }
    }

    function toggleAnimation() {
        if (isInViewport(animationSection)) {
            slideButtons.each(function (index, element) {
                setTimeout(function () {
                    $(element).addClass('slide-in');
                }, index * delay);
            });
        } else {
            slideButtons.each(function (index, element) {
                setTimeout(function () {
                    $(element).removeClass('slide-in');
                }, index * delay);
            });
        }
    }

    $(window).on('scroll resize load', function (){
        toggleStickyBar();
        toggleAnimation();
    });
});

let forms = $('form');

forms.submit(function (event){
    let email = forms.find('input[type=email]');

    if(!isEmail(email.val())){
        alert("El email introducido es incorrecto.");
        event.preventDefault();
    }else{
        let submitBtn = forms.find('button[type=submit]');

        submitBtn.prop("disabled",true);
    }
});

function isEmail(email) {
    let regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

const swiper = new Swiper('#swiper-1', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,

    //Responsive
    breakpoints: {
        // when window width is >= 320px
        1150: {
            slidesPerView: 2,
            spaceBetween: 20
        },
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }
});

const swiper2 = new Swiper('#swiper-2', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,

    //Responsive
    breakpoints: {
        // when window width is >= 320px
        1150: {
            slidesPerView: 3,
            spaceBetween: 20
        },
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }
});
