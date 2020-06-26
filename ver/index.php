<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- bootstrap -->
  <link
  rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"/>
  <!-- javaScript complementario -->
	<script src="../js/jquery.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
<!-- Estilos -->
	

	<link href="../help/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../help/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../help/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../help/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../help/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet"> 

  <link href="../img/logo.jpeg" rel="icon">
  <link href="../img/logo.jpeg" rel="apple-touch-icon">
<link rel="stylesheet" href="../help/assets/css/estilos.css">
	<title>CO2BON</title>
</head>
<body>
<!-- 	comienzo del navbar -->
<nav class="navbar navbar-expand-lg fixed-top bg-dark ">
  <img src="../img/logo.jpeg" alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="../img/menu.svg" class="img-fluid">
            </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class=" navbar-nav ml-auto ">
    <li class="nav-item px-3">
        <a class="nav-link text-light" href="#">Ayuda</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link text-light" href="../nosotros/us.php">Sobre nosotros</a>
      </li>
      
      <li class="nav-item px-3">
        <a class="nav-link  text-light" href="../ver/vender.php" tabindex="-1" aria-disabled="true">Vender</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link  text-light" href="#" tabindex="-1" aria-disabled="true">Bonos</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link  text-light" href="../ver/registro.php" tabindex="-1" aria-disabled="true">Registro</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link  text-light" href="../ver/iniciar_sesion.php" tabindex="-1" aria-disabled="true">Inicar</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link text-light" href="#" tabindex="-1" aria-disabled="true"> Carrito</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 px-3">
      <input class="form-control mr-sm-2 " type="search" placeholder="Buscar..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0  " type="submit">Buscar</button>
    </form>
  </div>
</nav>
  <!-- fin del navbar -->
<!--   comienzo del carrusel de compras -->
	<div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(../nosotros/assets/img/portfolio/t1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Antioquia, Colombia
                      <br> 00001</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">506 </span> 
                      <br>Cerro Nutivara</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">venta | $ 5.000.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(../nosotros/assets/img/portfolio/t2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Venecia, Antioquia
                      <br> 00002</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">405</span> Venecia
                      <br> La clara</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Venta | $ 3.000.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(../nosotros/assets/img/portfolio/t3.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Amazonas, Colombia
                      <br> 00003</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">204 </span> Amazonas
                      <br> El llarumal </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Venta | $ 6.000.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
 <!-- Fin del carrucel de compras -->
 <!-- comienzo de las listas de propiedades -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Lista de Propiedades</h2>
              </div>
              <div class="title-link">
                <a href="property-grid.html">Todas las propiedades
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div id="property-carousel" class="owl-carousel owl-theme">
          <div class="carousel-item-b">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="../nosotros/assets/img/portfolio/t4.jpg" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="property-single.html">Calle 408
                        <br /> Fredonia- Camilo C</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">Renta | $ 5.500.000</span>
                    </div>
                    <a href="#" class="link-a">Click aquí para ver
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Área</h4>
                        <span>5 hectareas
                        
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Árboles</h4>
                        <span>4.500</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Departamento/Lugar</h4>
                        <span>Venecia/Antioquia</span>
                      </li>
                    
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item-b">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="../nosotros/assets/img/portfolio/t4.jpg" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                    <a href="property-single.html">Calle 506
                        <br /> Ciudad Bolivar- Alfonso lopez</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">Venta | $ 3.000.000</span>
                    </div>
                    <a href="#" class="link-a">Click aquí para ver
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Área</h4>
                        <span>2.5 hectareas
                        
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Árboles</h4>
                        <span>2.000</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Departamento/Lugar</h4>
                        <span>Ciudad Bolivar/Antioquia</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item-b">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="../nosotros/assets/img/portfolio/t4.jpg" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                    <a href="property-single.html">Calle 0001
                        <br /> Cartagena -Tairona</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">Venta | $12.000.00</span>
                    </div>
                    <a href="#" class="link-a">Click aquí para ver
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Área</h4>
                        <span>9.5 hectareas
                        
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Árboles</h4>
                        <span>10.000</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Departamento/Lugar</h4>
                        <span>Cartagena/Bolivar</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item-b">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="assets/img/property-10.jpg" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="property-single.html">204 Montal
                        <br /> South Bela Two</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">rent | $ 12.000</span>
                    </div>
                    <a href="property-single.html" class="link-a">Click here to view
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Area</h4>
                        <span>340m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Beds</h4>
                        <span>2</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Baths</h4>
                        <span>4</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Garages</h4>
                        <span>1</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  <!--   fin de las listas de propiedades -->
    </section>

	<main class="contenedor">
		<article></article>
	</main>
	
	 <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div> 
  <!-- javaScript  -->
 	<script src="../help/assets/vendor/jquery/jquery.min.js"></script>
  <script src="../help/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../help/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../help/assets/vendor/php-email-form/validate.js"></script>
  <script src="../help/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../help/assets/vendor/scrollreveal/scrollreveal.min.js"></script> 


   <script src="../help/assets/js/main.js"></script> 

	
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
	<script src="../js/search.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>