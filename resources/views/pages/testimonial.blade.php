@extends('layouts.master')
@section('title','Testimonials')
@section('content')
    <div class="page-header testimonial_bg">
        <div class="page-title">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <H2>
                            TESTIMONIES
                            <span>
                                Be encouraged by these stories of the Lord’s goodness and let them plant hope in your heart.
                            </span>
                        </H2>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </div>

    <div class="page-content">
        <div class="container">


            <ul class="testimony-tabs">
                <li>
                    <a class="" style="cursor: pointer;" id="testarticle" onclick="readarticle();">
                        READ ARTICLES
                    </a>
                </li>
                <li>
                    <a style="cursor: pointer;" class="active" id="testvideos" onclick="watchvideos();">
                        WATCH VIDEOS
                    </a>
                </li>
            </ul>


            <div class="t-videos" id="sectiondiv">

                <div class="row" id="testimonial">
                    @foreach($testimonials as $testimonial)
                    <div class="col-md-4">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $testimonial->link }}" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <p>
                            {{$testimonial->name}}
                        </p>
                    </div>
                    @endforeach
                </div>

                <p>
                    &nbsp;
                </p>

                <div class="row justify-content-center">
                    <div class="col-md-4">
                    <a href="{{ url('/connect/testimonies') }}" class="btn btn-primary btn-start">

                            SHARE YOUR TESTIMONY
                        </a>
                    </div>
                </div>

            </div>


        </div>


    </div>

    <script>
        function readarticle() {
            var data = [];
            $.ajax({
                url: "{{ url('/') }}/testimonials/articles",
                method: 'GET',
                success: function (data) {
                    var x = data.testimonial.length;
                    console.log(data.testimonial);
                    $("#testimonial").empty();
                    var element1 = document.getElementById("testarticle");
                    element1.classList.add('active');

                    var element2 = document.getElementById("testvideos");
                    element2.classList.remove("active");

                    var element3 = document.getElementById("sectiondiv");
                    element3.classList.add("t-articles");

                    const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                    const days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday']

                    for (let y = 0; y < x; y++) {
                        var name = data.testimonial[y].user_name;
                        var article_name = data.testimonial[y].article_name;
                        var date = new Date(data.testimonial[y].date);
                        var month = (date.getUTCMonth()+1);
                        var monthname = monthNames[date.getUTCMonth()];
                        var day = String(date.getUTCDate() + 1).padStart(2, '0');
                        var dayIndex = date.getDay();
                        var dayName = days[dayIndex];
                        var year = date.getUTCFullYear();
                        var description = data.testimonial[y].description;

                        $('#testimonial').append(
                            `<div class="col-md-6">
                                <a href="#">
                                    <div class="row border-bottom">
                                        <div class="col-sm-6">
                                            <p class="text-left">
                                                Submitted <span>by ${name}</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="text-right">
                                                <span>
                                                ${dayName} ${monthname} ${day} / ${year}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <h3>
                                        ${article_name}
                                    </h3>
                                    <span>

                                </span>
                                </a>
                            </div>`
                        );
                    }
                }
            })
        }

        function watchvideos() {
            var data = [];
            $.ajax({
                url: "{{ url('/') }}/testimonials/videos",
                method: 'GET',
                success: function (data) {
                    var x = data.testimonial.length;
                    console.log(x);
                    $("#testimonial").empty();
                    var element1 = document.getElementById("testvideos");
                    element1.classList.add('active');

                    var element2 = document.getElementById("testarticle");
                    element2.classList.remove("active");

                    var element3 = document.getElementById("sectiondiv");
                    element3.classList.add("t-videos");

                    for (let y = 0; y < x; y++) {
                        var name = data.testimonial[y].name;
                        var link = data.testimonial[y].link;

                        $('#testimonial').append(
                            `<div class="col-md-4">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/${link}" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                <p>
                                    ${name}
                                </p>
                            </div>`
                        );
                    }
                }
            })
        }
    </script>


@endsection
