@extends('layouts.master')
@section('title','Past')
@section('content')
    <div class="page-header events_bg">
        <div class="page-title">
            <H2>
                PAST EVENTS
            </H2>
        </div>
        <div class="overlay"></div>
    </div>
    <div class="page-content page-events">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="testimony-tabs">
                        <li>
                            <a class="{{($active == 'live') ? 'active' : ''}}" href="{{ url('/events') }}">
                                UPCOMING EVENTS
                            </a>
                        </li>
                        <li>
                            <a class="{{($active == 'past') ? 'active' : ''}}" href="{{ url('/events/past') }}">
                                PAST EVENTS
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <a href="#" class="event-item">
                        <div class="row justify-content-center">
                            <div class="col-sm-1 p-0">
                                <div class="event-date">
       <span class="date">
           24 
       </span>
                                    <span class="month">
           JULY
      </span>
                                    <span class="year">
            2019
     </span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="event-image">
                                    <img src="../../public/images/event_img.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="event-title">
                                    At New Creation Church, we believe we are God’s beloved.
                                </div>
                                <div class="event-time">
                                    7:30pm @ Royal ball room
                                </div>

                                <button class="btn btn-primary btn-event-reg">
                                    Register
                                </button>
                                <div class="flag">
                                    <img src="../../public/images/flag.png" alt="">
                                </div>
                            </div>



                        </div>

                    </a>
                    <a href="#" class="event-item">
                        <div class="row justify-content-center">
                            <div class="col-sm-1 p-0">
                                <div class="event-date">
       <span class="date">
           24 
       </span>
                                    <span class="month">
           JULY
      </span>
                                    <span class="year">
            2019
     </span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="event-image">
                                    <img src="../../public/images/event_img.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="event-title">
                                    At New Creation Church, we believe we are God’s beloved.
                                </div>
                                <div class="event-time">
                                    7:30pm @ Royal ball room
                                </div>

                                <button class="btn btn-primary btn-event-reg">
                                    Register
                                </button>
                                <div class="flag">
                                    <img src="../../public/images/flag.png" alt="">
                                </div>
                            </div>



                        </div>

                    </a>
                    <a href="#" class="event-item">
                        <div class="row justify-content-center">
                            <div class="col-sm-1 p-0">
                                <div class="event-date">
       <span class="date">
           24 
       </span>
                                    <span class="month">
           JULY
      </span>
                                    <span class="year">
            2019
     </span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="event-image">
                                    <img src="../../public/images/event_img.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="event-title">
                                    At New Creation Church, we believe we are God’s beloved.
                                </div>
                                <div class="event-time">
                                    7:30pm @ Royal ball room
                                </div>

                                <button class="btn btn-primary btn-event-reg">
                                    Register
                                </button>
                                <div class="flag">
                                    <img src="../../public/images/flag.png" alt="">
                                </div>
                            </div>



                        </div>

                    </a>
                    <a href="#" class="event-item">
                        <div class="row justify-content-center">
                            <div class="col-sm-1 p-0">
                                <div class="event-date">
       <span class="date">
           24 
       </span>
                                    <span class="month">
           JULY
      </span>
                                    <span class="year">
            2019
     </span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="event-image">
                                    <img src="../../public/images/event_img.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="event-title">
                                    At New Creation Church, we believe we are God’s beloved.
                                </div>
                                <div class="event-time">
                                    7:30pm @ Royal ball room
                                </div>

                                <button class="btn btn-primary btn-event-reg">
                                    Register
                                </button>
                                <div class="flag">
                                    <img src="../../public/images/flag.png" alt="">
                                </div>
                            </div>



                        </div>

                    </a>
                    <a href="#" class="event-item">
                        <div class="row justify-content-center">
                            <div class="col-sm-1 p-0">
                                <div class="event-date">
       <span class="date">
           24 
       </span>
                                    <span class="month">
           JULY
      </span>
                                    <span class="year">
            2019
     </span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="event-image">
                                    <img src="../../public/images/event_img.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="event-title">
                                    At New Creation Church, we believe we are God’s beloved.
                                </div>
                                <div class="event-time">
                                    7:30pm @ Royal ball room
                                </div>

                                <button class="btn btn-primary btn-event-reg">
                                    Register
                                </button>
                                <div class="flag">
                                    <img src="../../public/images/flag.png" alt="">
                                </div>
                            </div>



                        </div>

                    </a>


                </div>
            </div>
        </div>

    </div>
    @endsection
