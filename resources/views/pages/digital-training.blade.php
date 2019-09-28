@extends('layouts.master')
@section('title','Digital Trainning')
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
                        @if(Page::get('middle'))
                            {!! Page::get('middle') !!}
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
                        <div class="col-md-4">

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

                                <p>
                                    @if(Page::get('join'))
                                        {!! Page::get('join') !!}
                                    @else
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    @endif
                                </p>
                            </a>
                        </div>
                        <div class="col-md-4">

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

                                <p>
                                    @if(Page::get('create'))
                                        {!! Page::get('create') !!}
                                    @else
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    @endif
                                </p>
                            </a>
                        </div>
                        <div class="col-md-4">

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

                                <p>
                                    @if(Page::get('launch'))
                                        {!! Page::get('launch') !!}
                                    @else
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    @endif
                                </p>
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

    <!--
<div class="page-header digital_training_bg">
    <div class="page-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <H2>
                        DIGITAL TRAINING
                        <span>
            Easy and simple three steps to build a free website for your church.
        </span>
                    </H2>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</div>

<div class="page-content d-training">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>
                    @if(Page::get('middle'))
                        {!! Page::get('middle') !!}
                    @else
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make
                        a type specimen book. It has survived not only five centuries, but also the leap into electronic
                        typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                        containing
                        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                        including versions
                        of Lorem Ipsum.
                    @endif
                </p>

                <a href="#" class="btn btn-primary btn-start">
                    Apply
                </a>
            </div>


            <div class="col-md-6">
                <img src="/html/public/images/dg.jpg" alt="">
            </div>

        </div>
    </div>
    <div class="page-divider"></div>


    <div class="container-fluid digital_training_info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>
                        Understanding online marketing channels can feel almost as overwhelming as being on the
                        receiving end of digital marketing campaigns.
                    </p>
                </div>

                <div class="col-md-4">
                    <img src="/html/public/images/book.png" alt="">
                </div>

                <div class="col-md-4">
                    <a href="#" class="btn btn-default">

                        <svg width="26px" height="23px" viewBox="0 0 26 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch -->
                            <desc>Created with Sketch.</desc>
                            <defs></defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="digital-training" transform="translate(-1006.000000, -1188.000000)" fill="#0674A5" fill-rule="nonzero" stroke="#1388B3">
                                    <g id="Group" transform="translate(0.000000, 985.000000)">
                                        <g id="149211" transform="translate(1007.000000, 204.000000)">
                                            <path d="M20.3904,6.58207742 C20.1792,2.9240129 17.2116,0 13.6336,0 C11.4616,0 9.3584,1.08238065 8.0556,2.8484129 C8.0256,2.83256129 7.994,2.8215871 7.9636,2.80695484 C7.8844,2.76793548 7.804,2.73094839 7.722,2.69761935 C7.6764,2.67932903 7.6308,2.66266452 7.5848,2.64640645 C7.5036,2.61754839 7.4212,2.59194194 7.3372,2.56877419 C7.2912,2.55617419 7.2456,2.54316774 7.1992,2.5326 C7.1092,2.51187097 7.0172,2.49601935 6.9244,2.48179355 C6.884,2.47569677 6.8444,2.46756774 6.8036,2.46309677 C6.6708,2.44805806 6.5364,2.43870968 6.4,2.43870968 C4.4148,2.43870968 2.8,4.07955484 2.8,6.09677419 C2.8,6.14920645 2.8032,6.20041935 2.8068,6.25163226 C1.1428,7.17305806 0,9.10410968 0,11.0367871 C0,13.9156839 2.3048,16.2580645 5.138,16.2580645 L7.2,16.2580645 C7.4212,16.2580645 7.6,16.0763806 7.6,15.8516129 C7.6,15.6268452 7.4212,15.4451613 7.2,15.4451613 L5.138,15.4451613 C2.746,15.4451613 0.8,13.4677742 0.8,11.0367871 C0.8,9.3483871 1.882,7.59576774 3.3732,6.86943871 L3.6,6.75929032 L3.6,6.50322581 C3.6,6.45445161 3.6032,6.40486452 3.606,6.35487097 L3.6104,6.27967742 L3.6052,6.20082581 C3.6028,6.16627742 3.6,6.13172903 3.6,6.09677419 C3.6,4.52827742 4.8564,3.2516129 6.4,3.2516129 C6.5236,3.2516129 6.6456,3.2625871 6.7668,3.27884516 C6.798,3.28290968 6.8292,3.28819355 6.86,3.29347742 C6.9668,3.31136129 7.072,3.33493548 7.1756,3.36541935 C7.1896,3.36948387 7.204,3.37232903 7.218,3.37639355 C7.332,3.41175484 7.4432,3.45646452 7.552,3.50686452 C7.5804,3.51987097 7.608,3.53409677 7.636,3.54791613 C7.732,3.59628387 7.826,3.64912258 7.9168,3.70887097 C8.6876,4.21612258 9.2,5.09609032 9.2,6.09677419 C9.2,6.32154194 9.3788,6.50322581 9.6,6.50322581 C9.8212,6.50322581 10,6.32154194 10,6.09677419 C10,4.97740645 9.5016,3.97550323 8.72,3.30404516 C9.8668,1.77985161 11.7552,0.812903226 13.6336,0.812903226 C16.7316,0.812903226 19.3048,3.30648387 19.5732,6.45770323 C19.1648,6.42843871 18.5524,6.4134 17.94,6.50810323 C17.7216,6.54183871 17.5716,6.74912903 17.6048,6.97105161 C17.6348,7.17224516 17.8052,7.31653548 17.9996,7.31653548 C18.0196,7.31653548 18.04,7.31490968 18.06,7.31165806 C18.9508,7.17468387 19.8792,7.30312258 19.9336,7.31084516 C21.796,7.67055484 23.2,9.41382581 23.2,11.3692645 C23.2,13.6165355 21.4004,15.4451613 19.1888,15.4451613 L17.6,15.4451613 C17.3788,15.4451613 17.2,15.6268452 17.2,15.8516129 C17.2,16.0763806 17.3788,16.2580645 17.6,16.2580645 L19.1888,16.2580645 C21.8416,16.2580645 24,14.0648516 24,11.3692645 C24,9.13825161 22.4692,7.13729032 20.3904,6.58207742 Z" id="Shape"></path>
                                            <path d="M14.8230184,16.9953755 L12.387086,19.5288155 L12.387086,11.2412903 C12.387086,11.0186632 12.2140586,10.8387097 12,10.8387097 C11.7859414,10.8387097 11.612914,11.0186632 11.612914,11.2412903 L11.612914,19.5288155 L9.17698164,16.9953755 C9.02563101,16.8379665 8.78099264,16.8379665 8.62964201,16.9953755 C8.47829137,17.1527845 8.47829137,17.4072155 8.62964201,17.5646245 L11.7259431,20.7848671 C11.761555,20.8223071 11.8045216,20.8516955 11.8521331,20.8722271 C11.8993576,20.8927587 11.9496788,20.9032258 12,20.9032258 C12.0503212,20.9032258 12.1006424,20.8927587 12.1478669,20.8722271 C12.1954784,20.8516955 12.238445,20.8223071 12.2740569,20.7848671 L15.370358,17.5646245 C15.5217086,17.4072155 15.5217086,17.1527845 15.370358,16.9953755 C15.2190074,16.8379665 14.974369,16.8379665 14.8230184,16.9953755 Z" id="Shape"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        Download Free E-book
                    </a>
                </div>
            </div>

        </div>
    </div>


    <div class="page-divider"></div>


    <div class="partner-with-us">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2>
                        PARTNER WITH US
                        HELP US TO EMPOWER
                    </h2>

                    <a href="/partner" class="btn btn-default btn-start">
                       BECOME A PARTNER
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
    -->

@endsection
