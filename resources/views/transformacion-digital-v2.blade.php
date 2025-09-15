<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AFS Formación - Programa de Transformación Digital</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mainv2.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	 
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-N3MNDH7');</script>
<!-- End Google Tag Manager -->
</head>
<body>

<section class="mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-3 offset-lg-2 offset-md-1 offset-0">
                <img class="w-lg-75 w-100" alt="Logo de AFS Formación." src="{{asset('images/v2/logo_afs.png')}}">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 col-8 offset-lg-2 offset-md-1 offset-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 px-0">
                            <h5 class="text-dark-grey">Programa de</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 px-0">
                            <h1 class="gradient-dark-red-to-red pb-lg-3 pb-1">Transformación <br> Digital</h1>
                        </div>
                    </div>
                    <div class="row mt-lg-4 mt-md-3 mt-0">
                        <div class="col-lg-6 col-9 px-0">
                            <div class="flex-container gradient-dark-grey-to-grey text-light-black px-1">
                                <span class="text-size-3 me-1"><b>100%</b></span> <span class="text-size-1"><b>FINANCIADO POR FONDOS EUROPEOS</b></span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-3 px-0">
                            <img class="w-100 next-gen-img" alt="Logo Next Gen EU" src="{{asset('images/v2/logo_next_gen.png')}}">
                        </div>
                    </div>
                    <div class="row mt-md-3 mt-2">
                        <div class="col-12 px-0">
                            <button id="subscribe" class="button text-size-3">QUIERO APUNTARME</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-4 position-relative">
                <img class="position-absolute bannerArt animated-img hidden" alt="Chica posando" src="{{asset('images/v2/chica_banner.png')}}">
            </div>
        </div>
    </div>
</section>

<section class="mt-sm-0 mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 offset-0 col-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-4 text-center px-0">
                            <img class="w-25" alt="Icono de una etiqueta con una marca de verificación en su interior" src="{{asset('images/v2/icon01.png')}}">
                            <div class="border-right-dark-grey mt-1">
                                <p class="text-dark-grey text-size-3">100% <br> Gratuito</p>
                                <p class="text-dark-grey">&nbsp;</p>
                            </div>
                        </div>
                        <div class="col-4 text-center px-0">
                            <img class="w-25" alt="Icono de un reloj" src="{{asset('images/v2/icon02.png')}}">
                            <div class="border-right-dark-grey mt-1">
                                <p class="text-dark-grey text-size-3">Duración <br> 150 h.</p>
                                <p class="text-dark-grey">&nbsp;</p>
                            </div>
                        </div>
                        <div class="col-4 text-center px-0">
                            <img class="w-25" alt="Icono de unas flechas entrelazadas" src="{{asset('images/v2/icon03.png')}}">
                            <div class="mt-1">
                                <p class="text-dark-grey text-size-3">Modalidad <br> mixta</p>
                                <p class="text-dark-grey text-size-1">(online/presencial)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="form-section" class="mt-md-5 mt-4 position-relative">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1 offset-0 col-12 text-center">
                <hr class="border-top-dark-grey">
                <h3 class="gradient-dark-red-to-red mb-0">INSCRÍBETE</h3>
                <hr class="border-top-dark-grey">
            </div>
        </div>
        <form class="mt-2" method="post" action="{{url('transformacion-digital')}}">
            {{csrf_field()}}
            @if(request()->has('qr'))
                <input type="hidden" name="qr" value="{{ request('qr') }}">
            @endif
            <div class="row mt-md-4 mt-0">
                <div class="offset-md-1 col-md-5 offset-0 col-12">
                    <div class="form-group">
                        <label class="text-dark-grey text-size-3" for="username-1">Nombre*</label>
                        <input type="text" class="form-control text-size-3" id="username-1" name="name" required>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="form-group">
                        <label class="text-dark-grey text-size-3" for="surnames-1">Apellidos*</label>
                        <input type="text" class="form-control text-size-3" id="surnames-1" name="surnames" required>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-4 mt-md-3 mt-0">
                <div class="offset-md-1 col-md-5 offset-0 col-12">
                    <div class="form-group">
                        <label class="text-dark-grey text-size-3" for="email-1">E-mail*</label>
                        <input type="email" class="form-control text-size-3" id="email-1" name="email" required>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="form-group">
                        <label class="text-dark-grey text-size-3" for="phone-1">Teléfono*</label>
                        <input type="number" min="100000000" max="999999999" class="form-control text-size-3" id="phone-1" name="phone" required>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-4 mt-md-3 mt-0">
                <div class="offset-md-1 col-md-5 offset-0 col-12">
                    <div class="form-group">
                        <label class="text-dark-grey text-size-3" for="current-position-1">Puesto actual*</label>
                        <select class="form-control text-size-3" id="current-position-1" name="current_position" required>
                            <option value="" hidden>Seleccione una opción</option>
                            <option value="Directivos">Directivos</option>
                            <option value="Mandos intermedios">Mandos intermedios</option>
                            <option value="Responsables">Responsables</option>
                            <option value="Autónomos">Autónomos</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="form-group">
                        <label class="text-dark-grey text-size-3" for="contact-way-1">Forma de contacto preferente*</label>
                        <select class="form-control text-size-3" id="contact-way-1" name="contact_way" required>
                            <option value="" hidden>Seleccione una opción</option>
                            <option value="Whatsapp">Whatsapp</option>
                            <option value="Llamada telefónica">Llamada telefónica</option>
                            <option value="Email">Email</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-5 mt-md-4 mt-3">
                <div class="col-12 text-center">
                    <button type="submit" class="button px-3 text-size-3">Enviar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="triangle-box position-absolute w-100">
        <div class="triangle-right h-100"></div>
    </div>
