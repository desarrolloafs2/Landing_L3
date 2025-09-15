<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AFS Formación - Programa de Transformación Digital</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mainv4.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':

                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],

                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =

                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);

        })(window, document, 'script', 'dataLayer', 'GTM-N3MNDH7');</script>
    <!-- End Google Tag Manager -->
</head>

<body>

    <section class="position-relative pb-5" style="background-image: url('{{asset('images/Landing-L3-2.png')}}'); 
                background-size: cover; 
                background-position: center bottom; 
                background-repeat: no-repeat; 
                min-height: 100vh; 
                display: flex; 
                flex-direction: column; 
                justify-content: space-between; 
                padding-top: 0;">

        <div class="container-fluid mb-5 d-flex flex-column" style="flex: 1;">
            <div class="row flex-grow-1">
                <div class="col-xl-10 offset-xl-1 d-flex flex-column justify-content-center">
                    <h1 class="text-white"
                        style="font-size: 6.2rem; line-height: 1.1; font-weight: 900; margin-bottom: 3rem;">
                        Conviértete en el profesional<br>
                        que buscan las empresas
                    </h1>
                    <h5 class="text-white" style="font-size: 3rem; font-weight: 500; margin-bottom: 4rem;">
                        Fórmate gratis,<br>
                        consigue tu <br>
                        certificado de <br>
                        profesionalidad y <br>
                        gana experiencia <br>
                        real en empresas<br>
                    </h5>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div style="margin-top: auto; margin-bottom: -3rem;">
                        <h6 class="text-white mb-2" style="font-size: 1rem; font-weight: 400;">
                            Formación subvencionada por:
                        </h6>
                        <img class="header-logo" src="{{asset('images/MEFPD.png')}}" alt="Logo AMEFPD">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container" style="padding-bottom: 1rem;">
            <div class="row g-4">

                <div class="col-md-4 col-12">
                    <div class="card shadow-sm h-100" style="border-radius: 12px; padding: 1.5rem;">

                        <div
                            style="width: 350px; height: 200px; margin: 0 auto; overflow: hidden; border-radius: 12px;">
                            <img src="{{asset('images/Landing-L3-2.png')}}" alt="Tarjeta 1"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>

                        <div class="card-body" style="text-align: left;">
                            <h5 class="card-title fw-bold mt-3">Gestión de Compras y Aprovisionamientos</h5>
                            <hr>

                            <div style="display: flex; justify-content: space-between;">
                                <div class="col-md-4">
                                    <p><b>Horario:</b> Flexible</p>
                                    <p><b>Modalidad:</b> Online</p>
                                </div>
                                <div class="col-md-4">
                                    <p><b>Inicio:</b> SEPTIEMBRE</p>
                                    <p><b>Duración:</b> 40 horas</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12">
                    <div class="card shadow-sm h-100" style="border-radius: 12px; padding: 1.5rem;">

                        <div
                            style="width: 350px; height: 200px; margin: 0 auto; overflow: hidden; border-radius: 12px;">
                            <img src="{{asset('images/Landing-L3-2.png')}}" alt="Tarjeta 2"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>

                        <div class="card-body" style="text-align: left;">
                            <h5 class="card-title fw-bold mt-3">Ofimática</h5>
                            <hr>

                            <div style="display: flex; justify-content: space-between;">
                                <div>
                                    <p><b>Horario:</b><br>08:00 h - 14:00 h</p>
                                    <p><b>Modalidad:</b><br>Presencial</p>
                                </div>
                                <div class="col-md-4">
                                    <p><b>Inicio:</b><br>SEPTIEMBRE</p>
                                    <p><b>Duración:</b><br>125 horas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12">
                    <div class="card shadow-sm h-100" style="border-radius: 12px; padding: 1.5rem;">

                        <div
                            style="width: 350px; height: 200px; margin: 0 auto; overflow: hidden; border-radius: 12px;">
                            <img src="{{asset('images/Landing-L3-2.png')}}" alt="Tarjeta 3"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>

                        <div class="card-body" style="text-align: left;">
                            <h5 class="card-title fw-bold mt-3">Operaciones Básicas de Restaurante y Bar</h5>
                            <hr>

                            <div style="display: flex; justify-content: space-between;">
                                <div class="col-md-4">
                                    <p><b>Horario:</b><br>15:00 a 21:00</p>
                                    <p><b>Modalidad:</b><br>Presencial</p>
                                </div>
                                <div class="col-md-4">
                                    <p><b>Inicio:</b><br>SEPTIEMBRE</p>
                                    <p><b>Duración:</b><br>315 horas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="mb-5 text-center">
        <div class="container">
            <div class="col-12 mx-auto">
                <h1 class="my-5 mb-5" style="font-size: 4rem; font-weight: 900; line-height: 1.2; color: #555;">
                    <b>Gana experiencia real y<br>amplía tus oportunidades</b>
                </h1>

                <p class="mb-5" style="background: linear-gradient(to right, #3148caff, #b858cfff); 
                            color: white; 
                            border-radius: 15px; 
                            padding: 1.7rem 1.5rem;
                            max-width: 75%;
                            margin: 0 auto;
                            font-size: 1.5rem; 
                            font-weight: 600;">
                    80 horas de Formación en Centros de Trabajo (FCT)
                </p>

                <p class="py-2 mb-4"
                    style="font-size: 1.4rem; line-height: 1.6; max-width: 90%; margin: 0 auto; color: #555;">
                    Este módulo práctico es obligatorio para obtener tu certificado de<br>
                    profesionalidad y se realiza al finalizar el curso
                </p>

                <p class="py-2 mb-4"
                    style="font-size: 1.4rem; line-height: 1.6; max-width: 90%; margin: 0 auto; color: #555;">
                    Es una oportunidad para aplicar tus conocimientos en un entorno profesional,<br>
                    reforzar tu perfil, ampliar tu red de contactos y abrirte puertas a nuevos retos<br>
                    laborales.
                </p>

                <p class="py-2 mb-4"
                    style="font-size: 1.6rem; font-weight: 700; max-width: 90%; margin: 0 auto; color: #555;">
                    Una herramienta clave para tu empleabilidad
                </p>
            </div>
        </div>
    </section>


    <section class="mb-5 bg-section text-center" style="background-image: url('{{asset('images/Landing-L3-3.png')}}'); 
                    background-size: cover; 
                    background-position: center 80%; 
                    background-repeat: no-repeat; 
                    min-height: 95vh; 
                    display: flex; 
                    align-items: flex-start;
                    justify-content: center;
                    padding-top: 8vh;">

        <div class="overlay"></div>

        <div class="container position-relative">
            <div class="mx-auto" style="max-width: 90%;">
                <h1 class="text-white"
                    style="font-size: 4rem; line-height: 1.1; font-weight: 900; margin-bottom: 5rem;">
                    <b>Becas y ayudas para personas<br>en situación de desempleo</b>
                </h1>

                <div class="row mb-5" style="gap: 1.5rem 0;">
                    <div class="col-6">
                        <div
                            style="font-size: 1.3rem; background: white; border-radius: 10px; padding: 1.2rem; text-align: center;">
                            <p>Ayudas de<br><b>Transporte</b></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div
                            style="font-size: 1.3rem; background: white; border-radius: 10px; padding: 1.2rem; text-align: center;">
                            <p>Ayudas a la<br><b>Conciliación</b></p>
                        </div>
                    </div>
                </div>

                <div class="row" style="gap: 1.5rem 0;">
                    <div class="col-6">
                        <div
                            style="font-size: 1.3rem; background: white; border-radius: 10px; padding: 1.2rem; text-align: center;">
                            <p>Becas a personas<br><b>discapacitadas</b></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div
                            style="font-size: 1.3rem; background: white; border-radius: 10px; padding: 1.2rem; text-align: center;">
                            <p>Becas a víctimas de<br><b>violencia de género</b></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container-fluid py-5">

            <div
                style="background-color: #e0ddddff; border-radius: 16px; padding: 3rem; max-width: 90%; margin: 0 auto;  color: #555;">

                <div class="row" style="display: flex; align-items: center; justify-content: space-between;">

                    <div class="col-md-4 col-12 text-center text-md-start d-flex flex-column justify-content-center"
                        style="margin-left: 7rem; max-width: 40%;">
                        <h1 class="mb-0" style="font-size: 4rem;"><b>Ventajas de<br>nuestros cursos</b></h1>
                        <p class="mt-5" style="background: linear-gradient(to right, #3148caff, #b858cfff); 
                                    color: white; 
                                    border-radius: 15px; 
                                    padding: 1.7rem 7.5rem;
                                    max-width: 90%;
                                    font-size: 2rem;
                                    text-align: center;
                                    margin-left: 0;">
                            ¿Cuál elegir?
                        </p>

                    </div>

                    <div class="col-md-7 col-12 ms-auto" style="margin-right: -5rem;">
                        <div class="row mb-4 justify-content-center" style="gap: 1rem;">
                            <div class="col-5">
                                <div
                                    style="background: white; border-radius: 12px; padding: 8rem 0.5rem; text-align: center; font-size: 1.6rem;">
                                    <p style="margin: 0;">Subvencionados<br>y 100% gratuitos</p>
                                </div>
                            </div>

                            <div class="col-5">
                                <div
                                    style="background: white; border-radius: 12px; padding: 8rem 0.5rem; text-align: center; font-size: 1.6rem;">
                                    <p style="margin: 0;">Formación<br>oficial</p>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center" style="gap: 1rem;">
                            <div class="col-5">
                                <div
                                    style="background: white; border-radius: 12px; padding: 8rem 0.5rem; text-align: center; font-size: 1.6rem;">
                                    <p style="margin: 0;">Agencia de<br>colocación</p>
                                </div>
                            </div>

                            <div class="col-5">
                                <div
                                    style="background: white; border-radius: 12px; padding: 8rem 0.5rem; text-align: center; font-size: 1.6rem;">
                                    <p style="margin: 0;">Prácticas en las<br>mejores empresas</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>


    <section id="form" class="position-relative" style="background-image: url('{{asset('images/Landing-L3-1.png')}}'); 
                        background-size: cover; 
                        background-position: center; 
                        background-repeat: no-repeat; 
                        min-height: 100vh; 
                        display: flex; 
                        align-items: center;">

        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-12 offset-0">
                    <div class="container-fluid">
                        <div class="row my-5 py-5 align-items-stretch">

                            <div class="col-xl-6 col-lg-5 col-12 mb-5 d-flex">
                                <div class="container-fluid bg-transparent-black"
                                    style="height: 120%; border-radius: 25px;">
                                    <div class="row h-100">
                                        <div
                                            class="col-lg-10 offset-lg-1 col-12 offset-0 d-flex flex-column justify-content-center">
                                            <h1 class="text-white" style="font-size: 4rem;"><b>¿Quieres<br>estudiar y
                                                    no<br>sabes qué?</b></h1>
                                            <h4 class="text-white mt-4" style="font-size: 2.7rem;">Rellena el
                                                formulario<br>y te ayudamos</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-7 col-12 d-flex">
                                <div class="container-fluid" style="height: 100%;">
                                    <div class="row h-100">
                                        <div
                                            class="col-xl-10 offset-xl-1 col-lg-11 col-12 offset-0 d-flex flex-column justify-content-center">

                                            <form method="post" action="{{url('bootcamp-en-marketing-digital')}}">
                                                {{csrf_field()}}
                                                @if(request()->has('qr'))
                                                    <input type="hidden" name="qr" value="{{ request('qr') }}">
                                                @endif
                                                <div class="fields">
                                                    <div class="mb-3">
                                                        <label class="text-white" for="name">Nombre:</label>
                                                        <input type="text" id="name" name="name" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="text-white" for="surnames">Apellidos:</label>
                                                        <input type="text" id="surnames" name="surnames" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="text-white" for="email">Email:</label>
                                                        <input type="email" id="email" name="email" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="text-white" for="phone">Teléfono:</label>
                                                        <input type="tel" pattern="^\+?[0-9\s\-]{7,15}$" id="phone"
                                                            name="phone" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="text-white mb-2" for="current-position">Estudios
                                                            primarios:</label>
                                                        <select class="form-control" id="current-position"
                                                            name="current_position" required>
                                                            <option value="" hidden>Seleccione una opción</option>
                                                            <option value="Primarios">Estudios Primarios</option>
                                                            <option value="ESO">ESO/FP I/BUP/Acceso ciclo
                                                                medio/Competencias clave 2</option>
                                                            <option value="CF">CF Grado Medio/CF Grado Superior/FP
                                                                II/Bachiller/COU/Acceso Cliclo Superiror/Competencias
                                                                clave 3</option>
                                                            <option value="Univ">Acceso Univ. Mayores de 25</option>
                                                            <option value="Diplomatura">Diplomatura/Licenciatura/Grado
                                                            </option>
                                                            <option value="Titulacion">Titulación no homologada en
                                                                España</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="text-white mb-2" for="contact-way">Situación
                                                            actual:</label>
                                                        <select class="form-control" id="contact-way" name="contact_way"
                                                            required>
                                                            <option value="" hidden>Seleccione una opción</option>
                                                            <option value="Whatsapp">Desempleado/a</option>
                                                            <option value="Llamada telefónica">Ocupado</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center mt-4">
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="acceptConditions" required>
                                                        <label class="ms-2 text-white" for="acceptConditions">Acepto
                                                            aviso legal</label>
                                                    </div>
                                                    <div>
                                                        <button type="submit"
                                                            class="button-rounded blue border-0 bg-white px-4 py-2"
                                                            style="background: linear-gradient(to right, #3148caff, #b858cfff);
                                                                        color: white; 
                                                                        border-radius: 12px; 
                                                                        padding: 1.7rem 7.5rem;
                                                                        min-width: 230px;
                                                                        min-height: 55px;
                                                                        font-size: 1.3rem;
                                                                        display: flex;
                                                                        align-items: center;
                                                                        justify-content: center;
                                                                        margin-left: 0;">
                                                            <b>ENVIAR</b>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-black py-5">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12 offset-0">
                    <h1 class="text-white"><b>Preguntas frecuentes</b></h1>
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne">
                                    ¿Los cursos son 100% gratuitos?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Sí. Todos nuestros cursos están 100% subvencionados por el Ministerio de Educación,
                                    Formación Profesional y Deportes, por lo que no tienen ningún coste para el
                                    alumnado.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo">
                                    ¿Hay prácticas en empresas reales?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    En casi todos los cursos sí. Los certificados de profesionalidad incluyen un
                                    <b>módulo obligatorio de prácticas (FCT)</b> en empresas del sector, lo que permite
                                    poner en práctica lo aprendido y ganar experiencia real. En algunos cursos más
                                    cortos o específicos no hay prácticas, pero siempre te lo indicamos claramente en la
                                    información de cada curso.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree">
                                    ¿Necesito estudios previos?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Depende del curso. Algunos certificados requieren un nivel académico mínimo, pero
                                    muchos están abiertos sin necesidad de formación previa. En cada curso encontrarás
                                    los requisitos específicos.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour">
                                    ¿Qué tengo que hacer para inscribirme?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Solo tienes que buscar el curso que más te interese en el listado de nuestra web y
                                    entrar en su ficha. Allí encontrarás un formulario de preinscripción para rellenar
                                    con tus datos. Una vez recibamos tu solicitud, nuestro equipo se pondrá en contacto
                                    contigo para confirmar tu plaza y explicarte los siguientes pasos.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{asset('js/mainv4.js')}}"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N3MNDH7" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

</body>

</html>