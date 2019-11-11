@extends('layouts.master')
@section('title','Digital Trainning -')
@section('content')


    <div class="page-header free_web_bg">
        <div class="page-title">
            <H2>
                DIGITAL TRAINING
                <span>
                    Easy and simple three steps to build a free website  for your church.
                </span>
            </H2>
        </div>
        <div class="overlay"></div>

    </div>

    <div class="page-content page-ministry">
        <div class="container">
            <div class="row d-training justify-content-center pb-4">

                <div class="col-md-6">
                  <h2>
                    Are you launching your digital <br>nets to catch the lost ?
                  </h3>
                  <h5>
                    Train your staff on how to cast the digital nets
                  </h4>

  <img src="{{ asset('html/public/images/free-web.jpg') }} " alt="">

<p>&nbsp;</p>
<p><a>#SocialMediaTraining</a></p>


                        @if($digitalTraining)
                            <p class="text-left">
                            @if($digitalTraining->middle)
                                {!! $digitalTraining->middle !!}
                            @endif
  </p>

  @endif

                    <a href="" class="btn btn-primary btn-start">
                        Learn More
                    </a>
                </div>

            </div>




        </div>
    </div>



@endsection
