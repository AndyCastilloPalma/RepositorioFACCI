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
                  <li><a href="pdf/niveles.pdf" target = "_blank" tabindex="-1" class="menu-item">Primero</a></li>
                  <li><a href="pdf/niveles.pdf" target = "_blank" tabindex="-1" class="menu-item">Segundo</a></li>
                  <li><a href="pdf/niveles.pdf" target = "_blank" tabindex="-1" class="menu-item">Tercero</a></li>
                  <li><a href="pdf/niveles.pdf" target = "_blank" tabindex="-1" class="menu-item">Cuarto</a></li>
                  <li><a href="pdf/niveles.pdf" target = "_blank" tabindex="-1" class="menu-item">Quinto</a></li>
                  <li><a href="pdf/niveles.pdf" target = "_blank" tabindex="-1" class="menu-item">Sexto</a></li>
                  <li><a href="pdf/niveles.pdf" target = "_blank" tabindex="-1" class="menu-item">Séptimo</a></li>
                  <li><a href="pdf/niveles.pdf" target = "_blank" tabindex="-1" class="menu-item">Octavo</a></li>
                  <li><a href="pdf/niveles.pdf" target = "_blank" tabindex="-1" class="menu-item">Noveno</a></li>
                  <li><a href="pdf/niveles.pdf" target = "_blank" tabindex="-1" class="menu-item">Décimo</a></li>
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
    <div class="hero" id="highlighted">
      <div class="inner">
        <!--Slideshow-->
        <div id="highlighted-slider" class="container">
          <div class="item-slider" data-toggle="owlcarousel" data-owlcarousel-settings='{"singleItem":true, "navigation":true, "transitionStyle":"fadeUp"}'>
            <!--Slideshow content-->
            <!--Slide 1-->
            <div class="item">
              <div class="row">
                <div class="col-md-6 col-md-push-6 item-caption">
                  <h2 class="h1 text-weight-light">
                      Bienvenido a <span class="text-primary">FACCI</span>
                    </h2>
                  <h4>
                      Sitio de contenido académico dirigido a estudiantes de ingeniería.
                    </h4>
                  <p>
                      Repositorio con material de interés estudiantil que tiene como objetivo potencializar
                      el proceso de formación académica de profesionales de Ingeniería en Sistemas brindando <br>
                      un sitio que aloja talleres, guías y modelos prácticos de desarrollo de actividades.
                  </p>
                  <a href="pdf\paper.pdf" target = "_blank" class="btn btn-more btn-lg i-right">Leer más <i class="fa fa-plus"></i></a>
                </div>
                <div class="col-md-6 col-md-pull-6 hidden-xs">
                  <img src="img/slides/slide1.png" alt="Slide 1" class="center-block img-responsive">
                </div>
              </div>
            </div>
            <!--Slide 2-->
            <div class="item">
              <div class="row">
                <div class="col-md-6 text-right-md item-caption">
                  <h2 class="h1 text-weight-light">
                      <span class="text-primary">FACCI</span> Misión y Visión
                    </h2>
                  <p>
                    Misión: Proporcionar formación científica, tecnológica y cultural a los futuros <br>
                    profesionales en las ciencias informáticas, enmarcadas en la ética y la moral;<br>
                    con el fin de garantizar la eficiencia y eficacia en la prestación de sus servicios<br>
                    y la producción de bienes a la sociedad.
                  </p> <br>
                  <p>
                    Visión: Unidad académica de Educación Superior líder en el ámbito informático, <br>
                    con criterio creativo e innovador de reconocimiento local y nacional; en la <br>
                    formación integral de profesionales generadores de bienes y servicios.
                  </p>
                  <a href="pdf\paper.pdf" target = "_blank" class="btn btn-more btn-lg"><i class="fa fa-plus"></i>Leer más</a>
                </div>
                <div class="col-md-6 hidden-xs">
                  <img src="img/slides/slide2.png" alt="Slide 2" class="center-block img-responsive">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ======== @Region: #content ======== -->
  <div id="content">
    <!-- Mission Statement -->
    <div class="mission text-center block block-pd-sm block-bg-noise">
      <div class="container">
        <h2 class="text-shadow-white">
            Nuestro objetivo es brindar a la FACCI una herramienta guía en su proceso de formación
            profesional, teniendo a disposición contenido de calidad
            <a href="about.php" class="btn btn-more"><i class="fa fa-plus"></i>Leer más</a>
          </h2>
      </div>
    </div>
    <!--Metodologías-->
    <div class="showcase block block-border-bottom-grey">
      <div class="container">
        <h2 class="block-title">
            Metodologías de Desarrollo de Software
          </h2>
        <p>
          Procesos metodológicos aplicables al desarrollo de sistemas informáticos con medios iterativos incrementables 
          y entregables de metodologías ágiles de programación.
          <br>Metodologías tradicionales, iterativas y derivados se mencionan y detallan junto a medios descargables de 
          formatos a seguir para respectiva documentación asociada. <br><br>
        </p>
        <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":4, "pagination":false, "navigation":true, "itemsScaleUp":true}'>
          <?php 
            $DB = new DB();
            $DB->Listar("SELECT * FROM METODOLOGIAS");
            foreach ($DB->result as $dato): 
          ?>
            <div class="item">
              <a href="#" class="overlay-wrapper">
                  <img src="<?php echo $dato->IMG_PREV_METO; ?>" alt="Project 1 image" class="img-responsive underlay">
                  <span class="overlay">
                    <span class="overlay-content"> <span class="h4"><?php echo $dato->NOMBRE_METODOLOGIA;?></span> </span>
                  </span>
                </a>
              <div class="item-details bg-noise">
                <h4 class="item-title">
                    <a href="#"><?php echo $dato->SIGLAS_METO; ?></a>
                  </h4>
                <a href="metodologías.php?id=<?php echo $dato->ID_METODOLOGIA;?>" class="btn btn-more"><i class="fa fa-plus"></i>Leer más</a>
                <?php if ($_SESSION and isset($_SESSION['tipo_user']) and $_SESSION['tipo_user'] == 'admin'): ?>
                  <a href="metodologías_edit.php?id=<?php echo $dato->ID_METODOLOGIA;?>" class="btn btn-more"><i class="fa fa-pencil"></i>Editar Contenido</a>
                <?php endif ?>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
    <!--Niveles-->
    <div class="showcase block block-border-bottom-grey">
      <div class="container">
        <h2 class="block-title">
            Niveles Ingeniería en Sistemas
          </h2>
        <p>
          FACCI - Facultad de Ciencias Informáticas
          <br>
          División por niveles de estudio de la carrera
          <br><br>
        </p>
        <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":4, "pagination":false, "navigation":true, "itemsScaleUp":true}'>
          <?php 
            $DB2 = new DB();
            $DB2->Listar("SELECT * FROM NIVELES");
            foreach ($DB2->result as $dato): 
          ?>
            <div class="item">
              <a href="#" class="overlay-wrapper">
                  <img src="<?php echo $dato->IMG_PREV_NIV; ?>" alt="Project 1 image" class="img-responsive underlay">
                  <span class="overlay">
                    <span class="overlay-content"> <span class="h4"><?php echo $dato->NOMBRE_NIV; ?></span> </span>
                  </span>
                </a>
              <div class="item-details bg-noise">
                <h4 class="item-title">
                    <a href="nivel.php?id=<?php echo $dato->ID_NIVELES;?>"><?php echo $dato->NOMBRE_NIV; ?></a>
                  </h4>
                <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Leer más</a>
                <?php if ($_SESSION and isset($_SESSION['tipo_user']) and $_SESSION['tipo_user'] == 'admin'): ?>
                  <a href="nivel_edit.php?id=<?php echo $dato->ID_NIVELES;?>" class="btn btn-more"><i class="fa fa-pencil"></i>Editar Contenido</a>
                <?php endif ?>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
    <!--Materias-->
    <div class="showcase block block-border-bottom-grey">
      <div class="container">
        <h2 class="block-title">
            Materias y Asignaturas de Ingeniería
          </h2>
        <?php if ($_SESSION and isset($_SESSION['tipo_user']) and $_SESSION['tipo_user'] == 'admin'): ?>
          <a href="agregar_materia.php" class="btn btn-more"><i class="fa fa-plus"></i>Agregar Materias</a>
        <?php endif ?>
        <br><br>
        <p>
          Asignaturas necesarias de aprobación para suma de créditos de la carrera.
          <br>
          Materias contempladas en el proceso de formación profesional del Ingeniero en Sistemas.
          <br><br>
        </p>
        <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":4, "pagination":false, "navigation":true, "itemsScaleUp":true}'>
          <?php 
            $DB3 = new DB();
            $DB3->Listar("SELECT * FROM temas");
            foreach ($DB3->result as $dato): 
          ?>
            <div class="item">
              <a href="#" class="overlay-wrapper">
                  <img src="<?php echo $dato->IMG_PREV_TEMA; ?>" alt="Project 1 image" class="img-responsive underlay">
                  <span class="overlay">
                    <span class="overlay-content"> <span class="h4"><?php echo $dato->NOMBRE_TEMA; ?></span> </span>
                  </span>
                </a>
              <div class="item-details bg-noise">
                <h4 class="item-title">
                    <a href="#"><?php echo $dato->SIGLAS; ?></a>
                  </h4>
                <a href="<?php echo $dato->PDF_TEMA;?>" target="_blank" class="btn btn-more"><i class="fa fa-plus"></i>Leer más</a>
                <?php if ($_SESSION and isset($_SESSION['tipo_user']) and $_SESSION['tipo_user'] == 'admin'): ?>
                  <a href="asig_edit.php?id=<?php echo $dato->ID_TEMA;?>" class="btn btn-more"><i class="fa fa-pencil"></i>Editar Contenido</a>
                <?php endif ?>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
    <!-- Services -->
    <div class="services block block-bg-gradient block-border-bottom">
      <div class="container">
        <h2 class="block-title">
            Servicios
          </h2>
        <div class="row">
          <div class="col-md-4 text-center">
            <span class="fa-stack fa-5x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-group fa-stack-1x fa-inverse"></i> </span>
            <h4 class="text-weight-strong">
                Integración de los estudiantes a la carrera
              </h4>
            <p>
              Una ayuda muy útil para que las comunidad estudiantil en proceso de formación desarrolles sus capacidades
              con material académico de calidad.
            </p>
            <p>
              <a href="about.php" class="btn btn-more i-right">Leer más <i class="fa fa-angle-right"></i></a>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <span class="fa-stack fa-5x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-pencil fa-stack-1x fa-inverse"></i> </span>
              <h4 class="text-weight-strong">
                Interfaz de usuario intuitiva
              </h4>
            <p>
              Con enlaces externos a contenido visual tipo vídeo y lector de archivo para lograr visualizar los elementos
              cargados al repositorio.
            </p>
            <p>
              <a href="about.php" class="btn btn-more i-right">Leer más <i class="fa fa-angle-right"></i></a>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <span class="fa-stack fa-5x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-cogs fa-stack-1x fa-inverse"></i> </span>
            <h4 class="text-weight-strong">
                Mejora continua de contenido
              </h4>
            <p>
              En constante desarrollo de material para mantener el repositorio actualizado tanto en su funcionalidad como sistema 
              como en su contenido digital.
            </p>
            <p>
              <a href="#" class="btn btn-more i-right">Leer más <i class="fa fa-angle-right"></i></a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Pricing 
    <div class="block-contained">
      <h2 class="block-title">
          Our Plans
        </h2>
      <div class="row">
        <div class="col-md-3">
          <div class="panel panel-default panel-pricing text-center">
            <div class="panel-heading">
              <h4 class="panel-title">
                  Flex<em>Starter</em>
                </h4>
            </div>
            <div class="panel-pricing-price">$ <span class="digits">19.95</span> /mo.</div>
            <div class="panel-body">
              <ul class="list-dotted">
                <li>3 User Accounts</li>
                <li>3 Private Projects</li>
                <li>Umlimited Projects</li>
                <li>5GB of space</li>
              </ul>
              <a href="#" class="btn btn-primary btn-sm">Choose Plan</a>

            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="panel panel-default panel-pricing panel-pricing-highlighted text-center">
            <div class="panel-heading">
              <h4 class="panel-title">
                  Team<em>Starter</em>
                </h4>
            </div>
            <div class="panel-pricing-price">$ <span class="digits">49.95</span> /mo.</div>
            <div class="panel-body">
              <ul class="list-dotted">
                <li>50 User Accounts</li>
                <li>50 Private Projects</li>
                <li>Umlimited Projects</li>
                <li>Unlimited space</li>
              </ul>
              <a href="#" class="btn btn-primary btn-sm">Choose Plan</a>

            </div>
          </div>
        </div>
        <div class="col-md-3 text-center">
          <div class="panel panel-default panel-pricing panel-pricing-highlighted text-center">
            <div class="panel-heading">
              <h4 class="panel-title">
                  Enterprise
                  <span class="panel-pricing-popular"><i class="fa fa-thumbs-up"></i> Popular</span>
                </h4>
            </div>
            <div class="panel-pricing-price">$ <span class="digits">199.95</span> /mo.</div>
            <div class="panel-body">
              <ul class="list-dotted">
                <li>100 User Accounts</li>
                <li>100 Private Projects</li>
                <li>Umlimited Projects</li>
                <li>Unlimited space</li>
              </ul>
              <a href="#" class="btn btn-primary btn-sm">Choose Plan</a>

            </div>
          </div>
        </div>
        <div class="col-md-3 text-center">
          <div class="panel panel-default panel-pricing text-center">
            <div class="panel-heading">
              <h4 class="panel-title">
                  Corporate
                </h4>
            </div>
            <div class="panel-pricing-price">$ <span class="digits">299.95</span> /mo.</div>
            <div class="panel-body">
              <ul class="list-dotted">
                <li>1000 User Accounts</li>
                <li>1000 Private Projects</li>
                <li>Umlimited Projects</li>
                <li>Unlimited space</li>
              </ul>
              <a href="#" class="btn btn-primary btn-sm">Choose Plan</a>

            </div>
          </div>
        </div>
      </div>
    </div>
