


<!-- footer-->
<footer>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-sm-3">
                        <ul>
                            <li>
                                About
                            </li>
                            <li>
                            <li><a href="{{ url('/about#who_we_are') }}">Who we are </a></li>
                                
                            </li>
                            <li>
                                <a href="/about#what_jesus_did_for_you"> What Jesus did for you </a>
                            </li>

                            <li>
                            <li><a href="{{ url('/about#ministries') }}">Beliefs </a></li>

                            </li>
                             <li><a href="{{ url('/partner') }}">Partner </a></li>

                            </li>
                            
                        </ul>
                    </div>
                    <div class="col-sm-3">

                        <ul>
                            <li>
                                Empower
                            </li>
                            <li><a href="{{ url('/empower/free-websites') }}"> Free websites</a></li>
                            <li><a href="{{ url('/empower/digital-training') }}">Digital media training </a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <ul>
                            <li>
                                Events
                            </li>
                            <li>
                                <a href="/events">Upcoming events</a>
                            </li>
                            <li>
                                <a href="/events/past">
                                    Past events
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div class="col-sm-3">
                        <ul>
                            <li>
                                Testimonies
                            </li>
                            <li><a href="{{ url('/connect/prayer') }}"> Prayer request</a></li>
                            <li><a href="{{ url('/connect/testimonies') }}">Send a testimony </a></li>
                            <li><a href="{{ url('/build-chruch') }}">Build a church</a></li>
                            <li><a href="{{ url('/connect/inquiries') }}">Inquiries </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid  social-media-icons">
        <div class="row">
            <div class="col-md-12">

                <a href="https://www.facebook.com/EuropeShallBeSaved/videos/826840570997623/">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-white">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p class="text-center">
                        &copy; 2019 Millennial Prophet Ministries
                        <span>
                            <a href="#">
                            Terms of use
                        </a> &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;<a href="#">
                            Privacy policy
                        </a>
                       </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    'use strict';
    ($(function () {
        $(".mobile_menu").click(function (e) {
        $(this).toggleClass("expand");
        $("header, body").toggleClass("expand");

        });

        $(".menu-overlay").click(function(){
            $("header,body, .mobile-menu").toggleClass("expand");
        });
    }));
</script>

