<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Millennial Prophet Ministries  </title>
    <meta property="og:image" content="" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no shrink-to-fit=no">
    <meta name="google-site-verification" content="AIzaSyD6yRFelNfJlGThrXJ70o1Rpvp18DaSmyA" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('html/public/images/favicon-32x32.png') }}" />

    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- todo-->
    <!-- app css -->
    <link rel="stylesheet" href="{{ asset('html/public/css/app.css') }}" />


</head>
<body>
        @include('layouts.header')
            @yield('content')
        @include('layouts.footer')
    </body>
</html>
