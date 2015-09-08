@extends('base.master')

@section('text_container')
    <div class="ui text container">
        <h1 class="ui inverted header">Anime Online</h1>
        <h2>
            El mejor sitio para ver tus series.
            <p></p>
            <div class="ui huge primary button">
                Empezar
                <i class="right arrow icon"></i>
            </div>
        </h2>
    </div>
@endsection

@section('contenido_cuerpo')
    <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
            <div class="row">
                <div class="eight wide column">
                    <h3 class="ui header">Ve tus series preferidas</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    </p>
                    <h3 class="ui header">Titulo 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="six wide right floated column">
                    <img src="/imagenes/white-image.png" class="ui large bordered rounded image">
                </div>
            </div>
        </div>
    </div>
@endsection