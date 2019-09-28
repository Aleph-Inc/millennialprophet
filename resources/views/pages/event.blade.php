@extends('layouts.master')
@section('title','Event Upcoming')
@section('content')
    <div class="page-header events_bg">
        <div class="page-title">
            <h2>
             UPCOMING EVENTS
            </h2>
        </div>
        <div class="overlay"></div>
    </div>

    <div class="page-content page-events">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="testimony-tabs">
                        <li>
                            <a class="{{($active == 'live') ? 'active' : ''}}" href="#" onclick="newevents();">
                                UPCOMING EVENTS
                            </a>
                        </li>
                        <li>
                            <a class="{{($active == 'past') ? 'active' : ''}}" href="#" onclick="pastevents();">
                                PAST EVENTS
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12" id="eventsarea">

                    @foreach($events as $event )
                        <a href="#" class="event-item">
                            <div class="row justify-content-center">
                                <div class="col-sm-1 p-0">
                                    <div class="event-date">
                               <span class="date">
                                    {{ $event->date->format('d') }}

                               </span>
                                        <span class="month">
                                    {{ $event->date->format('M') }}

                              </span>
                                        <span class="year">
                                    {{ $event->date->format('Y') }}

                             </span>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="event-image">
                                        <img src="{{asset('storage').'/'.$event->image }}" width="261px" height="165px">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="event-title">
                                        {{ $event->name }}
                                    </div>
                                    <div class="event-time">
                                        {{ $event->time }} @ {{ $event->place }}

                                    </div>

                                    {{--<button class="btn btn-primary btn-event-reg">--}}
                                    {{--Register--}}
                                    {{--</button>--}}
                                    <div class="flag">
                                        <img src="{{ asset('html/public/images/flag.png') }}" alt="">{{ $event->country }}
                                    </div>
                                </div>


                            </div>

                        </a>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
    <script>
        function newevents()
        {
            // alert('hii');
            $.ajax({
                url: "{{ url('/') }}/events/new",
                method: 'GET',
                success: function(data){
                    console.log(data);
                }
            })
        }

        function pastevents()
        {
            // alert('hii');
            $.ajax({
                url: "{{ url('/') }}/events/past",
                method: 'GET',
                success: function(data){
                    console.log(data);
                }
            })
        }
    </script>
@endsection
