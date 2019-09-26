@extends('layouts.master')
@section('title','Videos')
@section('content')



<div class="page-header videos_bg">
    <div class="page-title">
        <H2>
            RESOURCES - ALL VIDEOS
        </H2>
    </div>
    <div class="overlay"></div>
</div>

<div class="page-content page-videos">

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>
                    Video categories
                </h3>
                <ul class="list-unstyled v-cats">
                    <li><a href="{{ url('/resources') }}" class="active"> All videos</a> </li>
                    <li><a href="{{ url('/resources/sermons') }}" class=""> Sermons</a></li>
                    <li><a href="{{ url('/resources/teaching') }}" class=""> Teachings</a></li>
                    <li><a href="{{ url('/resources/promotions') }}" class=""> Promotions</a></li>
                    <li><a href="{{ url('/resources/worship') }}" class=""> Worship</a></li>
                    <li><a href="{{ url('/resources/crusades') }}" class=""> Crusades</a></li>

                   
                </ul>
            </div>

            <div class="col-md-9">
                <!--                <div class="category-active">-->
                <!--                    Sermons-->
                <!--                </div>-->

                <h3>
                    <span>
                    </span>All Videos, Short movies, Documentaries
                </h3>
                <div class="row related-videos">

                    @foreach ($videos  as $video)

                    <div class="col-md-4">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $video->link }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p>
                            {{ $video->name }}
                        </p>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
