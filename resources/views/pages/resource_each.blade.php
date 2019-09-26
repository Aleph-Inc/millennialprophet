@extends('layouts.master')
@section('title','Video each')
@section('content')

    <div class="page-header videos_bg">
        <div class="page-title">
            <H2>
                VIDEOS
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
                    @if (!$videos->isEmpty())

                    <div class="category-active">
                        {{ $latest->category }}
                    </div>

                    <h3>
                    <span>
                        Latest -
                    </span>{{ $latest->name }}
                    </h3>
                    <div class="main-video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $latest->link}}" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>


                    <div class="row related-videos">

                        <div class="col-12">
                            <h5>
                                Related videos
                            </h5>
                        </div>

                        @foreach($videos as $video)
                        <div class="col-md-4">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $video->link }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p>
                            {{ $video->name }}
                        </p>
                        </div>
                        @endforeach
                        @endif

                       

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
