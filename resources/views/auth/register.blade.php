@extends('layouts.plantilla-auth')

@section('title', 'Crear cuenta')

@section('content')
    <form class="form" method="" action="">
        <div class="header header-primary text-center">
            <h4>Crear cuenta</h4>
        </div>
        <p class="text-divider">¡Genial, serás un miembro más!</p>
        <div class="content">

            <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">account_box</i>
										</span>
                <input type="text" class="form-control" placeholder="Nombre completo...">
            </div>

            <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
                <input type="text" class="form-control" placeholder="Correo electrónico...">
            </div>

            <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">vpn_key</i>
										</span>
                <input type="password" placeholder="Contraseña..." class="form-control" />
            </div>

            <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
                <input type="password" placeholder="Repetir contraseña..." class="form-control" />
            </div>


            <div class="checkbox">
                <label>
                    <input type="checkbox" name="optionsCheckboxes" checked>
                    Acepto los <a href="#" target="_blank">términos y condiciones</a>
                </label>
            </div>
        </div>
        <div class="footer text-center" style="min-height: 100px;">
            <a href="#pablo" class="btn btn-simple btn-primary btn-lg">Registrarse <i class="material-icons">pets</i></a>
        </div>
    </form>
@endsection
