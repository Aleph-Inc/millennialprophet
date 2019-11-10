@extends('layouts.master')
@section('title','Events -')
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
                            <a style="cursor: pointer;" class="active" id="activeeventnew" onclick="newevents();">
                                UPCOMING EVENTS
                            </a>
                        </li>
                        <li>
                            <a style="cursor: pointer;" class="" id="activeeventpast" onclick="pastevents();">
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
                                <div class="col-sm-4">
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
                                    <img style=" width: 33px;" src="{{ asset('html/public/flags').'/'.$event->country.'.svg' }}" alt="">
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
        function newevents() {
            var data = [];
            $.ajax({
                url: "{{ url('/') }}/events/new",
                method: 'GET',
                success: function (data) {
                    var x = data.events.length;
                    const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
                    ];
                    $("#eventsarea").empty();
                    var element1 = document.getElementById("activeeventnew");
                    element1.classList.add('active');

                    var element2 = document.getElementById("activeeventpast");
                    element2.classList.remove("active");

                    for (let y = 0; y < x; y++) {
                        var date = new Date(data.events[y].date);
                        var month = monthNames[date.getUTCMonth()];
                        var day = String(date.getUTCDate() + 1).padStart(2, '0');
                        var year = date.getUTCFullYear();
                        var image = data.events[y].image;
                        var time = data.events[y].time;
                        var name = data.events[y].name;
                        var place = data.events[y].place;
                        var country = data.events[y].country;
                        $('#eventsarea').append(
                            `<a href="#" class="event-item">
                            <div class="row justify-content-center">
                                <div class="col-sm-1 p-0">
                                    <div class="event-date">
                               <span class="date">
                                    ${day}
                               </span>
                                        <span class="month">
                                    ${month}

                              </span>
                                        <span class="year">
                                    ${year}

                             </span>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="event-image">
                                        <img src="{{ url('/') }}/storage/${image}" width="261px" height="165px">

                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="event-title">
                                        ${name}
                            </div>
                            <div class="event-time">
                                ${time} @ ${place}
                            </div>

                            {{--<button class="btn btn-primary btn-event-reg">--}}
                            {{--Register--}}
                            {{--</button>--}}
                            <div class="flag">
                                <img style=" width: 33px;" src="{{ asset('html/public/flags/${country}.svg') }}" alt="">
                                    </div>
                                </div>


                            </div>

                        </a>`
                        );
                    }
                }
            })
        }

        function pastevents() {
            var data = [];
            $.ajax({
                url: "{{ url('/') }}/events/past",
                method: 'GET',
                success: function (data) {
                    var x = data.events.length;
                    const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
                    ];
                    $("#eventsarea").empty();
                    var element1 = document.getElementById("activeeventpast");
                    element1.classList.add('active');

                    var element2 = document.getElementById("activeeventnew");
                    element2.classList.remove("active");

                    for (let y = 0; y < x; y++) {
                        var date = new Date(data.events[y].date);
                        var month = monthNames[date.getUTCMonth()];
                        var day = String(date.getUTCDate() + 1).padStart(2, '0');
                        var year = date.getUTCFullYear();
                        var image = data.events[y].image;
                        var time = data.events[y].time;
                        var name = data.events[y].name;
                        var place = data.events[y].place;
                        var country = data.events[y].country;
                        $('#eventsarea').append(
                            `<a href="#" class="event-item">
                            <div class="row justify-content-center">
                                <div class="col-sm-1 p-0">
                                    <div class="event-date">
                               <span class="date">
                                    ${day}
                               </span>
                                        <span class="month">
                                    ${month}

                              </span>
                                        <span class="year">
                                    ${year}

                             </span>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="event-image">
                                        <img src="{{ url('/') }}/storage/${image}" width="261px" height="165px">

                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="event-title">
                                    ${name}
                            </div>
                            <div class="event-time">
                                ${time} @ ${place}
                            </div>

                            {{--<button class="btn btn-primary btn-event-reg">--}}
                            {{--Register--}}
                            {{--</button>--}}
                            <div class="flag">
                                <img style=" width: 33px;" src="{{ asset('html/public/flags/${country}.svg') }}" alt="">
                                    </div>
                                </div>


                            </div>

                        </a>`
                        );
                    }
                }
            })
        }
    </script>
@endsection





