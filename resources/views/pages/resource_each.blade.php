@extends('layouts.master')
@section('title','Video each')
@section('content')

    <div class="page-header videos_bg">
        <div class="page-title">
            <H2>
                VIDEOS
            </H2>
        </div>
        <div class="overlay"></div>
    </div>

    <div class="page-content page-videos">

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>
                        Video categories
                    </h3>
                    <ul class="list-unstyled v-cats">
                        <li><a href="/videos/all/"> All videos</a> </li>
                        <li><a href="/videos" class="active"> Sermons</a></li>
                        <li> <a href="#">Teachings</a></li>
                        <li> <a href="#"> Promotions</a></li>
                        <li><a href="#"> Worship</a></li>
                        <li> <a href="#"> Crusades</a></li>
                    </ul>
                </div>

                <div class="col-md-9">
                    <div class="category-active">
                        Sermons
                    </div>

                    <h3>
                    <span>
                        Latest -
                    </span>Know Yourself Your Inner Power
                    </h3>
                    <div class="main-video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/W2Cv5hZfOmk" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>


                    <div class="row related-videos">

                        <div class="col-12">
                            <h5>
                                Related videos
                            </h5>
                        </div>
                        <div class="col-md-4">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/z5hgbVDPZsQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <p>
                                A Failed Pregnancy And God’s Restoration | New Creation Church
                            </p>
                        </div>

                        <div class="col-md-4">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/w82a1FT5o88" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <p>
                                A Failed Pregnancy And God’s Restoration | New Creation Church
                            </p>
                        </div>

                        <div class="col-md-4">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/tS7SFKKDHGA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <p>
                                A Failed Pregnancy And God’s Restoration | New Creation Church
                            </p>
                        </div>

                        <div class="col-md-4">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/z5hgbVDPZsQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <p>
                                A Failed Pregnancy And God’s Restoration | New Creation Church
                            </p>
                        </div>

                        <div class="col-md-4">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/w82a1FT5o88" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <p>
                                A Failed Pregnancy And God’s Restoration | New Creation Church
                            </p>
                        </div>

                        <div class="col-md-4">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/tS7SFKKDHGA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <p>
                                A Failed Pregnancy And God’s Restoration | New Creation Church
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
