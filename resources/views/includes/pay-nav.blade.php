<div class="container-scroller">
    <!-- partial:../partials/_horizontal-navbar.html -->
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
        <div class="nav-top flex-grow-1">
            <div class="container d-flex flex-row h-100 align-items-center">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center">
                    <a class="navbar-brand brand-logo" href="#"><img src="{{asset('asset/images/download.png')}}" alt="logo"/></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between flex-grow-1">

                    <ul class="navbar-nav navbar-nav-right mr-0 ml-auto">

                        

                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                <img src="{{asset('asset/images/faces/face1.jpg')}}" alt="profile"/>
                                <span class="nav-profile-name">Administrator</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

                                {{--<div class="dropdown-divider"></div>--}}


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="icon-menu text-dark"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="nav-bottom">
            <div class="container">
                <ul class="nav page-navigation">
                    <li class="nav-item">
                        <a href="" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Dashboard</span></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>