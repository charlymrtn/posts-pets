@extends('layouts.plantilla-auth')

@section('title', 'Crear cuenta')

@section('content')
    <form class="form" method="POST" action="{{route('register')}}">
        @csrf
        <div class="header header-primary text-center">
            <h4>Crear cuenta</h4>
        </div>
        <p class="text-divider">¡Genial, serás un miembro más!</p>
        <div class="content">

            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">account_box</i>
                </span>
                <input type="text" class="form-control{{$errors->has('name') ? ' is-invalid' : ''}}" name="name" value="{{old('name')}}" placeholder="Nombre completo..." required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">email</i>
                </span>
                <input id="email" type="email" class="form-control{{$errors->has('email') ? ' is-invalid' : ''}}" name="email" value="{{old('email')}}" placeholder="Correo electrónico..." required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">vpn_key</i>
                </span>
                <input id="password" type="password" class="form-control{{$errors->has('password') ? ' is-invalid' : ''}}" name="password" placeholder="Contraseña..." required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">lock_outline</i>
                </span>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repetir contraseña..." required>
            </div>


            {{--<div class="checkbox">--}}
                {{--<label>--}}
                    {{--<input type="checkbox" name="optionsCheckboxes" checked>--}}
                    {{--Acepto los <a href="#" target="_blank">términos y condiciones</a>--}}
                {{--</label>--}}
            {{--</div>--}}

        </div>
        <div class="footer text-center" style="min-height: 100px;">
            <button type="submit" class="btn btn-simple btn-primary btn-lg">
                Registrarse <i class="material-icons">pets</i>
            </button>
        </div>
    </form>
@endsection
