@extends('layouts.master')
@section('title','Empower Ministry -')
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
            <div class="row digital-training-block justify-content-center">
                <div class="col-md-6">
                  <h2>
                      FREE WEBSITE FOR<Br>
                      EVERY MINISTRY
                  </h2>
                    <p>
                      Easy and simple three steps to build a free website  for your church.
                  </p>

                  <img src="{{ asset('html/public/images/dg.jpg') }}" alt="">

                  <p class="text-left">

                    What a privilege it is to serve Him during these exciting times! God is accomplishing great and
                    mighty things, and that’s why I want to personally invite you to become a Covenant Partner so
                    that,
                    together, we can fulfill the Great Commission and win the world in His mighty name.
                    <br><br>
                    As a partner in this ministry, you will be making a difference in lives around the world, and
                    what a
                    privilege it is to serve Him during these exciting times.  hen I minister to the multitudes, my
                    partners are there with me.

                    <br><br>

                    When I go to the nations through television and crusades, and when we see multiplied tens of
                    thousands of men, women, and children weeping as they accept Jesus in their lives, you will be
                    blessed with an eternal harvest for the seed you have sown.

                  </p>


                        <div class="row digital-media-btns">
                        <div class="col-md-6">
                          <a class="btn btn-primary btn-start" href="{{ url('/empower/free-websites') }}"> Free websites</a>
                        </div>
                        <div class="col-md-6">
                      <a class="btn btn-primary btn-start" href="{{ url('/empower/free-websites') }}"> Digital media training </a>
                        </div>
                        </div>

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
                      APPLY NOW
                    </a>
                </div>

            </div>
        </div>

        <div class="overlay"></div>
    </div>


@endsection
