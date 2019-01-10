@extends('layouts.plantilla')

@section('title', 'Detalle de blog')

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
                    <img src="images/blog/9.jpg" alt="">
                    <h6>{{$post->author->name}}</h6>
                    <h3>{{$post->excerpt}}</h3>
                    <div class="body">
                        {{$post->body}}
                    </div>
                </div> <!-- /.blog-main-post -->
                <div class="tag-option clearfix">
                    <ul class="float-left">
                        <li>Categoría:</li>
                        <li><a href="" class="tran3s">Cuidado,</a></li>
                        <li><a href="" class="tran3s">Alimentación,</a></li>
                        <li><a href="" class="tran3s">Diversión,</a></li>
                        <li><a href="" class="tran3s">Crecimiento</a></li>
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

        <<div class="comentarios">
            <div class="container">
                <div class="wrapper">
                    <div id="disqus_thread"></div>
                    <script>
                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://perritos-1.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Por favor actica el JavaScript para ver los <a href="https://disqus.com/?ref_noscript">comentarios.</a></noscript>
                </div> <!-- /.wrapper -->
            </div> <!-- /.container -->
        </div> <!-- /.comentarios -->
    </div> <!-- /.detalles-blog -->
    <!-- /Details -->
@endsection
