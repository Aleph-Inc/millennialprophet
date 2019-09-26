@extends('layouts.master')
@section('title','Event Upcoming')
@section('content')
    <div class="page-header events_bg">
        <div class="page-title">
            <H2>
                EVENTS
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
                        <li class="">
                            @if($active == 'past')

                                <a href="{{ url('/events/past') }}" class="active">
                                    @else
                                         <a class="{{($active == 'live') ? 'active' : ''}}" href="{{ url('/events/past') }}">
                                            @endif
                                            PAST EVENTS
                                        </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">

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
                                        <img src="{{ asset('html/public/images/flag.png') }}" alt="">
                                    </div>
                                </div>


                            </div>

                        </a>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
@endsection
