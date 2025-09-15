let form = $('#form');

form.submit(function (event){
    let email = form.find('input[type=email]');

    if(!isEmail(email.val())){
        alert("El email introducido es incorrecto.");
        event.preventDefault();
    }
});

function isEmail(email) {
    let regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

$(document).ready(function(){
    $('#rocketBtn').click(function(){
        // Smooth scroll to the target section
        $('html, body').animate({
            scrollTop: $('#form-section').offset().top
        }, 100);
    });
});
