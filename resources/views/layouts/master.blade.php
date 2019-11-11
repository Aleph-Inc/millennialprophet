<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') Millennial Prophet Ministries  </title>
    <meta property="og:image" content="" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no shrink-to-fit=no">
    <meta name="google-site-verification" content="AIzaSyD6yRFelNfJlGThrXJ70o1Rpvp18DaSmyA" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('html/public/images/favicon-32x32.png') }}" />

    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
          <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">


<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- todo-->
    <!-- app css -->
    <link rel="stylesheet" href="{{ asset('html/public/css/app.css') }}" />


</head>
<style type="text/css">
    @import url("https://fonts.googleapis.com/css?family=Open+Sans:600");
@-webkit-keyframes short-press {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  50% {
    -webkit-transform: scale(0.9);
            transform: scale(0.9);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes short-press {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  50% {
    -webkit-transform: scale(0.9);
            transform: scale(0.9);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}


.hide {
  display: none;
}

.submit-button {
  display: block;
  font-family: "Open Sans", Helvetica, Arial, sans-serif;
  font-weight: 600;
  text-transform: uppercase;
  font-size: 0.75em;
  letter-spacing: 1px;
  height: 38px;
  width: 120px;
  line-height: 38px;
  overflow: hidden;
  background: #4dbecf;
  border-radius: 3px;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
  border: 0;
  cursor: pointer;
  transition: all 0.3s ease;
}
.submit-button:hover, .submit-button:focus {
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}
.submit-button.animated {
  -webkit-animation: 0.75s short-press cubic-bezier(0.77, 0, 0.175, 1) forwards;
          animation: 0.75s short-press cubic-bezier(0.77, 0, 0.175, 1) forwards;
}
.submit-button > span {
  display: block;
  color: white;
  text-align: center;
}
.submit-button > span.pre-state-msg {
  transition: all 0.7s cubic-bezier(0.77, 0, 0.175, 1);
  transition-delay: 0.75s;
}
.submit-button.state-1 .pre-state-msg {
  margin-top: -38px;
}
.submit-button.state-2 .pre-state-msg {
  margin-top: -76px;
}

</style>
<body>



        @include('layouts.header')
        <div class="menu-overlay"></div>
            @yield('content')
        @include('layouts.footer')
    </body>
</html>