</section>

<section class="mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1 offset-0 col-12 text-center">
                <hr class="border-top-dark-grey">
                <h3 class="gradient-dark-red-to-red mb-0">REQUISITOS</h3>
                <hr class="border-top-dark-grey">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-8 col-md-10 col-12 offset-md-1 offset-lg-2 offset-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 text-center px-0">
                            <img class="w-25" alt="Icono de un papel con la silueta de una persona dibujada" src="{{asset('images/v2/icon04.png')}}">
                            <div class="mt-1">
                                <p class="text-dark-grey text-size-3">Ser mando intermedio, <br> directivo/a o autónomo/a</p>
                            </div>
                        </div>
                        <div class="col-6 text-center px-0">
                            <img class="w-25" alt="Icono de dos edificios" src="{{asset('images/v2/icon05.png')}}">
                            <div class="mt-1">
                                <p class="text-dark-grey text-size-3">Pyme</p>
                                <p class="text-dark-grey text-size-1">(de 1 a 249 trabajadores)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="position-relative mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1 offset-0 col-12 text-center">
               <hr class="border-top-dark-grey">
            </div>
        </div>
        <div class="row h-100">
            <div class="col-lg-3 col-sm-6 col-8 offset-lg-1 offset-sm-3 offset-2 mt-3 order-lg-1 order-2">
               <img class="w-100 position-sticky top-0 hidden animated-img" src="{{asset('images/v2/chico_banner.png')}}">
            </div>
            <div class="col-lg-6 col-md-10 col-12 offset-md-1 offset-0 order-1 order-lg-2">
                <div class="container-fluid">
                    <div class="row text-center">
                        <div class="col-12 px-0">
                            <h3 class="gradient-dark-red-to-red mb-0">CONTENIDO DEL PROGRAMA</h3>
                            <hr class="border-top-dark-grey">
                        </div>
                    </div>
                    <div class="row mt-lg-4 mt-3">
                        <div class="col-6 ps-0 pe-2">
                            <div class="content-container p-2">
                                <p class="gradient-dark-red-to-red text-size-3 mb-1">LA EMPRESA EN LA <br> ECONOMÍA DIGITAL</p>
                                <p class="text-dark-grey text-size-2">
                                    Entender el contexto actual en que operan los negocios y profesionales. Analizar el
                                    impacto de estos cambios en tu empresa y desarrollar un plan de acción adecuado.
                                </p>
                                <h1 class="floating-number">1</h1>
                            </div>
                        </div>
                        <div class="col-6 ps-lg-4 ps-2 pe-0">
                            <div class="content-container p-2">
                                <p class="gradient-dark-red-to-red text-size-3 mb-1">ATRAYENDO AL CLIENTE</p>
                                <p class="text-dark-grey text-size-2">
                                    Aprende a captar y retener clientes usando publicidad en redes sociales y Google,
                                    optimizando la experiencia del cliente mediante marketing digital y análisis de datos.
                                </p>
                                <h1 class="floating-number">2</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-lg-4 mt-2">
                        <div class="col-6 ps-0 pe-2">
                            <div class="content-container p-2">
                                <p class="gradient-dark-red-to-red text-size-3 mb-1">LA TECNOLOGÍA EN LA TRANSFORMACIÓN</p>
                                <p class="text-dark-grey text-size-2">
                                    CRM, Big Data, automatización, ciberseguridad y otras tecnologías clave para
                                    optimizar procesos, decisiones y resultados empresariales.
                                </p>
                                <h1 class="floating-number">3</h1>
                            </div>
                        </div>
                        <div class="col-6 ps-lg-4 ps-2 pe-0">
                            <div class="content-container p-2">
                                <p class="gradient-dark-red-to-red text-size-3 mb-1">DIGITALIZANDO TU EMPRESA</p>
                                <p class="text-dark-grey text-size-2">
                                    Aprende a gestionar tu organización y equipo optimizando la productividad personal y
                                    aprovechando herramientas colaborativas como Notion, Trello, Basecamp y otras.
                                </p>
                                <h1 class="floating-number">4</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-lg-4 mt-2">
                        <div class="col-6 ps-0 pe-2">
                            <div class="content-container p-2">
                                <p class="gradient-dark-red-to-red text-size-3 mb-1">CASOS DE USO SECTORIALES</p>
                                <p class="text-dark-grey text-size-2">
                                    Explorar las aplicaciones de la digitalización por sectores mediante ejemplos.
                                </p>
                                <h1 class="floating-number">5</h1>
                            </div>
                        </div>
                        <div class="col-6 ps-lg-4 ps-2 pe-0">
                            <div class="content-container p-2">
                                <p class="gradient-dark-red-to-red text-size-3 mb-1">MENTORIZACIÓN</p>
                                <p class="text-dark-grey text-size-2">
                                    Tutoría personalizada y seguimiento individual adaptado a cada alumno para aplicar
                                    lo aprendido en el Plan de Transformación de su PYME.
                                </p>
                                <h1 class="floating-number">6</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="triangle-box position-absolute w-100">
        <div class="triangle-left h-100"></div>
    </div>
