@extends('layouts.master')
@section('title','Free website -')
@section('content')

    <div class="page-header free_web_bg">
        <div class="page-title">
            <H2>
                FREE WEBSITE FOR EVERY MINISTRY
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

<img src="{{ asset('html/public/images/free-web.jpg') }} " alt="">

<p>&nbsp;</p>
                    <p class="text-center">
                        @if($freeWebsite)
                            @if($freeWebsite->middle)
                                {!! $freeWebsite->middle !!}
                            @else
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                                leap into electronic typesetting, remaining essentially unchanged. <Br><Br> It was popularised in
                                the 1960s
                                with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            @endif
                        @else
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                            and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                            leap into electronic typesetting, remaining essentially unchanged. <Br><Br> It was popularised in
                            the 1960s
                            with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        @endif
                    </p>

                    <a href="" class="btn btn-primary btn-start">
                        Apply Now
                    </a>
                </div>

            </div>
        </div>
    </div>

@endsection
