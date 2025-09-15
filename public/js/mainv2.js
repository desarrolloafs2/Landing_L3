$(document).ready(function(){
    $('#subscribe').click(function(){
        // Smooth scroll to the target section
        $('html, body').animate({
            scrollTop: $('#form-section').offset().top
        }, 100);
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
                entry.target.classList.add("animated-img-visible"); // Activa la animación
                observer.unobserve(entry.target); // Deja de observar el elemento después de la animación
            }
        });
    }, { threshold: 0.2 }); // Se activará cuando el 20% de la imagen sea visible

    document.querySelectorAll(".animated-img").forEach(img => {
        observer.observe(img);
    });
});
