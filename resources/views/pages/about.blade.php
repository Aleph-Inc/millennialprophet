@extends('layouts.master')
@section('title',"About")
@section('content')



    <div class="page-header page-big about_bg">
        <div class="page-title">
            <h2>
                ABOUT <br>
                MILLENNIAL PROPHET
            </h2>
        </div>
        <div class="overlay"></div>
    </div>
    <div class="page-content about-mp">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-7">
                    <h2 class="text-blue">
                        WHO WE ARE
                    </h2>

                    <p>{{ Page::get('whoweare')  }}</p>


                </div>
            </div>


        </div>


        <img src="{{ asset('html/public/images/jesus_img.jpg') }}" alt="" class="page-full-image">
        <div class="container" style="margin-top:-160px;">
            <div class="row justify-content-center">

                <div class="col-md-7">
                    <h2 class="text-white">WHAT JESUS DID FOR YOU</h2>

                    <p>{{ Page::get('whatjesus') }}</p>

                </div>

            </div>

        </div>


        <div class="container">
            <p>
                &nbsp;
            </p>


            <div class="row no-gutters justify-content-center ministry-links">

                <div class="col-md-7">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/W2Cv5hZfOmk" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                    <h4>
                        His Heart To Heal You
                    </h4>
                    <p>

                    <p>{{ Page::get('hisheal') }}</p>


                    </p>


                    <h2>
                        MINISTRIES
                    </h2>
                    <p>

                    <p>{{ Page::get('ministries') }}</p>

                    </p>


                    <ul>

                        <li>
                            <a href="#">
                                Broadcast
                            </a>

                            <a href="#">Chinese Ministry</a>
                            <a href="#">Communications</a>
                            <a href="#">Information Technology</a>
                            <a href="#">Logistics & Transport</a>
                        </li>

                        <li>
                            <a href="#">
                                Broadcast
                            </a>

                            <a href="#">Chinese Ministry</a>
                            <a href="#">Communications</a>
                            <a href="#">Information Technology</a>
                            <a href="#">Logistics & Transport</a>
                        </li>

                        <li>
                            <a href="#">
                                Broadcast
                            </a>

                            <a href="#">Chinese Ministry</a>
                            <a href="#">Communications</a>
                            <a href="#">Information Technology</a>
                            <a href="#">Logistics & Transport</a>
                        </li>
                    </ul>

                </div>

            </div>


        </div>
    </div>


@endsection


