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
                    <a href="/testimonials/articles/">
                        READ ARTICLES
                    </a>
                </li>
                <li class="active">
                    <a href="/testimonials/" class="active">
                        WATCH VIDEOS
                    </a>
                </li>
            </ul>


            <div class="t-videos">

                <div class="row">
                    <div class="col-md-4">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/z5hgbVDPZsQ" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <p>
                            A Failed Pregnancy And God’s Restoration | New Creation Church
                        </p>
                    </div>

                    <div class="col-md-4">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/w82a1FT5o88" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <p>
                            A Failed Pregnancy And God’s Restoration | New Creation Church
                        </p>
                    </div>

                    <div class="col-md-4">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/tS7SFKKDHGA" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <p>
                            A Failed Pregnancy And God’s Restoration | New Creation Church
                        </p>
                    </div>
                </div>

                <p>
                    &nbsp;
                </p>

                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <a href="/send_testimoney" class="btn btn-primary btn-start">
                            SHARE YOUR TESTIMONY
                        </a>
                    </div>
                </div>

            </div>


        </div>


    </div>



@endsection
