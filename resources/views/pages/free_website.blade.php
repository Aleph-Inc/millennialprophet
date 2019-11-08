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

            <div class="row d-training pb-4">
                <div class="col-md-6">

                    <p class="text-left">
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
                        Learn More
                    </a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('html/public/images/free-web.jpg') }} " alt="">
                </div>
            </div>


            <div class="row justify-content-center create-website py-4">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-4">

                            <a href="#">

                                <svg width="47px" height="47px" viewBox="0 0 47 47" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch -->
                                    <desc>Created with Sketch.</desc>
                                    <defs></defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="free-website" transform="translate(-440.000000, -1084.000000)"
                                           fill="#FFFFFF">
                                            <g id="321834" transform="translate(440.000000, 1084.000000)">
                                                <path d="M30.9476316,15.8138849 C31.9155035,16.7861741 32.6897825,17.9529399 33.2705612,19.1197056 C35.3998979,23.5921989 34.7223227,29.231458 30.9476316,32.9261386 L20.5914303,43.426844 C15.8488673,48.191052 8.20268872,48.191052 3.55692222,43.426844 C-1.18564074,38.6626359 -1.18564074,30.9815601 3.55692222,26.3145903 L10.9127115,18.9252291 C10.041636,21.8420969 10.1384325,24.9534411 11.2031008,27.7730707 L8.10589227,30.8844149 C5.97655561,33.0234699 5.97655561,36.6209122 8.10589227,38.8572054 C10.3320254,41.0934986 13.8163271,41.0934986 16.0424602,38.8572054 L26.3986616,28.4537383 C27.4633299,27.3842108 28.044016,25.9258234 28.044016,24.467343 C28.044016,23.0088626 27.4633299,21.5504752 26.3986616,20.4809478 C25.3339932,19.4114203 23.8822317,18.8280839 22.4303776,18.8280839 L27.6568302,13.5777778 C28.818295,14.0637828 29.8829633,14.8415956 30.9476316,15.8138849 Z"
                                                      id="Path"></path>
                                                <path d="M16.0523684,31.0955595 C15.0844965,30.1260935 14.3102175,28.9627157 13.7294388,27.799338 C11.6001021,23.3398314 12.2776773,17.7169472 16.0523684,14.0329021 L26.4085697,3.56278061 C31.1511327,-1.18759354 38.7973113,-1.18759354 43.4430778,3.56278061 C48.1856407,8.31315476 48.1856407,15.9719269 43.4430778,20.6253452 L36.0872885,27.9932497 C36.958364,25.0848517 36.8615675,21.9825419 35.7968992,19.1710998 L38.8941077,16.06879 C41.0234444,13.9359462 41.0234444,10.3489499 38.8941077,8.11915022 C36.6679746,5.88935057 33.1836729,5.88935057 30.9575398,8.11915022 L20.6981349,18.5894573 C19.6334665,19.6558792 19.0527805,21.1100318 19.0527805,22.5642772 C19.0527805,24.0185226 19.6334665,25.4726752 20.6981349,26.5390971 C21.7628032,27.605519 23.2145647,28.1871615 24.6664189,28.1871615 L19.4399663,33.4222222 C18.181705,32.8405797 17.1170367,32.0650255 16.0523684,31.0955595 Z"
                                                      id="Path"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                                Join


                                    @if($freeWebsite)
                                        @if($freeWebsite->join)
                                            {!! $freeWebsite->join !!}
                                        @else
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        @endif
                                    @else
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    @endif

                            </a>
                        </div>
                        <div class="col-4">

                            <a href="#">


                                <svg width="47px" height="47px" viewBox="0 0 47 47" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch -->
                                    <desc>Created with Sketch.</desc>
                                    <defs></defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="free-website" transform="translate(-697.000000, -1091.000000)"
                                           fill="#FFFFFF">
                                            <g id="1536698" transform="translate(697.000000, 1091.000000)">
                                                <path d="M10.4015292,0 L0,10.4015292 L7.5069587,17.9084878 L10.9931073,14.4219835 L12.9243625,16.3532387 L9.43821388,19.8393873 L11.35773,21.7592593 L21.7592593,11.35773 L10.4015292,0 Z M11.1503397,11.1496282 C10.8522385,11.4477295 10.4559558,11.6120765 10.0347722,11.6120765 C9.61358848,11.6120765 9.21766162,11.4480853 8.91956029,11.1503397 C8.30450409,10.5349277 8.30450409,9.53426079 8.91956029,8.91956029 C9.21766162,8.62145896 9.61358848,8.45746771 10.0347722,8.45746771 C10.4559558,8.45746771 10.8522385,8.62145896 11.149984,8.91920458 C11.7650402,9.53426079 11.7650402,10.534572 11.1503397,11.1496282 Z"
                                                      id="Shape" fill-rule="nonzero"></path>
                                                <polygon id="Path"
                                                         points="25.2407407 35.6373409 27.1771253 37.5737254 30.670511 34.0803398 32.600851 36.0106798 29.1074654 39.5040655 31.0257163 41.4223164 34.519102 37.9289308 36.449442 39.8592708 32.9560563 43.3526565 36.6033998 47 47 36.6033998 35.6376966 25.2407407"></polygon>
                                                <polygon id="Path"
                                                         points="47 0 32.2037037 5.73915203 41.2612076 14.7962963"></polygon>
                                                <path d="M3.4419515,33.9444444 L1.23489866,36.1511422 C0.438854228,36.9475417 0,38.0063307 0,39.1325808 C0,40.2588312 0.438854228,41.317265 1.23489866,42.1140196 L4.88598047,45.7651013 C5.68238003,46.5615009 6.74116885,47 7.86741911,47 C8.99366937,47 10.0524582,46.5615009 10.8488577,45.7651013 L13.0555556,43.5584036 L3.4419515,33.9444444 Z"
                                                      id="Path"></path>
                                                <polygon id="Path"
                                                         points="33.9444444 10.8887951 30.0189749 6.96296296 5.22222222 31.7597157 9.14805437 35.6851852"></polygon>
                                                <polygon id="Path"
                                                         points="35.2651109 21.7529511 40.037037 16.981025 36.1115675 13.0555556 11.3148148 37.8523083 15.2402843 41.7777778"></polygon>
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                                Create


                                    @if($freeWebsite)
                                        @if($freeWebsite->create)
                                            {!! $freeWebsite->create !!}
                                        @else
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        @endif
                                    @else
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    @endif

                            </a>
                        </div>
                        <div class="col-4">

                            <a href="#">


                                <svg width="48px" height="48px" viewBox="0 0 48 48" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch -->
                                    <desc>Created with Sketch.</desc>
                                    <defs></defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="free-website" transform="translate(-948.000000, -1083.000000)"
                                           fill="#FFFFFF">
                                            <g id="1541447" transform="translate(948.000000, 1083.000000)">
                                                <path d="M10.3175071,24.5333333 L8.60531499,29.6701906 C8.43738323,30.1755781 8.56841308,30.7314481 8.94483123,31.1078663 L16.8921337,39.0551688 C17.2683645,39.4315869 17.8244219,39.5626168 18.3298094,39.394685 L23.4666667,37.6824929 L10.3175071,24.5333333 Z"
                                                      id="Path"></path>
                                                <path d="M26.6667407,39.358466 C25.9753165,40.0543548 25.4191669,40.2003892 25.0121203,40.3884724 L21.1752336,41.6758857 L20.2941617,46.3007811 C20.2006548,46.7715572 20.3496638,47.2512357 20.6800422,47.5838379 C21.1385458,48.0454278 21.8487842,48.1328401 22.4037109,47.7968284 L32.381479,41.5804235 C32.892004,41.2724444 33.1560622,40.6729648 33.0393197,40.0843762 L31.8569373,34.1333333 L26.6667407,39.358466 Z"
                                                      id="Path"></path>
                                                <path d="M1.69923874,27.7058849 L6.3241266,26.8246203 L7.66646633,22.8260045 C7.98694591,22.1604465 8.11697501,21.8543368 8.64154251,21.3332732 L13.8666667,16.1430498 L7.91563352,14.9607555 C7.32695117,14.8438242 6.72756721,15.1078838 6.41958861,15.6185995 L0.203193821,25.5963248 C-0.0870750697,26.0757147 -0.0645354298,26.678715 0.259164104,27.1348691 C0.595269909,27.6049459 1.16179145,27.8126564 1.69923874,27.7058849 Z"
                                                      id="Path"></path>
                                                <path d="M45.5928331,0.413548852 L43.0140229,2.99420278 C37.8399546,2.99749443 34.5037985,3.0746131 30.9333333,4.86508284 C31.0555162,8.00851494 32.3294135,11.08207 34.6273912,13.3813349 C36.9327938,15.6882175 39.9869894,16.9523994 43.1435367,17.0666667 C44.9273125,13.4980474 45.0043817,10.1610662 45.0076712,4.98941317 L47.5868574,2.40857115 C48.1377142,1.85736077 48.1377142,0.964947321 47.5868574,0.413548852 C47.0356248,-0.137849617 46.1438778,-0.137849617 45.5928331,0.413548852 Z"
                                                      id="Path"></path>
                                                <circle id="Oval"
                                                        transform="translate(25.408787, 22.497455) rotate(-45.000000) translate(-25.408787, -22.497455) "
                                                        cx="25.4087866" cy="22.4974554" r="1.40349531"></circle>
                                                <path d="M28.4625247,6.4 C26.8043858,7.57821329 25.0029257,9.15441992 22.8790626,11.2765846 L11.7333333,22.4133078 L25.5979659,36.2666667 L36.7436018,25.1301301 C38.852059,23.023359 40.4235515,21.2336018 41.6,19.5867714 C38.3193893,19.1405449 35.2088967,17.6593118 32.7822382,15.2345938 C30.3584742,12.8128613 28.9085481,9.67817393 28.4625247,6.4 Z M28.5689653,25.3817447 C26.9306206,27.0187792 24.2653111,27.0187792 22.6269665,25.3817447 C20.9888086,23.7448968 20.9888086,21.0815321 22.6269665,19.4446842 C24.2653111,17.8076497 26.9306206,17.8076497 28.5689653,19.4446842 C30.2073099,21.0815321 30.2073099,23.7448968 28.5689653,25.3817447 Z"
                                                      id="Shape" fill-rule="nonzero"></path>
                                                <path d="M4.04074222,35.7903405 C2.39750447,37.433581 0.772943158,41.495328 0.0171250319,46.3335926 C-0.0535373683,46.7892407 0.0969331107,47.2509538 0.423096887,47.5770219 C0.749260664,47.9030899 1.21087675,48.0536569 1.66652408,47.9828019 C6.50372158,47.2279452 10.5652693,45.6034774 12.2096623,43.9591779 C13.2496703,42.9191681 13.7869549,41.5765803 13.8666667,40.2128129 L7.78719722,34.1333333 C6.42333588,34.2130453 5.08084654,34.7503307 4.04074222,35.7903405 Z"
                                                      id="Path"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                                Launch

                                    @if($freeWebsite)
                                        @if($freeWebsite->launch)
                                            {!! $freeWebsite->launch !!}
                                        @else
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        @endif
                                    @else
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    @endif

                            </a>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <a href="#" class="btn btn-primary btn-start">APPLY</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
