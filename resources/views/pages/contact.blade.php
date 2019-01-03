@extends('layouts.plantilla')

@section('title', 'Contacto')

@section('content')
    <!-- Banner -->
    <div class="inner-page-banner">
        <div class="opacity">
            <h1>¡Genial, gracias por querer contactarnos!</h1>
        </div>
    </div>
    <!-- /Banner -->
    <div style="padding-top: 150px;">
        <div class="container">
            <!--Título-->
            <div class="theme-title-one text-center">
                <a href="#"><h5>También puedes donar para comprar comida <i
                            class="material-icons">shopping_basket</i> <i class="material-icons">local_dining</i>
                    </h5></a>
            </div> <!-- /Título -->
            <div style="padding-top: 100px;">

                <!--Sección del formulario-->
                <div class="contact-us-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <form action="#" class="contact-us-form form-validation" auto-complete="off">
                                    <label>Nombre completo</label>
                                    <input type="text" name="name" autofocus>
                                    <label>Correo electrónico</label>
                                    <input type="email" name="email">
                                    <label>Asunto</label>
                                    <input type="text" name="subject">
                                    <label>Mensaje</label>
                                    <textarea name="message"></textarea>
                                    <div class="theme-button">
                                        <span></span>
                                        <input type="submit" value="Enviar">
                                    </div>
                                </form>

                                <div style="padding-top: 100px;"></div>

                                <!-- Mapa -->
                                <div class="col-xs-12">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15863.815616359221!2d-75.57430178033222!3d6.269792777390103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTYnMTEuMyJOIDc1wrAzMyc1Ni4wIlc!5e0!3m2!1ses!2sco!4v1525223313196"
                                        width="100%" height="450" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                                </div>
                                <!-- /Mapa -->
                                <div style="padding-top: 100px;">
                                </div>
                            </div>
                        </div>
                        <!--/Sección del formulario-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<div style="padding-top: 300px;">--}}
        {{--<div class="what-we-do bg">--}}
            {{----}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
