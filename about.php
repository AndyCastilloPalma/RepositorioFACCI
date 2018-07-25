<?php 
session_start();
include 'DB.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Repositorio FACCI</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Fav and touch icons -->
  <link rel="shortcut icon" href="img/icons/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
  <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.theme.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
  <link href="#" id="colour-scheme" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Flexor
    Theme URL: #/flexor-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: #
  ======================================================= -->
</head>

<body class="page-index has-hero">
  <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
  <div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.1">

    <!-- ======== @Region: #navigation ======== -->
    <div id="navigation" class="wrapper">
      <!--Hidden Header Region-->
      <div class="header-hidden collapse">
        <div class="header-hidden-inner container">
          <div class="row">
            <div class="col-md-3">
              <h3>
                  Sobre nosotros
                </h3>
              <p>Sitio web que aloja material académico y promueve el buen uso de la información en mejora de 
                los niveles de estudio de la Facultad de Ciencias Informáticas.</p>
              <a href="about.php" class="btn btn-more"><i class="fa fa-plus"></i> Leer más</a>
            </div>
            <div class="col-md-3">
              <!--@todo: replace with company contact details-->
              <h3>
                  Contacto
                </h3>
              <address>
                  <strong>FACCI - ULEAM</strong>
                  <abbr title="Address"><i class="fa fa-pushpin"></i></abbr>
                  Ciudadela Universitaria – s/n . ULEAM al lado del Vicerectorado Administrativo.
                  Puerto De Manta, Manabi, Ecuador
                  <br>
                  <abbr title="Phone"><i class="fa fa-phone"></i></abbr>
                  (05) 262-3046
                  <br>
                  <abbr title="Email"><i class="fa fa-envelope-alt"></i></abbr>
                  info@facci.ec
                </address>
            </div>
            <div class="col-md-6">
              <!--Colour & Background Switch for demo - @todo: remove in production-->
              <h3>
                  Personalización
                </h3>
              <div class="switcher">
                <div class="cols">
                  Fondos:
                  <br>
                  <a href="#benches" class="background benches active" title="Benches">Benches</a> 
                  <a href="#boots" class="background boots " title="Boots">Boots</a> 
                  <a href="#buildings" class="background buildings " title="Buildings">Buildings</a>
                  <a href="#city" class="background city " title="City">City</a> 
                  <a href="#metro" class="background metro " title="Metro">Metro</a>
                </div>
                <div class="cols">
                  Colores:
                  <br>
                  <a href="#green" id="color-verde" class="colour green " title="Green">Green</a> 
                  <a href="#orange" class="colour orange active" title="Orange">Orange</a> 
                  <a href="#blue" class="colour blue " title="Blue">Blue</a> 
                  <a href="#lavender" class="colour lavender " title="Lavender">Lavender</a>
                </div>
              </div>
              <p>
                <small>La selección no es persistente.</small>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!--Header & navbar-branding region-->
      <div class="header">
        <div class="header-inner container">
          <div class="row">
            <div class="col-md-8">
              <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
              <a class="navbar-brand" href="index.php" title="Home">
                <h1 class="hidden">
                    <img src="img/logo.png" alt="Flexor Logo">
                    FACCI
                  </h1>
              </a>
              <div class="navbar-slogan">
                Repositorio Facultad
                <br>de Ciencias Informáticas
              </div>
            </div>
            <!--header rightside-->
            <div class="col-md-4">
              <!--user menu-->
              <ul class="list-inline user-menu pull-right">
                <li class="user-button"><a class="btn btn-primary btn-hh-trigger" role="button" data-toggle="collapse" data-target=".header-hidden">Open</a></li>
              </ul>
              <ul class="list-inline user-menu pull-right">
                <?php if ($_SESSION and $_SESSION['user']): ?>
                  <li class="user-login"><i class="fa fa-sign-out text-primary"></i> <a href="logout.php" class="text-uppercase">Cerrar Sesión</a></li>
                <?php else: ?>
                  <li class="user-register"><i class="fa fa-edit text-primary "></i> <a href="register.php" class="text-uppercase">Registro</a></li>
                  <li class="user-login"><i class="fa fa-sign-in text-primary"></i> <a href="login.php" class="text-uppercase">Iniciar Sesión</a></li>
                <?php endif ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="navbar navbar-default">
          <!--mobile collapse menu button-->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <!--social media icons-->
          <div class="navbar-text social-media social-media-inline pull-right">
            <!--@todo: replace with company social media details-->
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="https://www.facebook.com/Facci.Uleam/" target=""_blank><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
          </div>
          <!--everything within this div is collapsed on mobile-->
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="main-menu">
              <li class="icon-link">
                <a href="index.php"><i class="fa fa-home"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Niveles<b class="caret"></b></a>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu">
                  <li class="dropdown-header">Niveles de estudio</li>
                  <li><a href="elements.php" tabindex="-1" class="menu-item">Primero</a></li>
                  <li><a href="about.php" tabindex="-1" class="menu-item">Segundo</a></li>
                  <li><a href="login.php" tabindex="-1" class="menu-item">Tercero</a></li>
                  <li><a href="register.php" tabindex="-1" class="menu-item">Cuarto</a></li>
                  <li><a href="elements.php" tabindex="-1" class="menu-item">Quinto</a></li>
                  <li><a href="about.php" tabindex="-1" class="menu-item">Sexto</a></li>
                  <li><a href="login.php" tabindex="-1" class="menu-item">Séptimo</a></li>
                  <li><a href="register.php" tabindex="-1" class="menu-item">Octavo</a></li>
                  <li><a href="login.php" tabindex="-1" class="menu-item">Noveno</a></li>
                  <li><a href="register.php" tabindex="-1" class="menu-item">Décimo</a></li>
                  <li class="dropdown-footer">REPOSITORIO FACCI</li>
                </ul>
              </li>
              <li><a href="pdf\presentacion.pdf"
              target = "_blank">Documentación</a></li>
              <li class="dropdown dropdown-mm">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Talleres<b class="caret"></b></a>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu dropdown-menu-mm dropdown-menu-persist">
                  <li class="row">
                    <ul class="col-md-6">
                      <li class="dropdown-header">Bases de Datos y desarrollo</li>
                      <li><a href="https://www.youtube.com/watch?v=2S-TPBBFfL8" target="_blank">Replicación Heterogénea</a></li>
                      <li><a href="https://www.youtube.com/watch?v=ImfVScxciGU" target="_blank">Snapshot DB Northwind SQL Server 2016</a></li>
                      <li><a href="https://www.youtube.com/watch?v=s5xzm45bWvA" target="_blank">Linked Server SQL - Oracle 11g</a></li>
                      <li><a href="https://www.youtube.com/watch?v=PFc9-kcu6lc" target="_blank">C# - Ejercicios básicos en consola</a></li>
                    </ul>
                    <ul class="col-md-6">
                      <li class="dropdown-header">Configuraciones y arquitectura</li>
                      <li><a href="https://www.youtube.com/watch?v=xCq4wPVXGK0" target="_blank">Instalación Adempiere ERP y CRM versión 390LTS</a></li>
                      <li><a href="https://www.youtube.com/watch?v=AsDI0WNc3BA" target="_blank">Guía de implementación openbravo ERP con VirtualBox</a></li>
                      <li><a href="https://www.youtube.com/watch?v=qFAdC5Esh0s" target="_blank">eXtreme Programming</a></li>
                      <li><a href="https://www.youtube.com/watch?v=I9GZdBEL1CU" target="_blank">Lógica fuzzy, difusa o booleana</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-footer">
                    <div class="row">
                      <div class="col-md-7">La información ha sido de ayuda? <strong>envíe sugerencias en nuestro formulario.</strong></div>
                      <div class="col-md-5">
                        <a href="#" class="btn btn-more btn-lg pull-right"><i class="fa fa-cloud-download"></i>Descargas</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!--/.navbar-collapse -->
        </div>
      </div>
    </div>

  <!-- ======== @Region: #content ======== -->
  <div id="content">
    <div class="container" id="about">
      <div class="row">
        <!--main content-->
        <div class="col-md-9 col-md-push-3">
          <div class="page-header">
            <h1>
                Resumen ejecutivo
                <small>Proyecto</small>
              </h1>
          </div>
          <div class="block block-border-bottom-grey block-pd-sm">
            <h3 class="block-title">
                Repositorio web con recursos académicos
              </h3>
            <img src="img/misc/objetivos.png" alt="About us" class="img-responsive img-thumbnail pull-right m-l m-b">
            <p align = "justify">
            La finalidad de este trabajo es analizar la metodología y modelo de procesos
