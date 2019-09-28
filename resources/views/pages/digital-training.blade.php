@extends('layouts.master')
@section('title','Digital Trainning')
@section('content')

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

@endsection
