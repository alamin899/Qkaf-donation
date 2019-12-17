<!doctype html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href={{asset("favicon2.ico")}}>

    <title> @yield('title') </title>
    <!--   Font Awesome   link    -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Bootstrap core CSS -->
        <link href={{asset("dist/css/bootstrap.css")}} rel="stylesheet">

        <link href="{{ asset("dist/css/style.css")}}" rel="stylesheet">

        <link href="{{ asset("dist/css/Donatiostyle.css") }}" rel="stylesheet" >
        
    <!--  js -->
        <script src={{asset("dist/js/jquery-3.4.1.min.js")}}></script>
    <style media="screen">
        .bottom_nav ul{
            list-style:none;
            display: inline-block;
        }
        .bottom_nav ul li{
            display: inline-block;
            margin-left:15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            // document.getElementById('proccedtoinfo').disabled = true;
            $(".register").click(function(){
                $(".other").show();
                $(".content").hide();
                $(".register").addClass('active');
                $(".login").removeClass('active');
            });
            $(".login").click(function(){
                $(".content").show();
                $(".other").hide();
                $(".login").addClass('active');
                $(".register").removeClass('active');
            });

            $(".radio-inline input").click(function(){
                document.getElementById('proccedtoinfo').disabled = true;
            });
            $(".amount").click(function(){
                document.getElementById('proccedtoinfo').disabled = false;
            });
            $("#cart_button").click(function(){
                document.getElementById('proccedtoinfo').disabled = false;
            });
            $("#total_amount_test").on("change", function() {
                document.getElementById('proccedtoinfo').disabled = false;
            });
            document.getElementById('total_amount_test').onchange = function () {
                alert('Hello ' + this.value);
            }

        });
    </script>
  </head>

  <body>
        @include('Frontend.header')

        @include('Frontend.errormessage.message')

        <div class="mt-2">
            @yield('content')
        </div>


        @include('Frontend.footer')

        @include('Frontend.script')

        @yield('scripts')
        
        <script>
            $(function () {
                $.ajaxSetup({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content') }
                });
            });
        </script>
        <script>
            function myFunction() {
              var x = document.getElementById("myTopnav");
              if (x.className === "topnav") {
                x.className += " responsive";
              } else {
                x.className = "topnav";
              }
            }
        </script>
        <script>
            (function (window, document) {
                var loader = function () {
                    var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
                    script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
                    tag.parentNode.insertBefore(script, tag);
                };

                window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
            })(window, document);
        </script>

  </body>
</html>
