<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Wellcome AdMiapp </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('web/vendor/fontawesome-free/css/all.css') }}">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="{{ asset('web/vendor/magnific-popup/magnific-popup.css') }}">

  <!-- Theme CSS - Includes Bootstrap -->
  <link rel="stylesheet" href="{{ asset('web/css/creative.css') }}">
  

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">AdmiApp</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Conocenos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#login">Ingresar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Administrador web de inventarios.</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">AdmiApp esta diseñado para que tengas una grata experiencia con el manejo de tú empresa mediante diferentes aplicativos dentro de esta plataforma.</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Muestrame más</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Tenemos lo que necesitas!</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Encuentra dentro de la plataforma un administrador de inventarios, un control de asistencia, control de procesos, control de activiades y muchas otras funciones que permiten que tengas el control ansoluto de tú empresa. </p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Empecemos!</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">Para ti</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-truck-loading text-primary mb-4"></i>
            <h3 class="h4 mb-2">Sistema de Inventario</h3>
            <p class="text-muted mb-0">Obten control de tú inventario en tiempo real, control de compras y ventas!</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-project-diagram text-primary mb-4"></i>
            <h3 class="h4 mb-2">Procesos</h3>
            <p class="text-muted mb-0">Controla los avances de los procesos de tu empresa.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-pencil-ruler text-primary mb-4"></i>
            <h3 class="h4 mb-2">Editor Web</h3>
            <p class="text-muted mb-0">Controla tu sitio web, modificando el contenido desde la plataforma!</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-shopping-cart text-primary mb-4"></i>
            <h3 class="h4 mb-2">PrestaShop</h3>
            <p class="text-muted mb-0">Consume los datos de tu cuenta PrestaShop desde AdmiApp!</p>
          </div>
        </div>

      </div>
    </div>
  </section>

    <!-- Call to Action Section -->
  <section id="login" class="page-section bg-dark text-white">
    <div class="container text-center">
      <h4 class="mb-4">Empecemos con esta gran experiencia!</h4>
      <a class="btn btn-light btn-xl" href="{{ url('admin') }}">Ingresar</a>
    </div>
  </section>
  
  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{ asset('web/img/portfolio/fullsize/1.jpg') }}">
            <img class="img-fluid" src="{{ asset('web/img/portfolio/thumbnails/1.jpg') }}" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{ asset('web/img/portfolio/fullsize/2.jpg') }}">
            <img class="img-fluid" src="{{ asset('web/img/portfolio/thumbnails/2.jpg')}}" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{ asset('web/img/portfolio/fullsize/3.jpg')}}">
            <img class="img-fluid" src="{{ asset('web/img/portfolio/thumbnails/3.jpg')}}" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">¡Mantengámonos en contacto!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">¿Listo para comenzar su próximo proyecto con nosotros? 
            Llámenos o envíenos un correo electrónico y nos pondremos en contacto con usted 
            lo antes posible!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>Col. 3186132665</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:contact@yourwebsite.com">ceagarzonpu@unal.edu.co</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - AdmiApp</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('web/vendor/jquery/jquery.js')}}"></script>
  <script src="{{ asset('web/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('web/vendor/jquery-easing/jquery.easing.js')}}"></script>
  <script src="{{ asset('web/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('web/js/creative.js')}}"></script>

</body>

</html>
