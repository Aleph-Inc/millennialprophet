@extends('layouts.master')
@section('title','Videos')
@section('content')



<div class="page-header videos_bg">
    <div class="page-title">
        <H2>
            RESOURCES - ALL VIDEOS
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
                    <li><a href="/videos/all/" class="active"> All videos</a> </li>
                    <li><a href="/videos" class=""> Sermons</a></li>
                    <li> <a href="#">Teachings</a></li>
                    <li> <a href="#"> Promotions</a></li>
                    <li><a href="#"> Worship</a></li>
                    <li> <a href="#"> Crusades</a></li>
                </ul>
            </div>

            <div class="col-md-9">
                <!--                <div class="category-active">-->
                <!--                    Sermons-->
                <!--                </div>-->

                <h3>
                    <span>
                    </span>All Videos, Short movies, Documentaries
                </h3>
                <div class="row related-videos">

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
