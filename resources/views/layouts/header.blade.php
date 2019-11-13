<header>
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="social-share">
                         <a href="https://www.facebook.com/EuropeShallBeSaved/videos/826840570997623/">
                    <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://twitter.com/mpmglobal">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/millennialprophetministries/">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                    </div>
                    <div class="dropdown">
                        <a class="active-lang" href="#" data-toggle="dropdown">
                            <span>EN</span>
                            <i class="fa fa-caret-down"></i>

                        </a>
                        <div class="dropdown-menu">
                            <a href="#">
                                FR
                            </a>
                            <a href="#">
                                NL
                            </a>
                            <a href="#">
                                GE
                            </a>

                        </div>
                    </div>
                    <a href="/partner" class="link-partner">
                        <i class="fa fa-handshake-o" aria-hidden="true"></i> BECOME A PARTNER
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-2 logo-wrapper">

                <div class="logo">
                    <a href="/home">
                        <img src="{{ asset('html/public/images/logo.png') }}" alt="">
                    </a>
                </div>

                <div class="mobile_menu">
                    <i class="fa fa-bars"></i>

                </div>
            </div>

            <div class="col-md-10">
                <ul>

                     <li class="{{ request()->is('jesus') ? 'active' : '' }}">
                        <a href="/jesus">
                            JESUS
                        </a>
                    </li>

                    <li class="{{ request()->is('about') ? 'active' : '' }}">
                        <a href="{{ url('/about') }}">
                            ABOUT
                        </a>
                        <!-- <ul class="dropdown-menu">
                            <li><a href="{{ url('/about#who_we_are') }}">Who we are </a></li>
                            <li><a href="{{ url('/about#what_jesus_did_for_you') }}">Vision & Mission </a></li>
                            <li><a href="{{ url('/about#ministries') }}">Beliefs </a></li>
                        </ul> -->


                    </li>
                    <li class="{{ request()->is('empower') ? 'active' : '' }}">
                        <a href="{{ url('/empower') }}">
                            EMPOWER
                        </a>
                           <!-- <ul class="dropdown-menu">
                            <li><a href="{{ url('/empower/free-websites') }}"> Free websites</a></li>
                            <li><a href="{{ url('/empower/digital-training') }}">Digital media training </a></li>
                        </ul> -->
                    </li>
                    <li class="{{ request()->is('resources') ? 'active' : '' }}">
                        <a href="{{ url('/resources') }}">
                            RESOURCES
                        </a>
                        <!-- <ul>
                            <li><a href="{{ url('/confess') }}"> Confess the world</a></li>
                        </ul> -->
                    </li>
                         <li class="{{ request()->is('events') ? 'active' : '' }}">
                        <a href="{{ url('/events') }}">
                            EVENTS
                        </a>
                    </li>
                     <li class="{{ request()->is('testimonies') ? 'active' : '' }}">
                        <a href="{{ url('/testimonies') }}">
                            TESTIMONIES
                        </a>
                    </li>


                    <li class= "{{ request()->is('connect') ? 'active' : '' }} connect-menu-item">
                        <a href="/connect">
                            CONNECT
                        </a>
                    </li>
<!--
                    <li class="{{ request()->is('blog') ? 'active' : '' }}">
                        <a href="/blog">
                            BLOG
                        </a>
                    </li>
                     -->
                   <!--  <li class="{{ request()->is('digital-training') ? 'active' : '' }}">
                        <a href="/empower/digital-training">
                            DIGITAL TRAINING
                        </a>
                    </li>
                    <li class="{{ request()->is('empower/free-websites') ? 'active' : '' }}">
                        <a href="/empower/free-websites">
                            FREE WEBSITE
                        </a>
                    </li> -->
                   <!--  <li class="{{ request()->is('resources') ? 'active' : '' }}">
                        <a href="{{ url('/resources') }}">
                            RESOURCES
                        </a>
                    </li>

                    <li class="{{ request()->is('testimonies') ? 'active' : '' }}">
                        <a href="{{ url('/testimonies') }}">
                            TESTIMONIES
                        </a>
                    </li> -->



{{--                    <li>--}}
{{--                        <a href="#">--}}
{{--                            <i class="fa fa-search"></i>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </div>


    </div>
</header>


{{--<ul>--}}
{{--	--}}
{{--	<li><a href="{{ url('/about') }}">About</a></li>--}}
{{--	<li><a href="{{ url('/') }}">Home</a></li>--}}
{{--	<li><a href="{{ url('/empower-minitries') }}">Empower Ministry</a></li>--}}
{{--	<ul>--}}
{{--		--}}
{{--		<li><a href="{{ url('/empower/free-website') }}">Free Website</a></li>--}}
{{--				<li><a href="{{ url('/empower/digital-training') }}">Digital trainning</a></li>--}}


{{--	</ul>--}}
{{--	<li><a href="{{ url('/partner') }}">Partner</a></li>--}}
{{--	<ul>--}}
{{--		--}}
{{--		<li><a href="{{ url('/partner/monthly') }}">Monthly</a></li>--}}
{{--				<li><a href="{{ url('/partner/one-time') }}">One time</a></li>--}}

{{--	</ul>--}}

{{--	<li><a href="{{ url('/jesus') }}">Jesus</a></li>--}}
{{--	<li><a href="{{ url('/resources') }}">Resources</a></li>--}}
{{--		<ul>--}}
{{--				<li><a href="{{ url('/resources/1') }}">Resources</a></li>--}}

{{--		</ul>--}}
{{--		<li><a href="{{ url('/events') }}">Events</a></li>--}}

{{--	<li><a href="{{ url('/testimonials') }}">Testimonial video</a></li>--}}
{{--	<ul>--}}
{{--				<li><a href="{{ url('/testimonials/articles') }}">Testimonials articles</a></li>--}}

{{--	</ul>--}}

{{--	<li><a href="{{ url('/connect') }}">Connect</a></li>--}}
{{--	<ul>--}}
{{--		--}}
{{--		<li><a href="{{ url('/donation') }}">Payment</a></li>--}}

{{--		<li><a href="{{ url('/send_testimoney') }}">Send Testimoney </a></li>--}}
{{--				<li><a href="{{ url('/build-chruch') }}">Build a church </a></li>--}}
{{--				<li><a href="{{ url('/prayer_request') }}">Prayer request </a></li>--}}

{{--	</ul>--}}

{{--	--}}
{{--		--}}
{{--		<li><a href="{{ url('/blog') }}">Blog</a></li>--}}
{{--		<ul>--}}
{{--				<li><a href="{{ url('/blog/1') }}">Article</a></li>--}}


{{--	</ul>--}}

{{--		--}}


{{--</ul>--}}
