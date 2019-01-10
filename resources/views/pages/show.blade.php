@extends('layouts.plantilla')

@section('title', $post->title)

@section('content')

    <!-- Banner -->
    <div class="inner-page-banner">
        <div class="opacity">
            <h1>{{$post->title}}</h1>
        </div>
    </div>
    <!-- /Banner -->

    <!-- Details -->
    <div class="blog-details blog-v3">
        <div class="container">
            <div class="wrapper">
                <div class="blog-main-post">
                    <img src="{{voyager::image($post->image)}}" alt="">
                    <h6>{{$post->author->name}}</h6>
                    <h3>{{$post->excerpt}}</h3>
                    <div class="body">
                        {!! $post->body !!}
                    </div>
                </div> <!-- /.blog-main-post -->
                <div class="tag-option clearfix">
                    <ul class="float-left">
                        <li>Categoría:</li>
                        <li><a href="{{route('category.show',$post->category->slug)}}" class="tran3s">{{$post->category->name}}</a></li>
                        <br>
                        <li>Plabras clave:</li>
                        @foreach($keywords as $word)
                            <li><a href="#!" class="tran3s" disabled>{{$word}}</a></li>
                        @endforeach
                    </ul>
                    <ul class="float-right">
                        <li>Compartir:</li>
                        <li><a href="{{setting('site.github')}}" class="tran3s" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="{{setting('site.twitter')}}" class="tran3s" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div> <!-- /.tag-option -->
            </div> <!-- /.wrapper -->
        </div> <!-- /.container -->

        @include('sections.comments')
    </div> <!-- /.detalles-blog -->
    <!-- /Details -->
@endsection
