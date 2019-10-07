@extends('layouts.master')
@section('title','Build a church -')
@section('content')

    <div class="page-header free_web_bg">
        <div class="page-title">
            <H2>
                BUILD A CHURCH
                <span>
                    Easy and simple three steps to build  your church.
                </span>
            </H2>
        </div>
        <div class="overlay"></div>

    </div>

    <div class="page-content page-build-church">
        <div class="container py-4">

            <div class="row justify-content-center">
                <div class="col-md-7">

                    <h2>
                        OUR MISSION TO  GLORIFY GOD
                    </h2>
                                                                    <p>{!! Page::get('ourmission') !!}</p>

                </div>
            </div>



        </div>

        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ asset('html/public/images/c.jpg') }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('html/public/images/c_2.jpg') }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('html/public/images/c_1.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>


@endsection
