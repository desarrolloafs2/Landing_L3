<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AFS Formación - Programa de Transformación Digital</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mainv3.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
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

        <section class="position-relative circle-video">
            <div class="position-absolute w-100 h-100 z-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-10 offset-1">
                            <div class="container-fluid">
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <img class="header-logo" src="{{asset('images/eoi_bootcamp_marketing_digital_afsformacion_logo.png')}}" alt="Logo AFS formación">
                                            <img class="header-logo" src="{{asset('images/eoi_bootcamp_marketing_digital_afsformacion_logo02.png')}}" alt="Logo Generación D">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="centered-box">
                    <h2 class="white mb-0">Bootcamp en</h2>
                    <h1 class="white mb-0">Marketing</h1>
                    <div class="d-flex justify-content-between align-items-center">
                        <h1 class="white">Digital</h1>
                        <p class="white ms-3 mb-0">
                            Para autónomos/as<br>
                            y empleados/as<br>
                            de PYMES
                        </p>
                    </div>
                </div>
            </div>
            <video class="w-100" autoplay loop muted playsinline>
                <source src="{{asset('videos/Comp 1_4.mp4')}}" type="video/mp4">
                Tu navegador no soporta el video.
            </video>
        </section>

        <section class="form my-5">
            <div class="container-fluid">
                <div class="row">
                    <div id="form" class="col-xl-4 offset-xl-4 col-lg-8 offset-lg-2 col-10 offset-1">
                        <h1 class="text-center">Pide Información</h1>
                        <form class="mt-5" method="post" action="{{url('bootcamp-en-marketing-digital')}}">
                            {{csrf_field()}}
                            @if(request()->has('qr'))
                                <input type="hidden" name="qr" value="{{ request('qr') }}">
                            @endif
                            <div class="fields">
                                <div class="mb-3">
                                    <label for="name">Nombre:</label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="surnames">Apellidos:</label>
                                    <input type="text" id="surnames" name="surnames" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone">Teléfono:</label>
                                    <input type="tel" pattern="^\+?[0-9\s\-]{7,15}$" id="phone" name="phone" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="current-position">Puesto actual:</label>
                                    <select class="form-control" id="current-position" name="current_position" required>
                                        <option value="" hidden>Seleccione una opción</option>
                                        <option value="Directivos">Directivos</option>
                                        <option value="Mandos intermedios">Mandos intermedios</option>
                                        <option value="Responsables">Responsables</option>
                                        <option value="Autónomos">Autónomos</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="contact-way">Forma de contacto preferente:</label>
                                    <select class="form-control" id="contact-way" name="contact_way" required>
                                        <option value="" hidden>Seleccione una opción</option>
                                        <option value="Whatsapp">Whatsapp</option>
                                        <option value="Llamada telefónica">Llamada telefónica</option>
                                        <option value="Email">Email</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-5">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="acceptConditions" required>
                                    <label class="ms-2" for="acceptConditions">Acepto aviso legal</label>
                                </div>
                                <div>
                                    <button type="submit" class="px-4 py-2">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="position-relative ring-video">
            <div class="position-absolute w-100 h-100 z-1">
                <h1 class="text-center white mt-5">
                    Multiplica tus skills en <br>
                    Marketing Digital
                </h1>
                <div class="centered-box text-center">
                    <img src="{{asset('images/eoi_bootcamp_marketing_digital_afsformacion03.png')}}">
                </div>
            </div>

            <div id="circle-1" class="floating-circle rounded-circle bg-dark-white">
                <div class="centered-box text-center">
                    <h3 class="mb-0">
                        Formación<br>
                        gratuita
                    </h3>
                </div>
            </div>
            <div id="circle-2" class="floating-circle rounded-circle bg-dark-white">
                <div class="centered-box text-center">
                    <h5 class="mb-0">
                        Clases<br>
                        en vivo<br>
                        50 horas<br>
                        +100 horas<br>
                        a tu ritmo<br>
                    </h5>
                </div>
            </div>
            <div id="circle-3" class="floating-circle rounded-circle bg-dark-white">
                <div class="centered-box text-center">
                    <h5 class="mb-0">
                        Duración<br>
                        y horarios
                    </h5>
                    <h4 class="mb-0">
                        flexibles
                    </h4>
                </div>
            </div>
            <div id="circle-4" class="floating-circle rounded-circle bg-dark-white">
                <div class="centered-box text-center">
                    <h2 class="mb-0">Online</h2>
                </div>
            </div>
            <div id="circle-5" class="floating-circle rounded-circle bg-dark-white">
                <div class="centered-box text-center">
                    <h5 class="mb-0">Certificación</h5>
                    <h2 class="mb-0">oficial</h2>
                </div>
            </div>

            <video class="w-100" autoplay loop muted playsinline>
                <source src="{{asset('videos/Comp 1_6.mp4')}}" type="video/mp4">
                Tu navegador no soporta el video.
            </video>
        </section>

        <section id="target" class="fixed-section position-relative">
            <div class="centered-box">
                <h1 class="mb-4">
                    ¿A quién va<br>
                    dirigido?
                </h1>
                <p class="mb-0">Empleados/as de PYMES</p>
                <p class="mb-0">Autónomos/as que quieren más clientes y presencia online</p>
                <p class="mb-0">Directivos/as que buscan una estrategia digital</p>
                <p class="mb-0">PYMES de cualquier sector y nivel digital</p>
            </div>
        </section>

        <section class="py-5 bg-black">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 offset-md-1 col-12 offset-0">
                        <h1 class="dark-white mb-0">Clases en vivo</h1>
                        <h2 class="dark-white mb-4"><b>Módulos</b></h2>
                        <div>
                            <div class="swiper text-white">
                                <div class="swiper-wrapper mb-4">
                                    <div class="swiper-slide bg-light-black p-4 light-grey">
                                        <p class="mb-0">Módulo 1</p>
                                        <p class="mb-0">Redefine tu propuesta de valor y conquista tu nicho digital</p>
                                        <hr>
                                        <p class="mb-0">Sesión 1: Redefiniendo tu propuesta de valor</p>
                                        <p class="mb-0">Sesión 2: Segmentación y nicho digital</p>
                                        <p class="mb-0">Sesión 3: Análisis de competencias</p>
                                        <p class="mb-0">Sesión 4: Propuesta única de valor (PUV)</p>
                                        <p class="mb-0">Sesión 5: Diseño del Customer Journey</p>
                                        <p class="mb-0">Sesión 6: Redefiniendo tu propuesta de valor</p>
                                        <p class="mb-0">Sesión 7: Redefiniendo tu propuesta de valor</p>
                                        <p class="mb-0">Sesión 8: Redefiniendo tu propuesta de valor</p>
                                    </div>
                                    <div class="swiper-slide bg-light-black p-4 light-grey">
                                        <p class="mb-0">Módulo 2</p>
                                        <p class="mb-0">Activa tu visibilidad online y empieza a generar clientes hoy</p>
                                        <hr>
                                        <p class="mb-0">Sesión 1: Estrategia de visibilidad. ¿Dónde están tus clientes?</p>
                                        <p class="mb-0">Sesión 2: SEO básico para pymes sin técnico</p>
                                        <p class="mb-0">Sesión 3: Redes sociales: menos canales, más resultados</p>
                                        <p class="mb-0">Sesión 4: Publicidad digital práctica y express</p>
                                        <p class="mb-0">Sesión 5: Embudo de captación: del interés al lead</p>
                                        <p class="mb-0">Sesión 6: Email marketing y automatización básica</p>
                                        <p class="mb-0">Sesión 7: Conversión web y mejora de experiencia</p>
                                        <p class="mb-0">Sesión 8: Caso práctico de visibilidad y venta digital</p>
                                    </div>
                                    <div class="swiper-slide bg-light-black p-4 light-grey ste">
                                        <p class="mb-0">Módulo 3</p>
                                        <p class="mb-0">Optimiza, automatiza y mide tu impacto digital </p>
                                        <hr>
                                        <p class="mb-0">Sesión 1: Automatización sin ser técnico</p>
                                        <p class="mb-0">Sesión 2: CRM sencillo para no perder oportunidades</p>
                                        <p class="mb-0">Sesión 3: Medición de resultados: qué importa de verdad</p>
                                        <p class="mb-0">Sesión 4: Hoja de ruta + mejora continua</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center fit-content">
                                    <div class="swiper-button-prev position-static mt-0"></div>
                                    <div class="swiper-button-next position-static mt-0 ms-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="position-relative sphere-video">
            <div class="position-absolute w-100 h-100 z-1">
                <h1 class="text-center white mb-0 mt-5">Clases a tu ritmo</h1>
                <h2 class="text-center white"><b>Bloques</b></h2>
                <div class="centered-box">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-5">
                                <img class="w-100 mt-md-0 mt-2" src="{{asset('images/eoi_bootcamp_marketing_digital_afsformacion04.png')}}">
                            </div>
                            <div class="col-xl-6 col-7 arranged-texts text-white">
                                <p>Bienvenida e introducción</p>
                                <p>El cliente en la nueva era digital</p>
                                <p>Experiencia de cliente y de producto</p>
                                <p>Atrayendo al cliente: generación de tráfico</p>
                                <p>Captando al cliente I: información y decisión</p>
                                <p>Captando al cliente ii: el proceso de compra y entrega</p>
                                <p>Fidelizando al cliente: el proceso de posventa</p>
                                <p>Entorno legal: propiedad y privacidad</p>
                                <p>Plan de transformación digital ii: la experiencia de cliente</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <video class="w-100 d-block" autoplay loop muted playsinline>
                <source src="{{asset('videos/Comp 1_5.mp4')}}" type="video/mp4">
                Tu navegador no soporta el video.
            </video>
        </section>

        <section class="py-5 bg-dark-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 offset-md-1 col-12 offset-0">
                        <h1 class="mb-0">¿Qué ofrece esta formación?</h1>
                        <div>
                            <div class="swiper">
                                <div class="swiper-wrapper mb-4">
                                    <div class="swiper-slide p-4">
                                        <p class="mb-0">
                                            Este curso no solo le ayudará a <br>
                                            entender cómo funciona el<br>
                                            marketing digital,sino que le dará <br>
                                            las herramientas para aplicarlo <br>
                                            directamente en su empresa, <br>
                                            con beneficios tangibles desde el<br>
                                            primer momento.
                                        </p>
                                    </div>
                                    <div class="swiper-slide p-4">
                                        <p class="mb-0">
                                            El programa combina aprendizaje <br>
                                            autónomo con sesiones guiadas en <br>
                                            directo para garantizar una <br>
                                            experiencia completa y efectiva.
                                        </p>
                                    </div>
                                    <div class="swiper-slide p-4">
                                        <p class="mb-0">
                                            Aprendizaje aplicado (‘learning by doing’):<br>
                                            Cada módulo incluye actividades<br>
                                            prácticas que podrá implementar <br>
                                            directamente en su empresa.
                                        </p>
                                    </div>
                                    <div class="swiper-slide p-4">
                                        <p class="mb-0">
                                            Micro-contenidos accesibles: Los <br>
                                            materiales están diseñados para ser<br>
                                            claros, concisos y fáciles de entender.
                                        </p>
                                    </div>
                                    <div class="swiper-slide p-4">
                                        <p class="mb-0">
                                            Relación constante entre teoría y <br>
                                            práctica: Los conceptos aprendidos se<br>
                                            aplican inmediatamente en ejercicios reales.
                                        </p>
                                    </div>
                                    <div class="swiper-slide p-4">
                                        <p class="mb-0">
                                            Preparación clara para la acción: Desde<br>
                                            el primer día tendrá un plan estructurado<br>
                                            para llevar lo aprendido al terreno operativo.
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center fit-content">
                                    <div class="swiper-button-prev position-static mt-0"></div>
                                    <div class="swiper-button-next position-static mt-0 ms-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="fixed-section position-relative">
            <h1 id="subscribe" class="centered-box pointer"><b>Quiero <br> apuntarme.↘</b></h1>
        </section>

        <section id="FAQ" class="fixed-section position-relative bg-blue">
            <div class="centered-box">
                <h4 class="text-white mb-4">PREGUNTAS FRECUENTES (FAQ)</h4>
                <div class="mb-4">
                    <p class="fw-bold text-white">¿Necesito conocimientos previos en marketing o tecnología?</p>
                    <p class="text-white ms-3">No, está diseñado para personas sin formación técnica. Todo es práctico y accesible.</p>
                </div>
                <div class="mb-4">
                    <p class="fw-bold text-white">¿Es aplicable a cualquier sector?</p>
                    <p class="text-white ms-3">Sí. Está adaptado a comercio, salud, educación, servicios, industria...</p>
                </div>
                <div>
                    <p class="fw-bold text-white">¿Qué resultados obtendré?</p>
                    <p class="text-white ms-3">Visibilidad, campañas activas, embudos, automatización, CRM básico y plan de acción</p>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid mt-5 mb-3">
                <div class="row">
                    <div class="col-md-10 offset-md-1 col-12 offset-0">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-10 offset-md-1 col-12 offset-0">
                                    <p>Plan de Recuperación, Transformación y Resiliencia</p>
                                    <p>Financiado por la Unión Europea</p>
                                    <p>Next Generation EU</p>
                                    <a target="_blank" href="https://www.eoi.es/es"><p>Sitio Oficial EOI</p></a>
                                </div>
                            </div>
                            <div class="row my-5">
                                <div class="col-12">
                                    <img class="w-100" alt="Logo de la EOI" src="{{asset('images/eoi_bootcamp_marketing_digital_afsformacion03_faldonlogos.png')}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="text-center">{{date('Y')}}© AFS Formación. Todos los derechos reservados.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script type="text/javascript" src="{{asset('js/mainv3.js')}}"></script>
		<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N3MNDH7"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 
    </body>
</html>
