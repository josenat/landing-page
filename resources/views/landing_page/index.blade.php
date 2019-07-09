<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ asset('css/app.css?v='.rand()) }}" rel="stylesheet" type="text/css">
    @yield('css')
</head>

<body>
	<div id="app" v-cloak>
	  <!-- Navigacion -->
	  <nav class="navbar navbar-light bg-light static-top">
	    <div class="container">
		  <a class="navbar-brand" href="#">Landing Page</a>
	      <a class="btn btn-primary" href="{{ url('home') }}">Admin Panel</a>
	    </div>
	  </nav>

	  <!-- Cabecera -->
	  <header class="masthead text-white text-center" v-bind:style="styleRow1">
	    <div class="overlay"></div>
	    <div class="container">
	      <div class="row">
	        <div class="col-xl-9 mx-auto">
	          <h1 class="mb-5" v-cloak v-html="title_1"></h1>
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

	        <div class="col-lg-6 order-lg-2 text-white showcase-img" v-bind:style="styleRow2"></div>
	        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
	          <p class="lead mb-0" v-html="title_2"></p>
	        </div>
	      </div>
	      <div class="row no-gutters">
	        <div class="col-lg-6 text-white showcase-img" v-bind:style="styleRow3"></div>
	        <div class="col-lg-6 my-auto showcase-text">
	          <p class="lead mb-0" v-html="title_3"></p>
	        </div>
	      </div>
	      <div class="row no-gutters">
	        <div class="col-lg-6 order-lg-2 text-white showcase-img" v-bind:style="styleRow4"></div>
	        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
	          <p class="lead mb-0" v-html="title_4"></p>
	        </div>
	      </div>
	    </div>
	  </section>

	  <!-- Llamadas de Acción -->
	  <section class="call-to-action text-white text-center" v-bind:style="styleRow5 ">
	    <div class="overlay"></div>
	    <div class="container">
	      <div class="row">
	        <div class="col-xl-9 mx-auto">
	          <h2 class="mb-4" v-html="title_5"></h2>
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

    <script src="{{ asset('js/app.js?v='.rand()) }}"></script>
    @yield('scripts')

</body>
</html>