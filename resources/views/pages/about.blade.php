@extends('layouts.master')
@section('title',"About -")
@section('content')



    <div class="page-header about_bg" id="who_we_are">
        <div class="page-title">
            <h2>
                ABOUT <br>
                MILLENNIAL PROPHET
            </h2>
        </div>
        <div class="overlay"></div>
    </div>
    <div class="page-content about-mp">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-9">
                    <h2 class="text-blue" id="what_jesus_did_for_you">
                        WHO WE ARE
                    </h2>

                    <p>
                        @if($about)
                            @if($about->whoweare)
                                {!! $about->whoweare !!}
                            @else
                                Millennial Prophet is a social media ministry built on sharing the Gospel of Jesus Christ globally, we believe the internet is the most effective and efficient platform available at present to reach a multitude of people, Social media therein provides an informative and interactive tool assisting to reach as many souls worldwide and win them for Jesus by sharing the good news. Millennial Prophet is a social media ministry built with a purpose of sharing the Gospel of Jesus Christ globally. We believe that the internet is the most effective and efficient platform available at present to reach a multitude of people and therein social media provides us with an informative and interactive tool assisting us to reach as many souls worldwide and win them for Jesus by sharing the good news.
                            @endif
                        @else
                            Millennial Prophet is a social media ministry built on sharing the Gospel of Jesus Christ globally, we believe the internet is the most effective and efficient platform available at present to reach a multitude of people, Social media therein provides an informative and interactive tool assisting to reach as many souls worldwide and win them for Jesus by sharing the good news. Millennial Prophet is a social media ministry built with a purpose of sharing the Gospel of Jesus Christ globally. We believe that the internet is the most effective and efficient platform available at present to reach a multitude of people and therein social media provides us with an informative and interactive tool assisting us to reach as many souls worldwide and win them for Jesus by sharing the good news.
                        @endif
                    </p>


                </div>
            </div>


        </div>


        <div class="container" >
            <div class="row justify-content-center">

                <div class="col-md-9">

                    <h2 >
                    WHAT JESUS DID FOR YOU</h2>

                    <p>
                        @if($about)
                            @if($about->whatjesus)
                                {!! $about->whatjesus !!}
                            @else
                                VISION - GLOBAL CHURCH To win all millennials by equipping and empowering the global church of Jesus through holistic digital solutions. MISSION - CONNECTED SEAMLESSLY To provide web and social media solutions to ministries globally in order to share the gospel of Jesus by creating a connected and interactive online community. To provide web and social media solutions for ministries all across the globe that will equip them to share the gospel of Jesus through a connected and interactive online community.                        
                            @endif
                        @else
                            VISION - GLOBAL CHURCH To win all millennials by equipping and empowering the global church of Jesus through holistic digital solutions. MISSION - CONNECTED SEAMLESSLY To provide web and social media solutions to ministries globally in order to share the gospel of Jesus by creating a connected and interactive online community. To provide web and social media solutions for ministries all across the globe that will equip them to share the gospel of Jesus through a connected and interactive online community.                        
                        @endif
                    </p>

                </div>

            </div>

        </div>


        <div class="container">
            <p>
                &nbsp;
            </p>


            <div class="row no-gutters justify-content-center ministry-links">

                <div class="col-md-9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/W2Cv5hZfOmk" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                    <h4>
                        His Heart To Heal You
                    </h4>

                    <p>
                        @if($about)
                            @if($about->hisheal)
                                {!! $about->hisheal !!}
                            @else
                                What We Believe We believe in one God, who exists in three Persons — the Father, Son and Holy Spirit. He is loving, holy and just. We believe that the Bible is God’s Word. It is inspired and accurate. It is our perfect guide in all matters of life. We believe that sin has separated us all from God, and that only through Jesus Christ can we be reconciled to God. We believe that Jesus Christ is both God and Man. He was conceived by the Holy Spirit and born of the virgin Mary. He led a sinless life, took all our sins upon Himself, died and rose again. Today, He is seated at the right hand of the Father as our High Priest and Mediator. We believe that salvation is the gift of God to man. This gift is effected by grace through faith in Jesus Christ and it produces works pleasing to God. We believe that water baptism is an outward act that demonstrates a believer's identification with the death, burial and resurrection of Jesus We believe that the Holy Spirit is our Comforter. He guides us in all areas of our lives. He also blesses us with spiritual gifts and empowers us to yield the fruit of the Spirit. We believe that the Holy Communion is a celebration of Jesus’ death and our remembrance of Him. We believe that God wants to transform, heal and prosper us, so that we can live blessed and victorious lives that will impact and help others. We believe that we are called to preach the gospel to all nations. We believe that our Lord Jesus Christ is coming back again just as He promised. Our Core Values Serve Out Of Rest We can be productive and effective on the outside because we have God's peace and rest on the inside. Serving out of rest is not inactivity, but Spirit-directed activity. People Matter We love and value every person because each of us matters to the Lord. In everything we do, we seek to glorify God and edify man. Excellence We seek to excel in all that we do because we have the mind and Spirit of Christ. Cutting Edge We endeavour to be innovative and always at the forefront of all that we do. We are geared to the times but still anchored to the Rock. We aspire to be innovative and always at the forefront of all that we do. We are geared to the times but still anchored to the Rock. Honour We treat each other with respect and integrity. We honor and submit to our leaders as unto the Lord.                        
                            @endif
                        @else
                            What We Believe We believe in one God, who exists in three Persons — the Father, Son and Holy Spirit. He is loving, holy and just. We believe that the Bible is God’s Word. It is inspired and accurate. It is our perfect guide in all matters of life. We believe that sin has separated us all from God, and that only through Jesus Christ can we be reconciled to God. We believe that Jesus Christ is both God and Man. He was conceived by the Holy Spirit and born of the virgin Mary. He led a sinless life, took all our sins upon Himself, died and rose again. Today, He is seated at the right hand of the Father as our High Priest and Mediator. We believe that salvation is the gift of God to man. This gift is effected by grace through faith in Jesus Christ and it produces works pleasing to God. We believe that water baptism is an outward act that demonstrates a believer's identification with the death, burial and resurrection of Jesus We believe that the Holy Spirit is our Comforter. He guides us in all areas of our lives. He also blesses us with spiritual gifts and empowers us to yield the fruit of the Spirit. We believe that the Holy Communion is a celebration of Jesus’ death and our remembrance of Him. We believe that God wants to transform, heal and prosper us, so that we can live blessed and victorious lives that will impact and help others. We believe that we are called to preach the gospel to all nations. We believe that our Lord Jesus Christ is coming back again just as He promised. Our Core Values Serve Out Of Rest We can be productive and effective on the outside because we have God's peace and rest on the inside. Serving out of rest is not inactivity, but Spirit-directed activity. People Matter We love and value every person because each of us matters to the Lord. In everything we do, we seek to glorify God and edify man. Excellence We seek to excel in all that we do because we have the mind and Spirit of Christ. Cutting Edge We endeavour to be innovative and always at the forefront of all that we do. We are geared to the times but still anchored to the Rock. We aspire to be innovative and always at the forefront of all that we do. We are geared to the times but still anchored to the Rock. Honour We treat each other with respect and integrity. We honor and submit to our leaders as unto the Lord.                        
                        @endif
                    </p>

                    <h2>
                        MINISTRIES
                    </h2>


                    <p>
                        @if($about)
                            @if($about->ministries)
                                {!! $about->ministries !!}
                            @else
                                What We Believe We believe in one God, who exists in three Persons — the Father, Son and Holy Spirit. He is loving, holy and just. We believe that the Bible is God’s Word. It is inspired and accurate. It is our perfect guide in all matters of life. We believe that sin has separated us all from God, and that only through Jesus Christ can we be reconciled to God. We believe that Jesus Christ is both God and Man. He was conceived by the Holy Spirit and born of the virgin Mary. He led a sinless life, took all our sins upon Himself, died and rose again. Today, He is seated at the right hand of the Father as our High Priest and Mediator. We believe that salvation is the gift of God to man. This gift is effected by grace through faith in Jesus Christ and it produces works pleasing to God. We believe that water baptism is an outward act that demonstrates a believer's identification with the death, burial and resurrection of Jesus We believe that the Holy Spirit is our Comforter. He guides us in all areas of our lives. He also blesses us with spiritual gifts and empowers us to yield the fruit of the Spirit. We believe that the Holy Communion is a celebration of Jesus’ death and our remembrance of Him. We believe that God wants to transform, heal and prosper us, so that we can live blessed and victorious lives that will impact and help others. We believe that we are called to preach the gospel to all nations. We believe that our Lord Jesus Christ is coming back again just as He promised. Our Core Values Serve Out Of Rest We can be productive and effective on the outside because we have God's peace and rest on the inside. Serving out of rest is not inactivity, but Spirit-directed activity. People Matter We love and value every person because each of us matters to the Lord. In everything we do, we seek to glorify God and edify man. Excellence We seek to excel in all that we do because we have the mind and Spirit of Christ. Cutting Edge We endeavour to be innovative and always at the forefront of all that we do. We are geared to the times but still anchored to the Rock. We aspire to be innovative and always at the forefront of all that we do. We are geared to the times but still anchored to the Rock. Honour We treat each other with respect and integrity. We honor and submit to our leaders as unto the Lord.                        
                            @endif
                        @else
                            What We Believe We believe in one God, who exists in three Persons — the Father, Son and Holy Spirit. He is loving, holy and just. We believe that the Bible is God’s Word. It is inspired and accurate. It is our perfect guide in all matters of life. We believe that sin has separated us all from God, and that only through Jesus Christ can we be reconciled to God. We believe that Jesus Christ is both God and Man. He was conceived by the Holy Spirit and born of the virgin Mary. He led a sinless life, took all our sins upon Himself, died and rose again. Today, He is seated at the right hand of the Father as our High Priest and Mediator. We believe that salvation is the gift of God to man. This gift is effected by grace through faith in Jesus Christ and it produces works pleasing to God. We believe that water baptism is an outward act that demonstrates a believer's identification with the death, burial and resurrection of Jesus We believe that the Holy Spirit is our Comforter. He guides us in all areas of our lives. He also blesses us with spiritual gifts and empowers us to yield the fruit of the Spirit. We believe that the Holy Communion is a celebration of Jesus’ death and our remembrance of Him. We believe that God wants to transform, heal and prosper us, so that we can live blessed and victorious lives that will impact and help others. We believe that we are called to preach the gospel to all nations. We believe that our Lord Jesus Christ is coming back again just as He promised. Our Core Values Serve Out Of Rest We can be productive and effective on the outside because we have God's peace and rest on the inside. Serving out of rest is not inactivity, but Spirit-directed activity. People Matter We love and value every person because each of us matters to the Lord. In everything we do, we seek to glorify God and edify man. Excellence We seek to excel in all that we do because we have the mind and Spirit of Christ. Cutting Edge We endeavour to be innovative and always at the forefront of all that we do. We are geared to the times but still anchored to the Rock. We aspire to be innovative and always at the forefront of all that we do. We are geared to the times but still anchored to the Rock. Honour We treat each other with respect and integrity. We honor and submit to our leaders as unto the Lord.                        
                        @endif
                    </p>


                </div>

            </div>


        </div>
    </div>


@endsection



