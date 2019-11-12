@extends('layouts.master')
@section('title','General Inquires -')
@section('content')

    <div class="page-header page-xl donate_bg mb-0">

        <div class="page-header-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-6 form-content">

                                <svg width="56px" height="56px" viewBox="0 0 56 56" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="homepage" transform="translate(-1082.000000, -2644.000000)" fill="#FFFFFF">
                                            <g id="126509" transform="translate(1082.000000, 2644.000000)">
                                                <path d="M44.6161033,34.593414 C43.4592925,33.3942652 42.063964,32.7531362 40.5851543,32.7531362 C39.1182706,32.7531362 37.7110162,33.3823925 36.5065019,34.5815412 L32.7379224,38.3214606 C32.4278494,38.1552419 32.1177764,38.0008961 31.8196293,37.8465502 C31.3902975,37.6328405 30.9848174,37.4310036 30.6389667,37.2172939 C27.108905,34.9852151 23.9008421,32.0763889 20.8239639,28.312724 C19.3332283,26.436828 18.331454,24.8577509 17.6039751,23.2549283 C18.5818976,22.3644713 19.4882648,21.4383961 20.3707803,20.5479391 C20.704705,20.2155018 21.0386298,19.8711918 21.3725546,19.5387545 C23.8769903,17.0454749 23.8769903,13.8160842 21.3725546,11.3228047 L18.1167881,8.08154122 C17.7470857,7.71348566 17.3654574,7.33355735 17.0076809,6.95362903 C16.2921278,6.21751792 15.5407971,5.45766129 14.7656146,4.7452957 C13.6088038,3.60551075 12.2254012,3 10.7704433,3 C9.31548543,3 7.90823107,3.60551075 6.71564263,4.7452957 C6.70371675,4.75716846 6.70371675,4.75716846 6.69179086,4.76904122 L2.63699017,8.84139785 C1.11047696,10.3611111 0.239887401,12.2132616 0.0490732502,14.3622312 C-0.237147975,17.8290771 0.788478083,21.0584677 1.57558645,23.171819 C3.50757973,28.3602151 6.39364375,33.1686828 10.698888,38.3214606 C15.9224254,44.530914 22.2073665,49.4343638 29.3867489,52.8893369 C32.1297023,54.1834677 35.7909488,55.7150538 39.8815272,55.9762545 C40.1319707,55.9881272 40.3943402,56 40.6328579,56 C43.3877372,56 45.7013587,55.0145609 47.5140932,53.0555556 C47.5260191,53.03181 47.5498708,53.0199373 47.5617967,52.9961918 C48.1819427,52.2482079 48.8974958,51.5714606 49.6488265,50.8472222 C50.1616395,50.3604391 50.6863784,49.8499104 51.1991915,49.3156362 C52.379854,48.0927419 53,46.6680108 53,45.2076613 C53,43.7354391 52.3679281,42.3225806 51.1634138,41.1353047 L44.6161033,34.593414 Z M48.8855699,47.0954301 C48.873644,47.0954301 48.873644,47.1073029 48.8855699,47.0954301 C48.4204604,47.594086 47.943425,48.0452509 47.430612,48.5439068 C46.6554295,49.2800179 45.8683211,50.0517473 45.1289163,50.9184588 C43.924402,52.2007168 42.5052217,52.8062276 40.6447838,52.8062276 C40.4658955,52.8062276 40.2750813,52.8062276 40.0961931,52.7943548 C36.5542054,52.5687724 33.2626613,51.1915323 30.7940032,50.016129 C24.0439527,46.7629928 18.1167881,42.1444892 13.1913979,36.2912186 C9.12467128,31.4115143 6.40556964,26.8998656 4.60476109,22.0557796 C3.49565384,19.0994624 3.09017377,16.796147 3.26906204,14.6234319 C3.38832088,13.234319 3.92498568,12.0826613 4.91483409,11.0972222 L8.98156067,7.04861111 C9.565929,6.50246416 10.186075,6.20564516 10.7942951,6.20564516 C11.5456258,6.20564516 12.1538459,6.65681004 12.5354742,7.03673835 C12.5474001,7.04861111 12.559326,7.06048387 12.5712519,7.07235663 C13.2987308,7.74910394 13.9904321,8.44959677 14.7179111,9.19758065 C15.0876135,9.57750896 15.4692418,9.95743728 15.8508701,10.3492384 L19.1066365,13.5905018 C20.3707803,14.8490143 20.3707803,16.0125448 19.1066365,17.2710573 C18.7607859,17.6153674 18.4268611,17.9596774 18.0810105,18.2921147 C17.0792362,19.313172 16.1251654,20.2629928 15.0876135,21.1890681 C15.0637617,21.2128136 15.0399099,21.2246864 15.0279841,21.2484319 C14.002358,22.2694892 14.1931722,23.2668011 14.4078381,23.9435484 C14.419764,23.9791667 14.4316898,24.0147849 14.4436157,24.0504032 C15.2903535,26.0925179 16.482942,28.015905 18.2956764,30.3073477 L18.3076023,30.3192204 C21.5991464,34.3559588 25.0695787,37.5022401 28.8977876,39.9124104 C29.3867489,40.2211022 29.887636,40.4704301 30.3646714,40.7078853 C30.7940032,40.921595 31.1994833,41.1234319 31.545334,41.3371416 C31.5930375,41.3608871 31.640741,41.3965054 31.6884446,41.4202509 C32.0939246,41.6220878 32.4755529,41.7170699 32.8691071,41.7170699 C33.8589555,41.7170699 34.4791015,41.0996864 34.6818416,40.8978495 L38.760494,36.8373656 C39.1659741,36.4336918 39.8099719,35.9469086 40.5613026,35.9469086 C41.3007074,35.9469086 41.9089275,36.4099462 42.2786299,36.8136201 C42.2905558,36.8254928 42.2905558,36.8254928 42.3024817,36.8373656 L48.873644,43.3792563 C50.1020101,44.5902778 50.1020101,45.8369176 48.8855699,47.0954301 Z"
                                                      id="Shape" fill-rule="nonzero"></path>
                                                <path d="M30.3229505,13.1886132 C33.442154,13.7124934 36.275629,15.188883 38.5376468,17.4510929 C40.7996646,19.7133028 42.2640236,22.5470184 42.7997646,25.6664868 C42.9307235,26.4523071 43.6093289,27 44.3831771,27 C44.47842,27 44.5617575,26.9880936 44.6570003,26.9761873 C45.5379967,26.8333108 46.1213592,25.9998651 45.9784949,25.1187939 C45.3356057,21.3444752 43.5498021,17.9035349 40.8234754,15.1769766 C38.0971486,12.4504184 34.6565004,10.6644632 30.8825023,10.0215193 C30.0015058,9.8786429 29.1800362,10.4620549 29.0252666,11.3312198 C28.8704969,12.2003846 29.4419541,13.0457368 30.3229505,13.1886132 Z"
                                                      id="Path"></path>
                                                <path d="M55.9752678,25.1247146 C54.9057774,18.8497212 51.9496578,13.1397177 47.4073278,8.59575698 C42.8649978,4.05179626 37.1570434,1.09461547 30.8843019,0.024741122 C30.0070794,-0.131532659 29.177924,0.469520346 29.0217063,1.34705773 C28.8775053,2.23661618 29.4663259,3.06606933 30.3555651,3.22234311 C35.9553688,4.17200686 41.0624859,6.82866114 45.124146,10.8797584 C49.1858062,14.9428767 51.8294904,20.0518273 52.7788133,25.6536413 C52.9109975,26.4470312 53.595952,27 54.3770405,27 C54.4731745,27 54.5572917,26.9879789 54.6534257,26.9759579 C55.5306482,26.8437262 56.1314855,26.002252 55.9752678,25.1247146 Z"
                                                      id="Path"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                                <h2>
                                    GENERAL INQUIRIES
                                </h2>
                                <p>
                                    Encourage others by sharing how God has blessed you, and declare His glory in your life!
                                </p>
                            </div>

                            <div class="col-md-6">

                                <form action="/" name="testiform" id="testiform">

                                        <div class="form-element">
                                            <input type="text" name="firstName" placeholder="First name" required>
                                        </div>

                                        <div class="form-element">
                                            <input type="text" name="lastName" placeholder="Last name" required>
                                        </div>

                                        <div class="form-element">
                                            <input type="email" name="email" placeholder="Email address" required>
                                        </div>

                                        <div class="form-element">
                                            <textarea name="testimonial"  id='testimonial' cols="30" rows="10" placeholder="Testimonial" required></textarea>
                                        </div>

                                        <div class="form-element">

                                            <button type="submit" class="submit-button state-0"><span" class="pre-state-msg">Submit</span><span class="current-state-msg hide">Sending...</span><span class="done-state-msg hide">Done!</span></button>
                                        </div>

                                    </form>

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

 <script type="text/javascript">


 const button   = document.querySelector('.submit-button'),
stateMsg = document.querySelector('.pre-state-msg');

const updateButtonMsg = function() {
  button.classList.add('state-1', 'animated');

};

const finalButtonMsg = function() {
  button.classList.add('state-2');

  setTimeout(setInitialButtonState, 10);
};

const setInitialButtonState = function() {
  button.classList.remove('state-1', 'state-2', 'animated');
};


    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });


    $("#testiform").submit(function(e){

        e.preventDefault();

        button.addEventListener('click', updateButtonMsg);


        var name = $("input[name=firstName]").val();

        var lastname = $("input[name=lastName]").val();

        var email = $("input[name=email]").val();

        var testimonial = $("#testimonial").val();

        var type = 'general';

        $.ajax({

           type:'POST',

           url:'/send-mail',

           data:{name:name,lastname:lastname,email:email,testimonial:testimonial,type:type},

           success:function(data){
            setTimeout(finalButtonMsg, 10);
            alert(data.success);
            $('#testiform').find("input[type=text], input[type=email] ,textarea",).val("")
           }

        });



    });

</script>


@endsection
