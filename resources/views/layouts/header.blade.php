<header>
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">


                    <a href="#">
                        BECOME A PARTNER
                    </a>

                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown">
                            <i class="fa fa-globe" aria-hidden="true"></i>
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

                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-2 logo-wrapper">

                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('html/public/images/logo.png') }}" alt="">
                        <span>
                            Millennial Prophet
                        </span>
                    </a>
                </div>

                <div class="mobile_menu">
                    <i class="fa fa-bars"></i>
                </div>
            </div>

            <div class="col-md-10">
                <ul>

                    <li class="{{ request()->is('home') ? 'active' : '' }}">
                        <a href="{{ url('/home') }}">
                            HOME
                        </a>
                    </li>

                    <li class="{{ request()->is('about') ? 'active' : '' }}">
                        <a href="{{ url('/about') }}">
                            ABOUT US
                        </a>
                    </li>
                    <li class="{{ request()->is('resources') ? 'active' : '' }}">
                        <a href="{{ url('/resources') }}">
                            RESOURCES
                        </a>
                    </li>

                    <li class="{{ request()->is('empower-minitries') ? 'active' : '' }}">
                        <a href="{{ url('/empower-minitries') }}">
                            EMPOWER MINISTRIES
                        </a>
                    </li>

                    <li class="{{ request()->is('events') ? 'active' : '' }}">
                        <a href="{{ url('/events') }}">
                            EVENTS
                        </a>
                    </li>
                    <li class="{{ request()->is('testimonials') ? 'active' : '' }}">
                        <a href="{{ url('/testimonials') }}">
                            TESTIMONIES
                        </a>
                    </li>

                    <li class="{{ request()->is('jesus') ? 'active' : '' }}">
                        <a href="/jesus">
                            JESUS
                        </a>
                    </li>

                    <li class="{{ request()->is('connect') ? 'active' : '' }}">
                        <a href="/connect">
                            CONNECT
                        </a>
                    </li>

                    <li class="{{ request()->is('blog') ? 'active' : '' }}">
                        <a href="/blog">
                            BLOG
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
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
