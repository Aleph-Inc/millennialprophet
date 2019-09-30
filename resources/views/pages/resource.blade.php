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
                    <li><a style="cursor: pointer;" class="watchvideos active" id="all" > All videos</a> </li>
                    <li><a style="cursor: pointer;" class="watchvideos" id="sermons" > Sermons</a></li>
                    <li><a style="cursor: pointer;" class="watchvideos" id="teaching" > Teachings</a></li>
                    <li><a style="cursor: pointer;" class="watchvideos" id="promotion" > Promotions</a></li>
                    <li><a style="cursor: pointer;" class="watchvideos" id="worship" > Worship</a></li>
                    <li><a style="cursor: pointer;" class="watchvideos" id="crusades" > Crusades</a></li>

                   
                </ul>
            </div>

            <div class="col-md-9">
                    <div id="latest">
                    <!--                <div class="category-active">-->
                    <!--                    Sermons-->
                    <!--                </div>-->

                    <h3>
                        <span>
                        </span>All Videos, Short movies, Documentaries
                    </h3>
                    </div>
                    <div class="row related-videos" id="section">

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

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<script>
$('.watchvideos').click(function(){
    let linkname = $(this).attr('id'); 
    $.ajax({
        url: "{{ url('/') }}/resources/"+linkname,
        method: 'GET',
        success: function (data) {
            var x = data.videos.length;
            var p = data.latest;
            console.log(p);
            $("#section").empty();
            $("#latest").empty();

            document.querySelector('.watchvideos').classList.remove('active');

            var element = document.getElementById(linkname);
            element.classList.add('watchvideos', 'active');

            var name = data.latest.name;
            var link = data.latest.link;
            var category = data.latest.category;
            var newcategory = category.charAt(0).toUpperCase() + category.slice(1);

            if(linkname != 'all')
            {
                $('#latest').append(
                    `<div class="category-active">
                        ${name}
                    </div>

                    <h3>
                    <span>
                        Latest -
                    </span>${newcategory}
                    </h3>
                    <div class="main-video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/${link}" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div><div class="col-12 related-videos">
                                <h5>
                                    Related videos
                                </h5>
                            </div>`
                );

                for (let y = 0; y < x; y++) {
                    var name = data.videos[y].name;
                    var link = data.videos[y].link;

                    $('#section').append(
                        `
                        <div class="col-md-4">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/${link}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <p>
                                ${name}
                            </p>
                        </div>`
                    );
                }
            }
            else
            {
                $('#latest').append(
                    `<h3>
                        <span>
                        </span>All Videos, Short movies, Documentaries
                    </h3>`
                );

                for (let y = 0; y < x; y++) {
                    var name = data.videos[y].name;
                    var link = data.videos[y].link;

                    $('#section').append(
                        `<div class="col-md-4">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/${link}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <p>
                                ${name}
                            </p>
                        </div>`
                    );
                }
            }
        }
    })   
});
</script>

@endsection