Background image callout with CSS overlay
Usage: data-block-bg-img="IMAGE-URL" to apply a background image clearly via jQuery .block-bg-overlay = overlays the background image, colour is inherited from block-bg-* classes .block-bg-overlay-NUMBER = determines opcacity value of overlay from 1-9 (default is 5) ie. .block-bg-overlay-2 or .block-bg-overlay-6
-->
    <div class="block block-pd-sm block-bg-grey-dark block-bg-overlay block-bg-overlay-6 text-center" data-block-bg-img="https://picjumbo.imgix.net/HNCK1088.jpg?q=40&amp;w=1650&amp;sharp=30" data-stellar-background-ratio="0.3">
      <h2 class="h-xlg h1 m-a-0">
          <span data-counter-up>25000</span>s
        </h2>
      <h3 class="h-lg m-t-0 m-b-lg">
          Usuarios satisfechos!
        </h3>
      <p>
        <a href="#contacto" class="btn btn-more btn-lg i-right">Contáctanos ahora! <i class="fa fa-angle-right"></i></a>
      </p>
    </div>
    <!--Customer testimonial & Latest Blog posts-->
    <div class="testimonials block-contained">
      <div class="row">
        <!--Customer testimonial-->
        <div class="col-md-6 m-b-lg">
          <h3 class="block-title">
              Motivación
            </h3>
          <blockquote>
            <p>
              La vida es una obra de teatro que no permite ensayos... Por eso, canta, ríe, baila, llora y vive intensamente
              cada momento de tu vida... antes que el telón baje y la obra termine sin aplausos.
            </p>
            <img src="img/misc/charles-quote.png" alt="Charles Spencer Chaplin">
            <small>
                <strong>Charles Chaplin</strong>
                <br>
                Actor humorista inglés
              </small>
          </blockquote>
        </div>
        <!--Latest Blog posts-->
        <div class="col-md-6 blog-roll">
          <h3 class="block-title">
              Comentarios
            </h3>
          <!-- Blog post 1-->
          <div class="media">
            <div class="media-left hidden-xs">
              <!-- Date desktop -->
              <div class="date-wrapper"> <span class="date-m">Mar</span> <span class="date-d">24</span> </div>
            </div>
            <div class="media-body">
              <h4 class="media-heading">
                  <a href="#" class="text-weight-strong">¡Una excelente herramienta!</a>
                </h4>
              <!-- Meta details mobile -->
              <ul class="list-inline meta text-muted visible-xs">
                <li><i class="fa fa-calendar"></i> <span class="visible-md">Creado:</span> 24 de Marzo del 2018</li>
                <li><i class="fa fa-user"></i> <a href="#">Kenya</a></li>
              </ul>
              <p>
                Sirve <strong>en gran manera</strong> 
                a que los estudiantes no divaguen en internet con temas o conenido inadecuado.
              </p>
            </div>
          </div>
          <!-- Blog post 2 -->
          <div class="media">
            <div class="media-left hidden-xs">
              <!-- Date desktop -->
              <div class="date-wrapper"> <span class="date-m">Sep</span> <span class="date-d">17</span> </div>
            </div>
            <div class="media-body">
              <h4 class="media-heading">
                  <a href="#" class="text-weight-strong">Temáticas profesionales</a>
                </h4>
              <!-- Meta details mobile -->
              <ul class="list-inline meta text-muted visible-xs">
                <li><i class="fa fa-calendar"></i> <span class="visible-md">Creado:</span> 17 de Septiembre del 2018</li>
                <li><i class="fa fa-user"></i> <a href="#">Andy</a></li>
              </ul>
              <p>
                Contenidos y temas de acuerdo a los ítems presentes en los sílabos de asignatura correspondientes
                a la malla curricular.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /content -->
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

      <a href="#top" class="scrolltop">Top</a>

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
