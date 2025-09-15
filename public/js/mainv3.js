$(document).ready(function(){
    $('#subscribe').click(function(){
        // Smooth scroll to the target section
        $('html, body').animate({
            scrollTop: $('#form').offset().top
        }, 100);
    });

    const maxMargin = -50; // valor máximo en los extremos

    $(".arranged-texts").each(function () {
        const $paragraphs = $(this).find("p");
        const total = $paragraphs.length;

        if (total === 0) return;

        const mid = Math.floor(total / 2);
        const step = maxMargin / mid; // calcula salto entre márgenes

        $paragraphs.each(function (index) {
            let offset;

            if (total % 2 === 1) {
                // impar: un centro
                offset = Math.abs(index - mid);
            } else {
                // par: dos centros
                if (index < mid) offset = mid - index;
                else offset = index - mid + 1;
            }

            const margin = offset * step;
            $(this).css("margin-left", `${margin}px`);
        });
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

document.addEventListener("DOMContentLoaded", () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCircles(true);
            }else{
                animateCircles(false);
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll(".ring-video").forEach(img => {
        observer.observe(img);
    });
});

const swiper = new Swiper('.swiper', {
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

function animateCircles(animate){
    const circles = [
        $('#circle-1'),
        $('#circle-2'),
        $('#circle-3'),
        $('#circle-4'),
        $('#circle-5')
    ];

    if(animate){
        circles[0].css({
            'left': '10%',
            'top' : '10%',
            'transform': 'translate(0,0)'
        });

        circles[1].css({
            'left': '10%',
            'top' : '60%',
            'transform': 'translate(0,0)'
        });

        circles[2].css({
            'left': '60%',
            'top' : '30%',
            'transform': 'translate(0,0)'
        });

        circles[3].css({
            'left': '80%',
            'top' : '20%',
            'transform': 'translate(0,0)'
        });

        circles[4].css({
            'left': '80%',
            'top' : '55%',
            'transform': 'translate(0,0)'
        });
    }else{
        circles.forEach(el => {
            el.removeAttr('style');
        });
    }
}