adecuados y necesarios para llevar a cabo este proyecto y así brindar un servicio
urgente en el proceso de formación profesional en el área de Ciencias Informáticas,
desarrollando un acceso estudiantil hacia un repositorio de información digital
conteniendo guías y talleres prácticos del modelo educativo.
Aplicando elementos de recolección de datos (encuestas y entrevistas) a
estudiantes y docentes de la Facultad de Ciencias Informáticas (FACCI), se logro
detectar que existe una falta de información verídica en la web, obteniendo así gran
confusión por parte de estudiantes, esta recolección permitió obtener las
características necesarias para la realización del repositorio académico.
Actualmente la información es la riqueza del mundo y por aquello debe ser
compartida para todas las personas motivadas por aprendizaje con contenido de
calidad y al nivel correspondiente por la cual se busca utilizarla. Este proceso se
evalúa y sigue un marco metodológico iterativo basado en el desarrollo de
sistemas eXtreme Programming como guía de producción orientada a la
programación de sitios eficientes y accesibles en un tiempo promedio de
finalización.
Antes de implementar el servicio propuesto, la falta de recursos académicos
provocaba un déficit considerable respecto al rendimiento en el proceso de
formación profesional.
En base a los resultados obtenidos aplicando técnicas de entrevistas y encuestas
se desarrolla un sistema web para que los recursos académicos puedan ser
facilitados y se encuentre a disposición de la comunidad académica solicitante como
ayuda a los enfoques de formación e investigación de la academia.
            </p>
          </div>
          <div id = "second" class="block block-border-bottom-grey block-pd-sm">
            <h3 class="block-title">
              Objetivos de proyecto
            </h3>
            <p align = "justify">
            − Mejorar los niveles académicos de los estudiantes de la FACCI. <br>
