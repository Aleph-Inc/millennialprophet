@extends('layouts.master')

@section('content')

    <div class="page-header page-xl inquiry_bg">

        <div class="page-header-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-6 form-content">

                                <svg width="14px" height="10px" viewBox="0 0 14 10" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="facebook" transform="translate(-1626.000000, -557.000000)" fill="#030104">
                                            <g id="12194" transform="translate(1626.000000, 557.000000)">
                                                <path d="M7,7 L5.268,5.484 L0.316,9.729 C0.496,9.896 0.739,10 1.007,10 L12.993,10 C13.26,10 13.502,9.896 13.681,9.729 L8.732,5.484 L7,7 Z"
                                                      id="Path"></path>
                                                <path d="M13.684,0.271 C13.504,0.103 13.262,0 12.993,0 L1.007,0 C0.74,0 0.498,0.104 0.318,0.273 L7,6 L13.684,0.271 Z"
                                                      id="Path"></path>
                                                <polygon id="Path" points="0 0.878 0 9.186 4.833 5.079"></polygon>
                                                <polygon id="Path" points="9.167 5.079 14 9.186 14 0.875"></polygon>
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                                <h2>
                                    Send Testimonials
                                </h2>
                                <p>
                                    Encourage others by sharing how God has blessed you, and declare His glory in your life!
                                </p>
                            </div>

                            <div class="col-md-6">

                                <div class="contact-form-wrapper">
                                    <form action="{{ route('send-mail') }}" method="post">
                                        {{ csrf_field() }}

                                        @if (session('alert'))
                                        <div>
                                            <div class="alert alert-success">
                                                {{ session('alert') }}
                                            </div>
                                        </div>
                                        @endif

                                        <div class="form-element">
                                            <input type="text" name="firstName" placeholder="First name" required>
                                        </div>

                                        <div class="form-element">
                                            <input type="text" name="lastName" placeholder="Last name" required>
                                        </div>

                                        <div class="form-element">
                                            <input type="text" name="email" placeholder="Email address" required>
                                        </div>

                                        <div class="form-element">
                                            <textarea name="testimonial" cols="30" rows="10" placeholder="Testimonial" required></textarea>
                                        </div>

                                        <div class="form-element">
                                            <button class="btn btn-start" type="submit">Send</button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </div>

    <div class="follow-us">

        <h3>
            FOLLOW US
        </h3>

        <div class="social-connect">
            <a href="#">

                <svg width="54px" height="55px" viewBox="0 0 54 55" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch -->
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="connect" transform="translate(-404.000000, -900.000000)" fill="#475993" fill-rule="nonzero">
                            <g id="174848" transform="translate(404.000000, 900.000000)">
                                <path d="M46.7232066,0 L7.27666133,0 C3.25795222,0 0,3.31812578 0,7.41135992 L0,47.588371 C0,51.6816051 3.25782013,54.9997309 7.27666133,54.9997309 L26.7315092,54.9997309 L26.764666,35.3458027 L21.7513852,35.3458027 C21.099874,35.3458027 20.5710826,34.809241 20.5685727,34.1456696 L20.5445307,27.8103932 C20.5420209,27.1431891 21.0723975,26.6009765 21.7274753,26.6009765 L26.7316413,26.6009765 L26.7316413,20.4794906 C26.7316413,13.3755639 30.9914307,9.50742194 37.2134154,9.50742194 L42.3190332,9.50742194 C42.9722617,9.50742194 43.5019778,10.0468091 43.5019778,10.7122641 L43.5019778,16.0542017 C43.5019778,16.7193876 42.972658,17.2586402 42.3196937,17.2590438 L39.1864428,17.2605238 C35.8027325,17.2605238 35.1475225,18.8981942 35.1475225,21.3015548 L35.1475225,26.6011111 L42.5827024,26.6011111 C43.2911482,26.6011111 43.8408112,27.231181 43.7573248,27.9477627 L43.0200815,34.2830391 C42.9495407,34.8892947 42.4447913,35.3460718 41.8454591,35.3460718 L35.1806793,35.3460718 L35.1475225,55 L46.7234708,55 C50.7421799,55 54,51.6818742 54,47.5887746 L54,7.41135992 C53.9998679,3.31812578 50.7420478,0 46.7232066,0 Z"
                                      id="Shape"></path>
                            </g>
                        </g>
                    </g>
                </svg>


            </a>

            <a href="">

                <svg width="55px" height="44px" viewBox="0 0 55 44" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch -->
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="connect" transform="translate(-543.000000, -905.000000)" fill="#45B9D3">
                            <g id="8800" transform="translate(543.000000, 905.000000)">
                                <path d="M55,5.16639063 C52.9756911,6.04310561 50.8036369,6.63768367 48.5214927,6.90313129 C50.8517171,5.5392646 52.6354455,3.37598071 53.4808472,0.80618075 C51.295043,2.06920897 48.8823184,2.98632961 46.3115136,3.4834949 C44.2528746,1.33698815 41.324659,0 38.0767779,0 C31.845771,0 26.7935814,4.93801081 26.7935814,11.0248599 C26.7935814,11.8881356 26.8932466,12.7312964 27.0857469,13.5375649 C17.7100289,13.0772918 9.39629803,8.68686549 3.83203241,2.01545188 C2.85937559,3.64134049 2.30604952,5.5358389 2.30604952,7.55814217 C2.30604952,11.3842946 4.2994433,14.7602753 7.32390903,16.7354094 C5.47484555,16.6749766 3.73578225,16.1778113 2.21330427,15.3514277 L2.21330427,15.4891583 C2.21330427,20.8302595 6.10384167,25.2878821 11.2625266,26.3024156 C10.3173698,26.5509982 9.32071784,26.6887288 8.2896459,26.6887288 C7.56107445,26.6887288 6.85649813,26.6181946 6.16567184,26.4838018 C7.60223464,30.8675524 11.7677725,34.0553833 16.7031319,34.1427825 C12.8435095,37.0988957 7.97690029,38.8557513 2.69105015,38.8557513 C1.78031337,38.8557513 0.883236737,38.8019942 0,38.7045815 C4.9937745,41.8387431 10.9223708,43.666133 17.294293,43.666133 C38.0494576,43.666133 49.3945742,26.8634394 49.3945742,12.2913139 L49.3567391,10.8636765 C51.5734585,9.31833568 53.4911822,7.37675589 55,5.16639063 Z"
                                      id="Path"></path>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>

            <a href="">

                <svg width="59px" height="59px" viewBox="0 0 59 59" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch -->
                    <desc>Created with Sketch.</desc>
                    <defs>
                        <linearGradient x1="50%" y1="99.7089109%" x2="50%" y2="0.776721582%" id="linearGradient-1">
                            <stop stop-color="#E09B3D" offset="0%"></stop>
                            <stop stop-color="#C74C4D" offset="30%"></stop>
                            <stop stop-color="#C21975" offset="60%"></stop>
                            <stop stop-color="#7024C4" offset="100%"></stop>
                        </linearGradient>
                        <linearGradient x1="50%" y1="146.098873%" x2="50%" y2="-45.1596833%" id="linearGradient-2">
                            <stop stop-color="#E09B3D" offset="0%"></stop>
                            <stop stop-color="#C74C4D" offset="30%"></stop>
                            <stop stop-color="#C21975" offset="60%"></stop>
                            <stop stop-color="#7024C4" offset="100%"></stop>
                        </linearGradient>
                        <linearGradient x1="50%" y1="658.140556%" x2="50%" y2="-140.029283%" id="linearGradient-3">
                            <stop stop-color="#E09B3D" offset="0%"></stop>
                            <stop stop-color="#C74C4D" offset="30%"></stop>
                            <stop stop-color="#C21975" offset="60%"></stop>
                            <stop stop-color="#7024C4" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="connect" transform="translate(-682.000000, -899.000000)" fill-rule="nonzero">
                            <g id="174855" transform="translate(682.000000, 899.000000)">
                                <path d="M41.4235818,0 L17.5764182,0 C7.88474032,0 0,7.88474032 0,17.5764182 L0,41.4235818 C0,51.1152597 7.88474032,59 17.5764182,59 L41.4235818,59 C51.1152597,59 59,51.1152597 59,41.4235818 L59,17.5764182 C58.9998929,7.88474032 51.1151526,0 41.4235818,0 Z M53.0646022,41.4235818 C53.0646022,47.852686 47.852686,53.0646022 41.4235818,53.0646022 L17.5764182,53.0646022 C11.147314,53.0646022 5.93539782,47.852686 5.93539782,41.4235818 L5.93539782,17.5764182 C5.93539782,11.1472069 11.147314,5.93539782 17.5764182,5.93539782 L41.4235818,5.93539782 C47.852686,5.93539782 53.0646022,11.1472069 53.0646022,17.5764182 L53.0646022,41.4235818 Z"
                                      id="Shape" fill="url(#linearGradient-1)"></path>
                                <path d="M29.8831169,14.5584416 C21.4330773,14.5584416 14.5584416,21.4331015 14.5584416,29.8830631 C14.5584416,38.3330248 21.4330773,45.2077922 29.8831169,45.2077922 C38.3331564,45.2077922 45.2077922,38.3331323 45.2077922,29.8830631 C45.2077922,21.4329939 38.3331564,14.5584416 29.8831169,14.5584416 Z M29.8831169,39.2471299 C24.7115215,39.2471299 20.5191905,35.0547842 20.5191905,29.8831706 C20.5191905,24.7115571 24.711629,20.5192114 29.8831169,20.5192114 C35.0547123,20.5192114 39.2470433,24.7115571 39.2470433,29.8831706 C39.2470433,35.0546766 35.0546047,39.2471299 29.8831169,39.2471299 Z"
                                      id="Shape" fill="url(#linearGradient-2)"></path>
                                <circle id="Oval" fill="url(#linearGradient-3)" cx="45.2077922" cy="14.5584416"
                                        r="3.83116883"></circle>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>

            <a href="#">

                <svg width="55px" height="54px" viewBox="0 0 55 54" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch -->
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="connect" transform="translate(-825.000000, -895.000000)" fill="#044F70">
                            <g id="39714" transform="translate(825.000000, 895.000000)">
                                <path d="M1.66572322,54 L8.33427678,54 C9.25427567,54 10,53.1475137 10,52.0959335 L10,18.7789604 C10,17.7272742 9.25427567,16.875 8.33427678,16.875 L1.66572322,16.875 C0.745631536,16.875 0,17.7272742 0,18.7789604 L0,52.0959335 C0,53.1474076 0.745631536,54 1.66572322,54 Z"
                                      id="Path"></path>
                                <path d="M1.66572322,10.125 L8.33427678,10.125 C9.25427567,10.125 10,9.30901312 10,8.30233144 L10,1.82266856 C10,0.815986882 9.25427567,0 8.33427678,0 L1.66572322,0 C0.745631536,0 0,0.815986882 0,1.82266856 L0,8.30233144 C0,9.30901312 0.745631536,10.125 1.66572322,10.125 Z"
                                      id="Path"></path>
                                <path d="M52.2081128,20.1185737 C51.1653759,18.6823743 49.6278088,17.5012808 47.594792,16.5755091 C45.5617752,15.6503858 43.3176914,15.1875 40.8624374,15.1875 C35.8782006,15.1875 31.6547961,17.1778874 28.1923272,21.1594185 C27.503365,21.9516404 27.0024424,21.7784364 27.0024424,20.7071216 L27.0024424,18.1215953 C27.0024424,17.0502804 26.1725279,16.1820994 25.1487912,16.1820994 L18.5202146,16.1820994 C17.4963746,16.1820994 16.6666667,17.0502804 16.6666667,18.1215953 L16.6666667,52.0603961 C16.6666667,53.1316029 17.4964779,54 18.5202146,54 L25.9407053,54 C26.9645453,54 27.7942533,53.1316029 27.7942533,52.0603961 L27.7942533,40.2573481 C27.7942533,35.3402128 28.0780165,31.969812 28.6455429,30.1466858 C29.2128628,28.3235597 30.2626215,26.8595915 31.7937863,25.7545651 C33.3251577,24.6495386 35.054172,24.0967553 36.9816553,24.0967553 C38.4863852,24.0967553 39.7735426,24.483574 40.842921,25.2573194 C41.9121961,26.0309567 42.6844905,27.1146973 43.159701,28.5100539 C43.635118,29.9051943 43.8726199,32.9783498 43.8726199,37.7299527 L43.8726199,52.060288 C43.8726199,53.1314948 44.7023279,53.999892 45.7260646,53.999892 L53.1465553,53.999892 C54.1702921,53.999892 55,53.1314948 55,52.060288 L55,32.840154 C55,29.4425246 54.7953353,26.8318227 54.3865221,25.0086965 C53.9777089,23.1855704 53.2514692,21.5555295 52.2081128,20.1185737 Z"
                                      id="Path"></path>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>

            <a href="#">
                <svg width="77px" height="55px" viewBox="0 0 77 55" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch -->
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="connect" transform="translate(-946.000000, -901.000000)" fill="#F61C0D" fill-rule="nonzero">
                            <g id="174883" transform="translate(946.000000, 901.000000)">
                                <path d="M61.0080868,0 L15.9919132,0 C7.15981527,0 0,7.22720529 0,16.1424332 L0,38.8575668 C0,47.7727947 7.15981527,55 15.9919132,55 L61.0080868,55 C69.8401847,55 77,47.7727947 77,38.8575668 L77,16.1424332 C77,7.22720529 69.8401847,0 61.0080868,0 Z M50.1928673,28.6051726 L29.1373381,38.7419072 C28.5762916,39.0120043 27.9282236,38.599103 27.9282236,37.9717426 L27.9282236,17.0646749 C27.9282236,16.4283787 28.5933284,16.0159833 29.1555441,16.3036148 L50.2110733,27.0739479 C50.8370936,27.3941192 50.8262368,28.3003439 50.1928673,28.6051726 Z"
                                      id="Shape"></path>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
    </div>

    <div class="country-contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <a href="#">
                        <strong>
                            Italy
                        </strong>
                        info.africa@god.tv<Br>
                        +27 (0) 21 555-1206
                    </a>

                    <a href="#">
                        <strong>
                            Sri Lanka
                        </strong>
                        info.africa@god.tv<Br>
                        +27 (0) 21 555-1206
                    </a>

                    <a href="#">
                        <strong>
                            India
                        </strong>
                        info.africa@god.tv<Br>
                        +27 (0) 21 555-1206
                    </a>

                    <a href="#">
                        <strong>
                            USA
                        </strong>
                        info.africa@god.tv<Br>
                        +27 (0) 21 555-1206
                    </a>
                </div>
            </div>
        </div>

    </div>


@endsection
