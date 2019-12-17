<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('page-title')</title>

    <!-- custom header CSS -->
    <link href={{ asset("dist/css/header.css") }} rel="stylesheet" >

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('FontAdmin')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('FontAdmin')}}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('FontAdmin')}}/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('FontAdmin')}}/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('FontAdmin')}}/vendor/font-awesome/css/all.css" rel="stylesheet" type="text/css">

    <!--   Font Awesome   link    -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    @if(Auth::user()->role_id == 1)
    <div id="soft-all-wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('Fontadmin.inc.header')
            <!-- /.navbar-top-links -->

            @include('Fontadmin.inc.sidebar')
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('content-heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @yield('main-content')
            <!-- /.row -->

        </div>


    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('FontAdmin')}}/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('FontAdmin')}}/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('FontAdmin')}}/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('FontAdmin')}}/vendor/raphael/raphael.min.js"></script>
    <script src="{{asset('FontAdmin')}}/vendor/morrisjs/morris.min.js"></script>
    <script src="{{asset('FontAdmin')}}/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('FontAdmin')}}/dist/js/sb-admin-2.js"></script>
@endif
@if(Auth::user()->role_id == 0 )])
<div class="container" style="color:white;margin:0 auto;left: 35%;right: 35%;bottom: 50%;position: absolute;">
   <h2>UnAuthentic user</h2>
    <h1>Plese Log in As Admin</h1>
</div>
@endif
</body>

</html>
