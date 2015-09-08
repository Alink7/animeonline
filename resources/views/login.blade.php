@extends('base.master')
	
	@section('contenido_cuerpo')
		<div id="caja_login">
			<div class="ui two column middle aligned very relaxed stackable grid">
				<div class="column">
					<div class="ui form">
						<div class="field">
							<label>Usuario</label>
							<div class="ui left icon input">
								<input type="text" placeholder="Usuario">
								<i class="user icon"></i>
							</div>
						</div>
						<div class="field">
							<label>Contraseña</label>
							<div class="ui left icon input">
								<input type="password">
								<i class="lock icon"></i>
							</div>
						</div>
						<div class="ui blue submit button">Ingresar</div>
					</div>
				</div>
				<div class="ui vertical divider"> O </div>
				<div class="center aligned column">
					<a class="ui big green labeled icon button" href="/register">
						<i class="signup icon"></i>Registrarse
					</a>
				</div>
			</div>
		</div>
	@endsection