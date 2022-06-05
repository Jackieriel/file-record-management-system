<div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div class="sidebar-brand">
                <a href="{{ route('home') }}">FIMS MCM</a>
                <div id="close-sidebar">
                    <i class="fas fa-times"></i>
                </div>
            </div>

            @guest
                @if (Route::has('login'))
                    <i class="text-center">
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </i>
                @endif

            @else
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive rounded-circle" src="{{ asset('assets/images/staff/male_avatar.jpeg') }}"
                            alt=" {{ Auth::user()->name }}">
                    </div>
                    <div class="user-info">
                        <span class="user-name"> {{ Auth::user()->name }}

                        </span>
                        <span class="user-role">{{ Auth::user()->role }}</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                        <div class="text-center">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off text-danger"></i>
                        </a>
                        </div>
                    </div>
                </div>
                <!-- sidebar-header  -->

                <div class="sidebar-menu">
                    <ul>
                        <li class="sidebar-dropdown">
                            <a href="{{route('home')}}">
                                <i class="fa fa-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="{{route('home')}}">
                                <i class="fa fa-box"></i>
                                <span>Cabinet</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="{{route('home')}}">
                                <i class="fa fa-house-user"></i>
                                <span>Community</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="{{route('home')}}">
                                <i class="fa fa-users"></i>
                                <span>Users</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="#">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="#">
                    <i class="fa fa-envelope"></i>
                </a>
                <a href="#">
                    <i class="fa fa-mobile"></i>
                </a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off text-danger"></i>
                </a>


                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        @endguest

    </nav>
    <!-- sidebar-wrapper  -->
