<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Anime Online</title>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{!! URL::asset('css/estilo_base.css') !!}" />
	<link rel="stylesheet" href="{!! URL::asset('css/bootstrap.css') !!}" />
	<link rel="stylesheet" href="{!! URL::asset('css/bootstrap-theme.css') !!}" />
	<link rel="stylesheet" href="{!! URL::asset('css/material.css') !!}" />
	<link rel="stylesheet" href="{!! URL::asset('css/material.min.css') !!}" />
	<link rel="stylesheet" href="{!! URL::asset('fonts/ui_icon/icon.css') !!}" />

	<!-- JS Scripts-->
	<script type="text/javascript" src="{!! URL::asset('js/bootstrap.js') !!}"></script>
	<script type="text/javascript" src="{!! URL::asset('js/material.js') !!}"></script>
	<script type="text/javascript" src="{!! URL::asset('js/material.min.js') !!}"></script>
</head>

<body>
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header has-drawer is-upgraded">
			<div class="android-header mdl-layout__header mdl-layout__header--waterfall">
				<div class="mdl-layout__header-row">
					<span class="android-title mdl-layout-title">
						<img class="android-logo-image" src=""></img>
						<h3>Page Title</h3>
					</span>

					<div class="android-header-spacer mdl-layout-spacer"></div>
					<div class="android-navigation-container">
						<nav class="android-navigation mdl-navigation">
							<a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Link 1</a>
							<a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Link 2</a>
							<a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Link 3</a>
							<a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Link 4</a>
							<a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Link 5</a>
						</nav>
					</div>
					<div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
						<label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
							<i class="small search icon"></i>
						</label>
						<div class="mdl-textfield__expandable-holder">
							<input class="mdl-textfield__input" type="text" id="search-field" placeholder="Buscar..."></input>
						</div>
					</div>
					
				</div>
			</div>

			<div class="android-conent mdl-layout__content">
				<div class="jumbotron">
					<div class="container">
						<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
					</div>
				</div>
			</div>
		</div>

		
	

	@yield('contenidoextra')
</body>
</html>
