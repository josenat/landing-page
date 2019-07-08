<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    @yield('css')
</head>

<body>
	<div id="app">
	  <!-- Navigacion -->
	  <nav class="navbar navbar-light bg-light static-top">
	    <div class="container">
		  <a class="navbar-brand" href="#">Landing Page</a>
	      <a class="btn btn-primary" href="{{ url('home') }}">Admin Panel</a>
	    </div>
	  </nav>

	  <!-- Cabecera -->
	  <header class="masthead text-white text-center">
	    <div class="overlay"></div>
	    <div class="container">
	      <div class="row">
	        <div class="col-xl-9 mx-auto">
	          <h1 class="mb-5" >
				<app-title title_id="1" rows="5"></app-title>
	          </h1>
	          <!-- ¡Cree una página de destino para su negocio o proyecto y genere más clientes potenciales! -->
	        </div>
	        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
	          <form>
	            <div class="form-row">
	              <div class="col-12 col-md-9 mb-2 mb-md-0">
	                <input type="email" class="form-control form-control-lg" placeholder="Ingresa tu correo electrónico...">
	              </div>
	              <div class="col-12 col-md-3">
	                <button type="submit" class="btn btn-block btn-lg btn-primary">¡Regístrese!</button>
	              </div>
	            </div>
	          </form>
	        </div>
	      </div>
	    </div>
	  </header>

	  <!-- Sección de Imágenes -->
	  <section class="showcase" style="margin-top: 60px">
	    <div class="container-fluid p-0">
	      <div class="row no-gutters">

	        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
	        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
	          <h2>Diseño Totalmente Responsivo</h2>
	          <p class="lead mb-0">Cuando usa un tema creado por Start Bootstrap, sabe que el tema se verá bien en cualquier dispositivo, ya sea en un teléfono, tableta o escritorio, ¡la página se comportará de manera responsable!</p>
	        </div>
	      </div>
	      <div class="row no-gutters">
	        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
	        <div class="col-lg-6 my-auto showcase-text">
	          <h2>Actualizado para Bootstrap 4</h2>
	          <p class="lead mb-0">¡Mejorado recientemente, y lleno de excelentes clases de utilidad, Bootstrap 4 está liderando el camino en el desarrollo web móvil sensible! ¡Todos los temas en Start Bootstrap ahora están usando Bootstrap 4!</p>
	        </div>
	      </div>
	      <div class="row no-gutters">
	        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
	        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
	          <h2>Fácil de Usar y Personalizar</h2>
	          <p class="lead mb-0">La página de destino es solo HTML y CSS con un toque de SCSS para los usuarios que exigen opciones de personalización más profundas. Fuera de la caja, simplemente agregue su contenido e imágenes, ¡y su nueva página de destino estará lista para funcionar!</p>
	        </div>
	      </div>
	    </div>
	  </section>

	  <!-- Llamadas de Acción -->
	  <section class="call-to-action text-white text-center" style="margin-top: 60px">
	    <div class="overlay"></div>
	    <div class="container">
	      <div class="row">
	        <div class="col-xl-9 mx-auto">
	          <h2 class="mb-4">¿Listo para comenzar? ¡Regístrate ahora!</h2>
	        </div>
	        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
	          <form>
	            <div class="form-row">
	              <div class="col-12 col-md-9 mb-2 mb-md-0">
	                <input type="email" class="form-control form-control-lg" placeholder="Ingresa tu correo electrónico...">
	              </div>
	              <div class="col-12 col-md-3">
	                <button type="submit" class="btn btn-block btn-lg btn-primary">¡Regístrate!</button>
	              </div>
	            </div>
	          </form>
	        </div>
	      </div>
	    </div>
	  </section>

	  <!-- Pie de Página -->
	  <footer class="footer bg-light">
	    <div class="container">
	      <div class="row">
	        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
	          <ul class="list-inline mb-2">
	            <li class="list-inline-item">
	              <a href="#">Acerca de</a>
	            </li>
	            <li class="list-inline-item">&sdot;</li>
	            <li class="list-inline-item">
	              <a href="#">Contacto</a>
	            </li>
	            <li class="list-inline-item">&sdot;</li>
	            <li class="list-inline-item">
	              <a href="#">Términos de Uso</a>
	            </li>
	            <li class="list-inline-item">&sdot;</li>
	            <li class="list-inline-item">
	              <a href="#">Política de Privacidad</a>
	            </li>
	          </ul>
	          <p class="text-muted small mb-4 mb-lg-0">&copy; Landing Page 2019. Todos los derechos reservados..</p>
	        </div>
	        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
	          <ul class="list-inline mb-0">
	            <li class="list-inline-item mr-3">
	              <a href="#">
	                <i class="fab fa-facebook fa-2x fa-fw"></i>
	              </a>
	            </li>
	            <li class="list-inline-item mr-3">
	              <a href="#">
	                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
	              </a>
	            </li>
	            <li class="list-inline-item">
	              <a href="#">
	                <i class="fab fa-instagram fa-2x fa-fw"></i>
	              </a>
	            </li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </footer>
	
	</div>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

</body>
</html>