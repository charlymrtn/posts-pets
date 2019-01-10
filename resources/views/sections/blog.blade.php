<!-- Blog -->
<div class="our-blog">
    <div class="row">
        @foreach($posts as $post)
            <div class="col-lg-3 col-md-4 col-xs-6">

                <div class="single-blog">
                    <div class="image"><img src="{{voyager::image($post->image)}}" alt=""></div>
                    <div class="text">
                        <h6>{{$post->author->name}}</h6>
                        <h5><a href="#!" class="tran3s">{{$post->title}}</a></h5>
                        <p>{{$post->excerpt}}</p>
                    </div>
                </div> <!-- /.single-blog -->

            </div>
        @endforeach
    </div>

    <div class="pagination">
        {{$posts->links()}}
    </div>
</div>
<!-- /Blog -->
