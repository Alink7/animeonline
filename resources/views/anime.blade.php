@extends('base.master')

@section('contenido_cuerpo')
	<div id="cartelera">
		<div class="ui grid">
			@for($i = 0; $i < 20; $i++)
				<div class="three wide column">
					<div class="ui card">
						<div class="image">
							{!! HTML::image('imagenes/kg9.jpg') !!}
						</div>

						<div class="content">
							<div class="header">Kangoku Gakuen 9</div>
							<div class="description"></div>
						</div>
						<div class="ui two bottom attached buttons">
							<div class="ui button">
								<i class="add icon"> </i>Queue
							</div>
							<div class="ui primary button">
								<i class="play icon"></i>Ver
							</div>
						</div>
					</div>
				</div>
			@endfor
		</div>
	</div>
@endsection