− Aumentar los promedios de aprobación de materias. <br>
− Brindar información y material de calidad a la comunidad. <br>
− Analizar la información necesaria a compartir con el estudiantado. <br>
− Colaborar en el proceso de enseñanza-aprendizaje de la facultad. <br><br>
Específicos: <br> <br>
1. Realizar el levantamiento de información para establecer los puntos
académicos a fortalecer con el desarrollo del proyecto. <br>
2. Definir los indicadores de productividad y la metodología de estudio y
desarrollo a aplicar en el proyecto. <br>
3. Diseñar e implementar el repositorio, distribuyendo el sistema a la comunidad
académica brindando la socialización del proyecto.

            </p>
          </div>
          <div class="block-highlight block-pd-h block-pd-sm">
            <h3 class="block-title">
                Misión
              </h3>
            <p class="text-fancy" align = "justify">
            Este proyecto se realiza con el propósito de aportar al conocimiento y proceso
            de aprendizaje del estudiantado de la ULEAM, en un principio de la FACCI y
            a la comunidad en general que desee desarrollar y aumentar la información
            de la cual dispone mejorando su desempeño y nivel académico.
            </p>
          </div>
          <div class="block">
            <h3 class="block-title">
                Estadísticas
              </h3>
            <div class="row">
              <div class="col-md-4">
                <div class="stat">
                  <span data-counter-up>1000</span>s
                  <small>Visitantes satisfechos</small>
                </div>
              </div>
              <div class="col-md-4">
                <div class="stat">
                  <span data-counter-up>163</span>+
                  <small>Visualizaciones</small>
                </div>
              </div>
              <div class="col-md-4">
                <div class="stat">
                  <span data-counter-up>214</span>
                  <small>Correos enviados</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- sidebar -->
        <div class="col-md-3 col-md-pull-9 sidebar visible-md-block visible-lg-block">
          <ul class="nav nav-pills nav-stacked">
            <li class="active">
              <a href="about.php" class="first">
                  Resumen ejecutivo
                  <small>Planteamiento del proyecto</small>
                </a>
            </li>
            <li class="#">
              <a href="#second" class="second">
                  Objetivos
                  <small>Formulación</small>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Call out block -->
  <div class="block block-pd-sm block-bg-primary">
    <div class="container">
      <div class="row">
        <h3 class="col-md-4">
            Comunidades estudiantiles
          </h3>
        <div class="col-md-8">
          <div class="row">
            <!--Client logos should be within a 120px wide by 60px height image canvas-->
            <div class="col-xs-6 col-md-2">
              <a href="#" title="Software Libre">
                  <img src="img/clients/softwarelibre.png" alt="Ssoftware Libre" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-6 col-md-2">
              <a href="#" title="Client 2">
                  <img src="img/clients/microsoft.png" alt="Client 2 logo" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-6 col-md-2">
              <a href="#" title="Client 3">
                  <img src="img/clients/mobilemonkeys.png" alt="Client 3 logo" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-6 col-md-2">
              <a href="#" title="Client 4">
                  <img src="img/clients/vesgeek.png" alt="Client 4 logo" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-6 col-md-2">
              <a href="#" title="Client 5">
                  <img src="img/clients/ieee.png" alt="Client 5 logo" class="img-responsive">
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ======== @Region: #footer ======== -->
  <footer id="footer" class="block block-bg-grey-dark" data-block-bg-img="img/bg_footer-map.png" data-stellar-background-ratio="0.4">
    <div class="container">

      <div class="row" id="contact">

        <div class="col-md-3">
          <address>
              <strong>Información de contacto</strong>
              <br>
              <i class="fa fa-map-pin fa-fw text-primary"></i> Manta, ciudadela universitaria
              <br>
              <i class="fa fa-phone fa-fw text-primary"></i>  (05) 262-3046 
              <br>
              <i class="fa fa-envelope-o fa-fw text-primary"></i> info@facci.com
              <br>
            </address>
        </div>

        <div id = "contacto" class="col-md-6">
          <h4 class="text-uppercase">
              Contacto
            </h4>
          <div class="form">
            <div id="sendmessage">
              Tu mensaje ha sido enviado. ¡Gracias!
            </div>
            <div id="errormessage"></div>
            <form action="contactform.php" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email, dirección de correo" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>
        </div>

         <div class="col-md-3">
          <h4 class="text-uppercase">
              Síguenos:
            </h4>
          <!--social media icons-->
          <div class="social-media social-media-stacked">
            <!--@todo: replace with company social media details-->
            <a href="#"><i class="fa fa-twitter fa-fw"></i> Twitter</a>
            <a href="https://www.facebook.com/Facci.Uleam/" target = "_blank"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
            <a href="#"><i class="fa fa-linkedin fa-fw"></i> LinkedIn</a>
            <a href="#"><i class="fa fa-google-plus fa-fw"></i> Google+</a>
          </div>
        </div>
      </div>
      <div class="row subfooter">
        <!--@todo: replace with company copyright details-->
        <div class="col-md-7">
          <p>Copyright © anlecap</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: #/license/
              Purchase the pro version with working PHP/AJAX contact form: #/buy/?theme=Flexor
            -->
            <a href="https://www.facebook.com/anlecap/" target = "_blank">Desarrollado por:</a> anlecap soluciones informáticas
          </div>
        </div>
        <div class="col-md-5">
          <ul class="list-inline pull-right">
            <li><a href="#">Términos</a></li>
            <li><a href="#">Privacidad</a></li>
            <li><a href="https://api.whatsapp.com/send?phone=593996190948" target = "_blank">Contacto</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/stellar/stellar.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="contactform/contactform.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <!--Custom scripts demo background & colour switcher - OPTIONAL -->
  <script src="js/color-switcher.js"></script>

  <!--Contactform script -->
  <script src="contactform/contactform.js"></script>

</body>

</html>
