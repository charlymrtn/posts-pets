@extends('layouts.plantilla')

@section('title', 'Blog')

@section('content')

    <!-- Banner -->
    <div class="inner-page-banner">
        <div class="opacity">
            <h1>Mascotas = familia</h1>
        </div>
    </div>
    <!-- /Banner -->

    <!-- seccion de separación -->
    <div style="padding-top: 100px;">

    </div>

    @include('sections.blog')

    <div style="padding-bottom: 10px;"></div>
@endsection

