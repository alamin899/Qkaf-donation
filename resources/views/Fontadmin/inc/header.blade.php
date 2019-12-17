<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">QKAF</a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">

    <!-- /.dropdown -->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> shakib <i class="fa fa-caret-down"></i>
            {{-- {{ Auth::user()->name }} --}}
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>
{{-- <header>
        <div class="header">
            <div class="container-flex">
                <ul>
                    <li>
                        <div class="contact">
                            Contact Us:
                            <div class="contact-info">
                                <span class="contact-icon"><i class="fas fa-phone-volume"></i></span>
                                <div class="contact-no">+8801828066845</div>
                            </div>
                            <div class="contact-info">
                                <span class="mail-icon"><i class="fas fa-envelope-square"></i></span>
                                <div class="contact-no">contact@qkaf.org</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="follow">
                            Follow Us
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter-square"></i>
                            <i class="fab fa-youtube"></i>
                            <i class="fab fa-linkedin-in"></i>

                        </div>
                    </li>
                    <li>
                        <div class="user">
                            <div class="icon">
                                <i class="fa fa-language fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="loguser">
                                <a href="#">English</a>
                            </div>
                            <div class="space">|</div>
                            <div class="icon">
                                <i class="far fa-user fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="userlogin">
                                <div class="loguser"><a href="#">Login</a></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header> --}}
