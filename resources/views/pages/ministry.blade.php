@extends('layouts.master')
@section('title','Empower Ministry')
@section('content')

    <div class="page-header events_bg">
        <div class="page-title">
            <H2>
                EMPOWER MINISTRIES
            </H2>
        </div>
        <div class="overlay"></div>
    </div>

    <div class="page-content page-ministry">
        <div class="container">
            <div class="row digital-training-block ">
                <div class="col-md-6">
                    <h4>
                        Empower Ministries
                    </h4>
                    <h2>
                        FREE WEBSITE FOR<Br>
                        EVERY MINISTRY
                    </h2>
                    <p>
                        Easy and simple three steps to build a free website  for your church.
                    </p>

                    <a href="" class="btn btn-primary btn-start">
                        Learn More
                    </a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('html/public/images/dg.jpg') }}" alt="">

                </div>
            </div>

        </div>
    </div>

    <!-- digital training -->
    <div class="block-digital-training digital_bg">
        <div class="container">

            <div class="row justify-content-center">

                <div class="col-md-6">
                    <h2>
                        MINISTRY
                    </h2>
                    <H3>
                        DIGITAL TRAINING
                    </H3>

                    <p>
                        Deciphering marketing lingo for small business owners
                    </p>

                    <a href="/empower/digital-training"
                       class="btn btn-primary btn-start">
                        GET STARTED
                    </a>
                </div>

            </div>
        </div>

        <div class="overlay"></div>
    </div>


@endsection
