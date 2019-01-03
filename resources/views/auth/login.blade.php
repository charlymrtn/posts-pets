@extends('layouts.plantilla-auth')

@section('title', 'Ingresar')

@section('content')
    <form class="form" method="POST" action="{{route('login')}}">
        @csrf
        <div class="header header-primary text-center">
            <h4>Ingresar</h4>
        </div>
        <p class="text-divider">¡Volviste! Bienvenido nuevamente &#10084;</p><br>
        <div class="content">

            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">email</i>
                </span>
                <input id="email" type="email" class="form-control{{$errors->has('email') ? ' is-invalid' : ''}}" placeholder="Correo electrónico..." name="email" value="{{old('email')}}" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$errors->first('email')}}</strong>
                    </span>
                @endif
            </div>

            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">lock_outline</i>
                </span>
                <input id="password" type="password" class="form-control{{$errors->has('password') ? ' is-invalid' : ''}}" name="password" placeholder="Contraseña..." required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$errors->first('password')}}</strong>
                    </span>
                @endif
            </div>
            <br>

            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" id="remember" {{old('remember') ? 'checked' : ''}}>
                    Recordar mis datos
                </label>
            </div>
            <br>
        </div>

        <div class="footer text-center">
            <button type="submit" class="btn btn-simple btn-primary btn-lg">
                Ingresar <i class="material-icons">fingerprint</i>
            </button>
        </div>

        @if (Route::has('password.request'))
            <div class="password"><a href="{{route('password.request')}}"><span class="label label-danger">¿Olvidaste la contraseña?</span></a></div>
        @endif

    </form>
@endsection
