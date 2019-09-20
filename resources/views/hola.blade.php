<!DOCTYPE html>
<html lang="es">
       <!-- 
     /* ================== DESIGN BY ==================== */
        ___        ___  ___             ___       ___
        \  \      /  /  |  |           /    \    /   \
         \  \    /  /   |  |          /  /\  \  /    \
          \  \  /  /    |  |____     /  /  \  \/  \   \
           \  V   /     |       |   /  /    \   /  \  \
            -----        -------   ---       --     ---
            
     /* ================================================= */    
    -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/hola-mundo.ico">

    <title>Hola Mundo</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/nav.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/baguettebox.min.css">


    <link rel="stylesheet" href="css/icomoon/style.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap&subset=latin-ext,vietnamese" rel="stylesheet">

    <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();
                    
                    // Store hash
                    var hash = this.hash;
            
                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                    scrollTop: $(hash).offset().top
                    }, 800, function(){
                
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                    });
                }
            });
        });
    </script>
</head>
<body>
    <header id="header" class="header">
        <a href="" class="logo"> Hola Mundo </a>

        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn">
            <span class="navicon"></span>
        </label>

        <ul class="enlaces">
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#galeria">Fotos</a></li>
            <li><a href="#contactos">Contactos</a></li>
        </ul>
    </header>     

    <section id="inicio">
        <div class="main2">
            <div class="main2-text">
                    <h3>
                        Que es Hola Mundo?
                    </h3>
                    <p>
                        Para 2019 Se desarrollara en 2 escuelas previamente seleccionados y
                        preparadas con infre-estructura necesaria
                        para el desarrollo del programa.
                    </p>
                    <a href="#conoce">
                        <button class="main2-button">
                            Conoce mas
                        </button>
                    </a>
            </div>
            <div class="main2-img">
                    <img class="img-fluid" src="images/principal.png" alt="" srcset="">
            </div>
            <div class="center">
                    <div class="down"></div>
                </div>
        </div>
    </section>

    <section id="conoce" class="section-zig">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div data-aos="fade-up-right">
                        <img class="img-fluid" src="images/seccion.png" alt="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="desc" data-aos="fade-left">
                        <h3>Agregarle un titulo</h3>
                        <p>
                                Una computadora por alumno, un mentor por cada 5 alumnos. Durante 12 clases a
                                desarrollarse en 3 meses y con la participación de los profesores.
                                
                                Los mentores son alumnos universitarios capacitados por un equipo especializado
                                
                                Se trabajará en desarollo y acompañamiento de 12 clases, donde se utilizará la
                                herramienta educativa scratch, aplicado a problemas relacionado y que fomenten
                                el Fortalecimiento del contenido Educativo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Conceitos -->
    <section class="concept-area">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-6 no-padding concept-left">
                    <img class="img-fluid" src="images/niños.png" alt="Mision de Hola Mundo">
                </div>
                <div class="col-md-6 concept-parrafo">
                    <div class="concept-title">
                        <h2>Nuestra Misión</h2>
                        <br>
                        <p>
                            Se trabajará en desarollo y acompañamiento de 12 clases,
                            donde se utilizará la herramienta educativa scratch, aplicado a
                            problemas relacionado y que fomenten el Fortalecimiento del contenido Educativo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Conceitos -->


    <section class="vlm-container">
        <div class="container">
            <h2 class="vlm-h2">Que se espera</h2>
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <figure data-aos="fade-up"
                    data-aos-duration="1000">
                        <div class="fig-img">
                            <img src="images/ensenhanza.png" alt="Imagen 1">
                        </div>
                        <figcaption data-aos="fade-up"
                        data-aos-duration="3000">
                            <h3>Titulo 1</h3>
                            <small>   
                                Mejorar de la infraestructura existente para 
                                la utilización adecuada de los recursos tecnológicos a favor
                                de la educación.
                            </small>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <figure data-aos="fade-up"
                    data-aos-duration="1500">
                        <div class="fig-img">
                            <img src="images/ensenhanza.png" alt="Imagen 1">
                        </div>
                        <figcaption>
                            <h3>Titulo 2</h3>
                            <small>   
                                Temos maquinas profissionais para
                                desenvolver força, cardio e um físico perfeito e ideal
                            </small>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <figure data-aos="fade-up"
                    data-aos-duration="2000">
                        <div class="fig-img">
                            <img src="images/ensenhanza.png" alt="Imagen 2">
                        </div>
                        <figcaption>
                            <h3>Titulo 3</h3>
                            <small>
                                Que los niños pasen de consumidores tecnológicos a creadores de los mismos.
                            </small>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <figure data-aos="fade-up"
                    data-aos-duration="1500">
                        <div class="fig-img">
                            <img src="images/ensenhanza.png" alt="Imagen 3">
                        </div>
                        <figcaption>
                            <h3>Titulo 4</h3>
                            <small>
                                Mejorar la capacidade resolución de problemas y espíritu de razonamiento 
                                lógico y capacidad de trabajo en equipo.
                            </small>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section id="galeria" class="galeria gallery-block grid-gallery">
        <div class="container">
            <div class="vlm-h2">
                Galería de Fotos
            </div>
            <div class="de-cuando">
                <h3>Reunion 1</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-3 item">
                    <a class="lightbox" href="images/ejemplo-reu.png" data-caption="Descripción 1">
                        <img class="img-fluid image scale-on-hover" src="images/ejemplo-reu.png">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 item">
                    <a class="lightbox" href="images/ejemplo-reu.png" data-caption="Descripción 2">
                        <img class="img-fluid image scale-on-hover" src="images/ejemplo-reu.png">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 item">
                    <a class="lightbox" href="images/ejemplo-reu.png" data-caption="Descripción 3">
                        <img class="img-fluid image scale-on-hover" src="images/ejemplo-reu.png">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 item">
                    <a class="lightbox" href="images/ejemplo-reu.png" data-caption="Descripción 4">
                        <img class="img-fluid image scale-on-hover" src="images/ejemplo-reu.png">
                    </a>
                </div>
            </div>
            <div class="de-cuando">
                    <h3>Reunion 2</h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-sm-12 col-md-3 item">
                        <a class="lightbox" href="images/ejemplo-reu.png" data-caption="Descripción 1">
                            <img class="img-fluid image scale-on-hover" src="images/ejemplo-reu.png">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 item">
                        <a class="lightbox" href="images/ejemplo-reu.png" data-caption="Descripción 2">
                            <img class="img-fluid image scale-on-hover" src="images/ejemplo-reu.png">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 item">
                        <a class="lightbox" href="images/ejemplo-reu.png" data-caption="Descripción 3">
                            <img class="img-fluid image scale-on-hover" src="images/ejemplo-reu.png">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 item">
                        <a class="lightbox" href="images/ejemplo-reu.png" data-caption="Descripción 4">
                            <img class="img-fluid image scale-on-hover" src="images/ejemplo-reu.png">
                        </a>
                    </div>
                </div>
            <hr class="hr-galeria">
        </div>
    </section>





    <section class="section-org">
       <div class="container">
            <div class="vlm-h2">
                    Organizan
            </div>
                <div class="container-org" data-aos="fade-up"
                                           data-aos-duration="3000">
                    <div class="img-org">
                        <img src="images/mi-lab.png" alt="" srcset="">
                    </div>
                    <div class="img-org">
                        <img src="images/codeleste-hola-mundo.jpg" alt="" srcset="">
                    </div>
                    <div class="img-org">
                        <img src="images/upe-hola-mundo.jpg" alt="" srcset="">
                    </div>
                </div>
       </div>
    </section>
    <section class="section-org">
            <div class="container">
                 <div class="vlm-h2">
                    Auspician
                 </div>
                     <div class="container-org" data-aos="fade-up"
                                          data-aos-duration="3000">
                         <div class="img-org">
                             <img src="images/mi-lab.png" alt="" srcset="">
                         </div>
                         <div class="img-org">
                             <img src="images/codeleste-hola-mundo.jpg" alt="" srcset="">
                         </div>
                         <div class="img-org">
                             <img src="images/upe-hola-mundo.jpg" alt="" srcset="">
                         </div>
                     </div>
            </div>
         </section>

    <footer id="contactos" class="site-footer">
            <div class="container">
                <div class="row align-content-between">
                  <div class="col-xs-12 col-md-4">
                    <h3>Teléfono</h3>
                    <p><i class="fa icon-whatsapp"></i>+595 973 87 36 26</p>
                    <p><i class="fa icon-whatsapp"></i>+595 992 90 40 47</p>
                  </div>
                  <div class="col-xs-12 col-md-4">
                    <h3>e-mail</h3>
                    <p>contacto@gdgcde.org</p>
                    </div>
                  <div class="col-xs-12 col-md-4">
                    <h3>Dirección</h3>
                    <p>
                      Ciudad Del Este - Paraguay
                    </p>
                </div>
              </div>
              <hr>
              <div class="copyright-cont">
                <div class="copy-enlaces">
                  <ul class="social-icons">
                    <li><a href="https://www.facebook.com/GDGcde/"><i class="fa icon-facebook"></i></a></li>
                    <li><a href="" target="blank"><i class="fa icon-instagram"></i></a></li>
                  </ul>
                </div>
                <div class="copy-web">
                  <p class="copyright-text">Copyright &copy; 
                    <a class="copyright-link" href="#" target="blank">Hola Mundo 2019</a>.
                  </p>
                </div>
              </div>

            </div>
          </footer>

    <!-- scripts -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/nav.js"></script>
    
    <script src="js/aos.js"></script>
    <script>
        AOS.init({
          easing: 'ease-in-out-sine'
        });
      </script>
    
     <!--Gallery-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    
     <script>
         baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
     </script>
</body>
</html>