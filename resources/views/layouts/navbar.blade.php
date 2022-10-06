
<header class="header-container">
                <div class="container">
                    <div class="top-row">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                <div id="logo">
                                    <!--<a href="index.html"><img src="images/logo.png" alt="logo"></a>-->
                                    <a href="index"><span>vacay</span>home</a>
                                </div>                       
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                                <nav class="navbar navbar-default">
                                    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                        <ul class="list-unstyled nav1 cl-effect-10">
                                            <li><a  data-hover="Home" href="/"><span>Home</span></a></li>
                                            <li><a data-hover="About"  href="about"><span>About</span></a></li>
                                            <li><a data-hover="Rooms"  href="rooms"><span>Rooms</span></a></li>
                                            <li><a data-hover="Facility" href="fasilitas"><span>Facility</span></a></li>
                                            <li><a data-hover="Facility" href="/resepsionis"><span>List</span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-2">
                                <div class="header__top__profile">
                                    <img src="/assets/img/lan.png" alt="">
                                    <span>Hi.. @if (Auth::check())
                                        {{auth()->user()->name}}
                                        @else
                                        Siapa Disana?
                                    @endif
                                    </span>
                                    <i class="fa fa-angle-down"></i>
                                    <ul>
                                        <li><a href="#" class="dropdown-item has-icon">
                                            <i class="fa fa-user"></i> Profile
                                            </a></li>
                                        <li><a href="/logOut" class="dropdown-item has-icon text-danger">
                                            <i class="fa fa-sign-out-alt"></i> Logout
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</header>