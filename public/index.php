<?php

require '../core/Router.php';
require '../app/controller/Order.php';

$url = $_SERVER['QUERY_STRING'];

$router = new Router();

$router->add('/public', array(
    'controller'=>'Home',
    'action'=>'index'
    )
);

$router->add('/orders', array(
    'controller'=>'Orders',
    'action'=>'new'
    )
);

$urlParams = explode('/',$url);

$urlArray = array(
  'HTTP'=>$_SERVER['REQUEST_METHOD'],
  'path'=>$url,
  'controller'=>'',
  'action'=>'',
  'params'=>'',
);

if(!empty($urlParams[2])){
  $urlArray['controller'] = ucwords($urlParams[2]);
  if(!empty($urlParams[3])){
    $urlArray['action'] = $urlParams[3];
    if(!empty($urlParams[4])){
      $urlArray['params'] = ($urlParams[4]);
    }else{
      $urlArray['params'] = $urlParams[4];
    }
  }else{
    $urlArray['action'] = 'index';
  }
}else{
  $urlArray['controller'] = 'Home';
  $urlArray['action'] = 'index';
}

if($router->match($urlArray)){
  $controller=$router->getParams()['controller'];
  $action=$router->getParams()['action'];

  $controller = new $controller();
  $controller->$action();
}else{
  echo "No route found for URL: ".$url;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="robots" content="nofollow">
  <!--meta http-equiv="refresh" content="5;url=https://www.vivirdeliciosamente.com"-->
  <meta name="revisit" content="30 days">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Descripción Vivir deliciosamente">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>VIVIR DELICIOSAMENTE</title>
  <link rel="stylesheet" href="../css/estilos.min.css">
  <link rel="stylesheet" href="../css/cookies.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&family=Oregano&family=Urbanist:wght@100&display=swap"
    rel="stylesheet">

</head>

<body>
  <!-- Banner Cookies
    <div class="aviso-cookies activo" id="aviso-cookies">
        <img src="../img/cookies.png" alt="Galleta" class="galleta">
        <h4 class="titulo">Cookies</h4>
        <p>Utilizamos cookies propias y de terceros para mejorar nuestros servicios y su experiencia de navegación</p>
        <button class=" bot-cookies" id="btn-aceptar-cookies">De Acuerdo</button>
        <button class="btn-secondary bot-cookies" href="../aviso-cookies.html">Política de Cookies</button>
    </div>-->
  <div class="row justify-content-between top">
    <nav class="nav nav-pills col-sm-4 col-md-9 justify-content-end">
      <a class="d-none d-md-block nav-link footnav" href="https://vivirdeliciosamente.com/index.html">Inicio</a>
      <a class="d-none d-md-block nav-link footnav" href="view/noticias.html">Noticias</a>
      <a class="d-none d-md-block nav-link footnav" href="view/contacto.html">Contacto</a>
    </nav>
  </div>
  <div class="container">
    <header class="row mt-5">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid justify-content-between">
          <a class="navbar-brand" href="./index.html"><img src="../view/img/logo.png" class="img-fluid" alt="logo"
              width="250px"></a>
          <button class="navbar-toggler mb-4" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Navegación de palanca">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="view/laminas.html">Configura tu lámina</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tienda</a>
              </li>
              <li class="nav-item">
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="" aria-label="Buscar">
                  <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                </form>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    </header>
  </div>
  <main class="container-fluid">

    <div class="col-10 mx-auto mensaje">
      <h1 class="mt-5">Dale color a tu librería</h1>
    </div>
    <!--Video animación librería-->
    <div class="ratio ratio-16x9 video mx-auto">
      <video muted autoplay loop class="col-sm-11 col-lg-8 d-lg-block">
        <source src="view/img/anima.mp4" title="Dale color a tu librería" />
      </video>
    </div>

    <h4 class="my-4 mx-sm-1 mx-lg-5 propuesta">Cambia el color de tu estante de libros y proponte nuevos retos de
      lectura.<br>Además de recomendarte libros, te proponemos un regalo excepcional para promover la lectura.</h4>
    <!--article descripción 1-->
    <div class="row mx-sm-1 mx-lg-5 contarticle">
      <div class="col-10 mx-auto article">
        <div class="mx-auto my-2">
          <h2><b>El regalo ideal para volver a la lectura</b></h2>
          <!--Imagen para lg+-->
          <img class="d-none d-lg-block img-fluid float-lg-start d-inline mx-5 my-3" src="view/img/libro_regalo.PNG" alt="Lectora recibe libro de regalo. Imagen obtenida con IA de Canvas"/>
          <!--Imagen para móviles-->
          <img class="d-sm-block d-md-none my-3" src="view/img/libro_regalo.PNG" alt="Lectora recibe libro de regalo. Imagen obtenida con IA de Canvas"/>
          <h5 class="justificado"><br><b>
          <b>La gran mayoría de lectores tenemos la costumbre de comprar libros nuevos a pesar de
            tener muchos libros pendientes de leer, ya sea porque con frecuencia se nos recomienda algún libro o
            encontramos alguno que nos puede interesar.</h5>
            <h5 class="justificado"> Muchos lectores no encontramos o no buscamos tiempo de lectura por la vida tan atareada que llevamos y
            muchos también por otras causas que tienen más que ver con el cambio digital que con el ajetreo.
          </b></h5>
        </div>
      </div>
    </div>

    <!--Secciín de lámninas. con más de 3 pasará a ser un carrusel para que no invada el espacio vertical en móviles-->
    <section class="mx-auto my-5 laminas">
      <h1 class="mx-auto mensaje">¿Cómo funciona?: Configurando el regalo ideal</h1>
      <article class="row justify-content-between">
        <div class="col-sm-10 col-md-4 col-lg-3 mx-auto tarjeta">
          <img class="img-fluid" src="view/img/lamina01.png" alt = "Lámina"/>
          <h4>LAMINA CLÁSICA</h4>
        </div>
        <div class="col-sm-10 col-md-4 col-lg-3 mx-auto tarjeta">
          <img class="img-fluid" src="view/img/lamina02.png" alt = "Lámina"/>
          <h4>LAMINA VINTAGE</h4>
        </div>
        <div class="col-sm-10 col-md-4 col-lg-3 mx-auto tarjeta">
          <img class="img-fluid" src="view/img/lamina03.png" alt = "Lámina"/>
          <h4>LAMINA INFANTIL</h4>
        </div>
    </article>
    </section>

    <!--Sección con disposición de artículos en lista-->
    <section class="mx-auto seccion">
      <article class="col-12 my-2">
        <h4 class="titarti">1. Elige los 12 libros que quieras o tengas pendientes para leer</h4>
        <img src="view/img/estanteMini.png" alt="Estante con libros. Imagen obtenida con IA de Canvas" class="img d-sm-block d-md-none img-fluid mx-5 imagarti"/>
        <img src="view/img/estanteMini.png" alt="Estante con libros. Imagen obtenida con IA de Canvas" class="img d-none d-md-block img-fluid float-start d-inline imagarti"/>
        <h5 class="textarti justificado">Si necesitas recomendaciones, estás en el sitio adecuado. Utiliza el recomendador de libros
            que te proponemos aquí.</h5>
      </article>

      <article class="col-12 my-2">
        <h4 class="titarti">2. Elige la lámina que prefieras.</h4>
        <img src="view/img/selecciona.png" alt="Dedo señala la lámina elegida." class="img d-sm-block d-md-none img-fluid mx-5 imagarti"/>
        <img src="view/img/selecciona.png" alt="Dedo señala la lámina elegida." class="img d-none d-md-block img-fluid float-start d-inline imagarti"/>
        <h5 class="textarti justificado">En la lámina situaremos los libros que has elegido tapados por un sistema de rascas. Así, no
            tendrás la tentación de saltar al siguiente libro hasta que termines el que estás leyendo.</h5>
      </article>

      <article class="col-12 my-2">
        <h4 class="titarti">3. Completa el proceso con los detalles de la compra</h4>        
        <img src="view/img/regalodelicioso.png" alt="Lámina envuelta para regalo con lazo rojo. Imagen obtenida con IA de Canvas" class="img d-sm-block d-md-none img-fluid mx-5 imagarti"/>
        <img src="view/img/regalodelicioso.png" alt="Lámina envuelta para regalo con lazo rojo. Imagen obtenida con IA de Canvas" class="img d-none d-md-block img-fluid float-start d-inline imagarti"/>
        <h5 class="textarti justificado">Podemos enviarte la lámina envuelta para regalo e incluso se la podemos enviar a quien vaya
            dirtigido y con una terjeta con lo que le quieras decir.</h5>
      </article>

      <article class="col-12 my-2">
        <h4 class="titarti">4. Recibe la lámina y ponla en el lugar que hayas elegido.</h4>
        <img src="view/img/enmarcada.png" alt="Chica observa lámina enmarcada en la pared. Imagen obtenida con IA de Canvas" class="img d-sm-block d-md-none img-fluid mx-5 imagarti"/>
        <img src="view/img/enmarcada.png" alt="Chica observa lámina enmarcada en la pared. Imagen obtenida con IA de Canvas" class="img d-none d-md-block img-fluid float-start d-inline imagarti"/>
        <h5 class="textarti justificado">No te preocupes por el marco, nuestras láminas están diseñadas para medidas de marcos
            estándares para que no te cueste tiempo ni demasiado dinero colocarle le marco perfecto.</h5>
      </article>
      
    </section>
      <!--article descripción 2-->
      <div class="row contarticle">
        <div class="col-10 mx-auto article">
          <div class="mx-auto my-2">
            <h2><b>El regalo ideal para volver a la lectura</b></h2>
            <!--Imagen para lg+-->
            <img class="d-none d-lg-block img-fluid float-lg-end d-inline mx-5 my-3" src="view//estudiante.PNG" alt="Estudiante sujeta montón de libros mientras sonríe. Imagen obtenida con IA de Canvas"/>
            <!--Imagen para móviles-->
            <img class="d-md-block d-lg-none img-fluid my-3" src="view/img/estudiante.PNG" alt="Estudiante sujeta montón de libros mientras sonríe. Imagen obtenida con IA de Canvas"/>
            <h5 class="justificado"><br><b>
              Vivir Deliciosamente te propone una fórmula para volver a leer tanto como antes, leer
                tanto como nos gustaría o incluso, empezar a leer algo más que artículos o revistas porque además de que nunca
                es tarde para empezar ¿no es cierto que la lectura y poder hablar de libros, además de cultura y buenos ratos,
            </b></h5>
          </div>
        </div>
      </div>


  </main>

  <footer>
    <div class="row container-fluid my-5 justify-content-evenly mx-auto mb-5">

      <div class="row col-sm-10 order-sm-2 col-md-3 order-md-3 d-md-block justify-content-around mx-auto">
        <form action="mailto:info@vivirdeliciosamente.com" class="form">
          <p>SOLICITUD DE INFORMACIÓN:</p>
          <select class="formu" id="opciones" name="opciones" required>
            <option value="">-- Seleccione una lámina --</option>
            <option value="opcion1">Clásica</option>
            <option value="opcion2">Moderna</option>
            <option value="opcion3">Infantil</option>
            <option value="opcion4">Anime</option>
          </select>
          <textarea class="formu" name="textarea" rows="3" cols="auto"></textarea>
          <button class="btn btn-outline-light col-12 boton" type="submit">Enviar</button>
        </form>
      </div>



      <div class="d-none col-md-1 d-md-block order-md-4"></div>

      <div class="col col-sm-5 order-sm-5 col-md-2 order-md-5 mx-auto my-2">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link footnav">OTROS ENLACES:</a>
          </li>
          <li class="nav-item">
            <a class="nav-link footnav" href="../view/noticias.html">Noticias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link footnav" href="../view/aviso-legal.html">Aviso Legal </a>
          </li>
          <li class="nav-item">
            <a class="nav-link footnav" href="../view/contacto.html">Contacto</a>
          </li>
        </ul>
      </div>

    </div>
  </footer>
  <script src="../view/js/aviso-cookies.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>