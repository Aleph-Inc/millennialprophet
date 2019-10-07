@extends('layouts.master')

@section('title',"Jesus -")
@section('content')
<div class="page-header jesus_bg">
    <div class="page-title">
        <H2>
            JESUS
        </H2>
    </div>
    <div class="overlay"></div>
</div>

<div class="page-content page-jesus">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-7">
                <h2>
                    WHAT JESUS DID FOR YOU
                </h2>
                <p><p>{{ Page::get('whatjesus') }}</p>


                </p>
            </div>
        </div>
    </div>


    <img src="{{ asset('html/public/images/jesus_img.jpg') }}" alt="" class="page-full-image">


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
               
                    <p>{{ Page::get('middle') }}</p>

                

                <h4>
                    His Heart To Heal You
                </h4>
                
                    <p>{{ Page::get('hisheal') }}</p>

                
            </div>


        </div>

    </div>

</div>
@endsection