</section>

<section class="mt-lg-5 mt-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 flex-container justify-content-center">
                <span class="text-size-3 button">FINANCIADO AL</span><span class="text-size-4 ms-1 gradient-dark-red-to-red"><b>100%</b></span>
            </div>
        </div>
        <div class="mt-lg-5 mt-3">
            <div class="col-lg-8 col-md-10 col-12 offset-lg-2 offset-md-1 offset-0">
                <p class="text-size-3 text-dark-grey rounded gradient-white-to-dark-grey text-center p-2">
                    Este programa está enmarcado dentro del Plan de Resiliencia del Gobierno de España y
                    financiado por la Unión Europea a través de los fondos Next Generation EU, lo que
                    posibilita que sea 100% gratuito.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="mt-lg-5 mt-4 position-relative">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1 offset-0 col-12 text-center">
                <hr class="border-top-dark-grey">
                <h3 class="gradient-dark-red-to-red mb-0">INSCRÍBETE</h3>
                <hr class="border-top-dark-grey">
            </div>
        </div>
        <form class="mt-2" method="post" action="{{url('transformacion-digital')}}">
            {{csrf_field()}}
            @if(request()->has('qr'))
                <input type="hidden" name="qr" value="{{ request('qr') }}">
            @endif
            <div class="row mt-md-4 mt-0">
                <div class="offset-md-1 col-md-5 offset-0 col-12">
                    <div class="form-group">
                        <label class="text-dark-grey text-size-3" for="username-2">Nombre*</label>
                        <input type="text" class="form-control text-size-3" id="username-2" name="name" required>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="form-group">
                        <label class="text-dark-grey text-size-3" for="surnames-2">Apellidos*</label>
                        <input type="text" class="form-control text-size-3" id="surnames-2" name="surnames" required>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-4 mt-md-3 mt-0">
                <div class="offset-md-1 col-md-5 offset-0 col-12">
                    <div class="form-group">
                        <label class="text-dark-grey text-size-3" for="email-2">E-mail*</label>
                        <input type="email" class="form-control text-size-3" id="email-2" name="email" required>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="form-group">
                        <label class="text-dark-grey text-size-3" for="phone-2">Teléfono*</label>
                        <input type="number" min="100000000" max="999999999" class="form-control text-size-3" id="phone-2" name="phone" required>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-4 mt-md-3 mt-0">
                <div class="offset-md-1 col-md-5 offset-0 col-12">
                    <div class="form-group">
                        <label class="text-dark-grey text-size-3" for="current-position-2">Puesto actual*</label>
                        <select class="form-control text-size-3" id="current-position-2" name="current_position" required>
                            <option value="" hidden>Seleccione una opción</option>
                            <option value="Directivos">Directivos</option>
                            <option value="Mandos intermedios">Mandos intermedios</option>
                            <option value="Responsables">Responsables</option>
                            <option value="Autónomos">Autónomos</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="form-group">
                        <label class="text-dark-grey text-size-3" for="contact-way-2">Forma de contacto preferente*</label>
                        <select class="form-control text-size-3" id="contact-way-2" name="contact_way" required>
                            <option value="" hidden>Seleccione una opción</option>
                            <option value="Whatsapp">Whatsapp</option>
                            <option value="Llamada telefónica">Llamada telefónica</option>
                            <option value="Email">Email</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-5 mt-md-4 mt-3">
                <div class="col-12 text-center">
                    <button type="submit" class="button px-3 text-size-3">Enviar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="triangle-box position-absolute w-100">
        <div class="triangle-right h-100"></div>
    </div>
</section>

<section class="my-4">
    <div class="logo-container">
        <img src="{{asset('images/v2/logo_UE.png')}}">
        <img src="{{asset('images/v2/logo_gob_es.png')}}">
        <img src="{{asset('images/v2/logo_plan.png')}}">
        <img src="{{asset('images/v2/logo_escuela.png')}}">
        <img src="{{asset('images/v2/logo_gen.png')}}">
    </div>
</section>
<script type="text/javascript" src="{{asset('js/mainv2.js')}}"></script>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N3MNDH7"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 
</body>
</html>
