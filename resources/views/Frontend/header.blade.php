<div class="Header_top">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 hidden-sm hidden-xs Contact" style="background-color:;">
                <div class="row">
                    <div class="col-md-3 contact" style="padding-left: 0px;" > CONTACT US: </div>
                    <div class="col-md-4" style="font-size: 14.5px; color: #fff; padding-left: 0px; padding-right: 0px;"> <span class="fa fa-phone"> +88 017 1406 3350 </span> </div>
                    <div class="col-md-4" style="padding-left: 0px; font-size: 14.5px; color: #fff;"> <span class="fa fa-envelope"> contact@qkaf.org </span></div>
                </div>
            </div>
            <div class="col-sm-4 hidden-sm hidden-xs Follow" style="background-color:;">
                <div class="row">
                    <div class="col-md-4 contact" > FOLLOW US: </div>
                    <div class="col-md-2" style="font-size: 14.5px; color: #fff; padding-right: 0px; width: 5%;"> <a style="color:#ffffff;" href="https://www.facebook.com/QKAFoundation/" target="_blank"> <span class="fa fa-facebook"></span> </a> </div>
                    <div class="col-md-2" style="font-size: 14.5px; color: #fff; width: 5%; padding-left: 0px; padding-right: 0px;"> <a style="color:#ffffff;" href="https://twitter.com/qk_ahmad?lang=en" target="_blank"> <span class="fa fa-twitter"></span>  </a>
                    </div>
                    <div class="col-md-2" style="font-size: 14.5px; color: #fff; width: 5%; padding-left: 0px; padding-right: 0px;"> <a style="color:#ffffff;" href="https://www.linkedin.com/company/qk-ahmad-foundation/" target="_blank"> <span class="fa fa-linkedin"></span> </a>
                    </div>
                    <div class="col-md-2" style="font-size: 14.5px; color: #fff; width: 5%; padding-left: 0px; padding-right: 0px;">
                    <a style="color:#ffffff;" href="https://www.youtube.com/channel/UCUycEFOHeN5_uI9PqWkDpVQ" target="_blank">
                    <span class="fa fa-youtube-play"></span>  </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 Login">
                <div class="row">
                    <div class="col-md-5 english" style="font-size: 14.5px; color: #fff; padding-left: 0px; padding-right: 0px; text-align: center;"> ENGLISH </div>
                    <div class="col-md-1 divider" style="text-align: center; color:#ffffff; font-weight: bold;" > | </div>
                    @guest                          
                    <div class="col-md-4 logsec">
                        <span class="fa fa-user"> </span>
                        <a href="/customlog"  style="color:#ffffff">LOGIN</a>
                    </div>                
                    @else
                        <div class="logsec" id="username" onclick="Toggle_menu()">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown Username" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 0px;">{{ Auth::user()->frist_name }}</a>
                                <div class="dropdown-menu User_dropdown" id="User_dropdown" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">My dashboard</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>  
</div>

<!-- End of Top Header -->  
    <div class="container sticky-top">
        <div class="row">
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-md-7" id="headermenu" >
                        <div class="navbar-brand ">
                            <a href="index.html"><img style="height: 55px;" src="{{asset('images/logo.png')}}" class="img-responsive logo" alt=""> </a>
                        </div>
                    </div>
                    <div class="col-md-5 maintain_img" id="headermenu" style="padding: 0px; margin-top: 1%;" >
                        <div class="navbar-brand hidden-sm hidden-xs ">
                            <a href="#"><img src="images/site_under.gif" class="img-responsive" alt=""> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="menu_button navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdowns">
                                <div class="dropdown">
                                    <button class="dropbtn">About Us <span class="fa fa-angle-down"></span></button>
                                    <div class="dropdown-content">
                                        <a href="../mission_vision.html">Misson & Vision</a>
                                        <a href="../executive_committee.html">Executive Committee</a>
                                        <a href="../general_body.html"> General Body</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nav_menu">
                                <a class="nav-link nav_font" href="../what_we_do.html">What We Do</a>
                            </li>
                            <li class="nav-item nav_menu">
                                <a class="nav-link nav_font" href="../chairman_section.html">Chairman’s Section</a>
                            </li>
                            <li class="nav-item nav_menu">
                                <a class="nav-link nav_font" href="http://smartenterprisezone.com/qkaf/Account/Login">Total Accounting</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-2 donate" style="border-radius: 20px; background-color: #da291c; font-size: 16px; height: 30px; margin-top: 1.5%; padding-top: 3px; text-align: center; color: #fff;">
                <a style="color:#ffffff;" href="application/index.php">
                    <span class="fa fa-heart" style="font-size:16px;"></span>  Donate Now
                </a> 
            </div>
        </div>
    </div>
<hr>