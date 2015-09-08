<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>Anime Online</title>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{!! URL::asset('css/estilo_base.css') !!}" />
	<link rel="stylesheet" href="{!! URL::asset('css/semantic/dist/semantic.css') !!}" />

	<!-- JS Scripts-->
	<script type="text/javascript" src="{!! URL::asset('js/jquery.min.js') !!}"></script>
	<script type="text/javascript" src="{!! URL::asset('js/semantic.js') !!}"></script>
	<script type="text/javascript" src="{!! URL::asset('js/accion_buscar.js') !!}"></script>
	<script type="text/javascript" src="{!! URL::asset('js/accion_sidebar.js') !!}"></script>

</head>

<body class="pushable">

	<!-- Menu que aparece al desplazarse hacia abajo -->
	<div class="ui large top fixed menu transition hidden">
		<div class="ui container">
			<a class="active item">Inicio</a>
			<a class="item">Link 2</a>
			<a class="item">Link 3</a>
			<a class="item">Link 4</a>
			<div class="right menu">
				<div class="item">
					<a class="ui button">Ingresar</a>
				</div>
				<div class="item">
					<a class="ui primary button">Registrarse</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Menu desplegable -->
	<div class="ui vertical inverted sidebar menu left">
		<a class="active item">Inicio</a>
		<a class="item">Anime</a>
		<a class="item">Biblioteca</a>
		<a class="item">Ingresar</a>
		<a class="item">Registrarse</a>
	</div>

	<!-- contenido de la pagina -->
	<div class="pusher">
		<div class="ui inverted vertical masthead center aligned segment">
			<div class="ui container">
				<div class="ui large secondary inverted pointing menu">
					<a class="toc item">
						<i class="sidebar icon"></i>
					</a>
					<a class="active item" href="/">Inicio</a>
					<a class="item" href="/anime">Anime</a>
					<a class="item">Biblioteca</a>
					<div class="right item">
						<div class="ui search">
							<div class="ui icon input">
								{!! Form::text('busqueda', '', array('class' => 'prompt', 'placeholder' => 'Busqueda...')) !!}
								<i class="search icon"></i>
							</div>	
							<div class="results transition"></div>	
						</div>
						<a class="ui inverted button" href="/login">Ingresar</a>
						<a class="ui inverted button" href="/register">Registrarse</a>
					</div>
				</div>
			</div>

			@yield('text_container') <!-- solo en el index -->
		</div>

		<div class="contenido_principal">
			@yield('contenido_cuerpo')
		</div>
		
	</div>

</body>
</html>
